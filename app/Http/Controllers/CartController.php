<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Order;
use App\Models\OrderItem;
use App\Models\Product;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;
use Illuminate\Support\Str;

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

        $cart = Cart::where('user_id', auth()->user()->id)
            ->where('product_id', $id)
            ->first();

        if ($cart) {
            $cart->increment('quantity', $quantity);
        } else {
            Cart::create([
                'user_id' => auth()->user()->id,
                'product_id' => $id,
                'quantity' => $quantity,
            ]);
        }

        return redirect()->back()->with('success', 'Product added to cart successfully!');
    }

    public function showCart()
    {
        $carts = Cart::where('user_id', auth()->user()->id)->get();
        $total = $carts->sum(function ($cart) {
            return $cart->product->price * $cart->quantity;
        });
        $user_id = Auth::user()->id;

        $user = User::find($user_id);


        return view('client.cart', compact('carts', 'total', 'user'));
    }


    public function destroy(string $id)
    {

        $cart = Cart::destroy($id);



        // $message = "Seccess full deleted";
        // if (!Cart::destroy($id)) {
        //     $message = "Seccess full failed";
        // }

        return redirect()->back()->with('success', 'Seccess full deleted');
    }
    public function checkout(Request $request)
    {



        if ($request->total) {
            $order = new Order();
            $user = Auth::user();
            $order->user_id = $user->id;
            $order->address = $request->address;
            $order->phone = $request->phone;
            $codeRandom = Str::random(11);
            $order->code = $codeRandom;
            $order->status = 1;
            $order->payment_method = 1;
            $order->save();


            $cart = Cart::where('user_id', $user->id)->get();
            foreach ($cart as $carts) {
                $orderdetail = new OrderItem();
                $orderdetail->order_id = $order->id;
                $orderdetail->product_id = $carts->product_id;
                $orderdetail->save();
            }


            return redirect()->back()->with('success', ' Thanh toán thành công');
        }
    }
}
