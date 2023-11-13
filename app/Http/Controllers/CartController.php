<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Order;
use App\Models\Product;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function addToCart(Request $request, $id)
    {
        $quantity = request()->input('quantity', 1);
        $product = Product::find($id);

        $cart = Order::where('user_id', auth()->user()->id)
            ->where('product_id', $id)
            ->first();

        if ($cart) {
            $cart->increment('quantity', $quantity);
        } else {
            Order::create([
                'user_id' => auth()->user()->id,
                'product_id' => $id,
                'quantity' => $quantity,
            ]);
        }

        return redirect()->back()->with('success', 'Product added to cart successfully!');
    }

    public function showCart()
    {
        $carts = Order::where('user_id', auth()->user()->id)->get();
        $total = $carts->sum(function ($cart) {
            return $cart->product->price * $cart->quantity;
        });

        return view('client.cart', compact('carts', 'total'));
    }


    public function destroy(string $id)
    {

        $cart = Order::destroy($id);



        // $message = "Seccess full deleted";
        // if (!Cart::destroy($id)) {
        //     $message = "Seccess full failed";
        // }

        return redirect()->back()->with('success', 'Seccess full deleted');
    }
}
