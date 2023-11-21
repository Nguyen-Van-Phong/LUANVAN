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
            <div class="col-12 col-md-12 col-lg-9">
                <table class="table table-striped table-hover">
                    <thead>
                        <tr>
                            <th colspan="2">Product</th>
                            <th class="product__price">Price</th>
                            <th>Quantity</th>
                            <th>Total</th>
                            <th>Delete</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($carts as $cart)
                        <tr>

                            <td> {{ $cart->product->name }}</td>
                            <td> <img src="{{asset('fe')}}/images/{{ $cart->product->img }}" width="56px" alt=""></td>

                            <td class="product__price">${{number_format( $cart->product->price )}}</td>
                            <td>{{ $cart->quantity }}</td>
                            <td>${{number_format( $cart->product->price * $cart->quantity )}}</td>
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

            <div class="col-12 col-md-12 col-lg-3 m-auto">
                <div class="total mb-2">

                    <div class="container">
                        <div class="total__content">
                            <h3 class=" text__checkout text-center">THANH TOÁN </h3>
                            <div class="total__subtotal d-flex">
                                <p>PHỤ THU</p>
                                <p style="color:palevioletred">0$</p>
                            </div>
                            <div class="Delivery">
                                <p>VẬN CHUYỂN</p>
                                <p>MIỄN PHÍ</p>
                            </div>
                            <div class="tax">
                                <p>THUẾ</p>
                                <p>MIỄN PHÍ</p>
                            </div>
                            <div class="total__total">
                                <p>TOTAL</p>
                                <p>${{number_format( $total )}}</p>
                            </div>

                            <div class="Checkout">
                                <form action="/check-out" method="post">
                                    @csrf
                                    <h5 class="text__infor text-center mb-3"> VUI LÒNG NHẬP THÔNG TIN</h5>
                                    <label for="">NHẬP HỌ TÊN</label>
                                    <input type="text" class="form-control" name="name" value="{{$user->name}}" required>
                                    <label for="">ĐỊA CHỈ</label>
                                    <input type="text" class="form-control" name="address" value="{{$user->address}}" required>
                                    <label for="">SĐT</label>
                                    <input type="text" class="form-control" name="phone" value="{{$user->phone}}" required>
                                    <input type="hidden" name="total" value="{{$total}}">
                                    <button name=""> THANH TOÁN NGAY! </button>
                                </form>
                            </div>
                            <div class="Checkout">
                                <button type="submit" name="checkout"> CHUYỂN KHOẢN! </button>
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