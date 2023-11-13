@extends('client.layout')

@section('content')
<div class="container">
    <h2 class="mb-3">Your Cart</h2>
    @if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
    @endif
    @if ($carts->isEmpty())
    <div class="alert alert-warning">
        Your cart is empty!
    </div>
    @else
    <div class="container">
        <div class="row">
            <div class="col-9">
                <table class="table table-striped table-hover">
                    <thead>
                        <tr class="table__title">
                            <th colspan="2">Product</th>
                            <th>Price</th>
                            <th>Quantity</th>

                            <th>Total</th>
                            <th>Delete</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($carts as $cart)
                        <tr>

                            <td> {{ $cart->product->name }}</td>
                            <td> <img src="{{asset('fe')}}/images/{{ $cart->product->img }}" width="100px" alt=""></td>

                            <td>${{ $cart->product->price }}</td>
                            <td>{{ $cart->quantity }}</td>
                            <td>${{ $cart->product->price * $cart->quantity }}</td>
                            <td>
                                <form action="{{route('cart.destroy', $cart->id)}}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm ">Xóa</button>
                                </form>

                            </td>
                        </tr>

                        @endforeach

                    </tbody>

                </table>
            </div>

            <div class="col-3">
                <div class="total">

                    <div class="container">
                        <div class="total__content">
                            <h3>ORDER SUMMARY</h3>
                            <div class="total__subtotal d-flex">
                                <p>Subtotal</p>
                                <p style="color:palevioletred">0$</p>
                            </div>
                            <div class="Delivery">
                                <p>Delivery</p>
                                <p>free</p>
                            </div>
                            <div class="tax">
                                <p>Tax</p>
                                <p>Free</p>
                            </div>
                            <div class="total__total">
                                <p>TOTAL</p>
                                <p>${{ $total }}</p>
                            </div>
                            <div class="total__apply">
                                <input type="text" placeholder="Coupon">
                                <button>Apply</button>
                            </div>
                            <div class="Checkout">
                                <button> Process to checkout </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    @endif
</div>
@endsection