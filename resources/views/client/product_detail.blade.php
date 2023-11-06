@extends('client.layout')
@section('title','Product')
@section('content')
<div class="container">
    <div class="content__area">
        <div class="row">

            <div class="col-md-6 col-12 product__gallery">
                <div class="img"> <img src="{{url ( $product->img )}}" alt=""></div>
            </div>
            <div class="col-md-6 col-12">
                <div class="product__summary">
                    <h1>{{$product->name}}</h1>
                    <table class=" table table-borderless">
                        <thead>
                            <tr>
                                <th scope="col">Size</th>
                                <th scope="col">Giá bán</th>
                                <th scope="col">Trạng thái</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><span class="size">1m</span></td>
                                <td><span class="price">850.000đ</span></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td><span class="size">1m2</span></td>
                                <td><span class="price">1.200.000đ</span></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td><span class="size">1m5</span></td>
                                <td><span class="price">1.700.000đ</span></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td><span class="size">1m7</span></td>
                                <td><span class="price">2.300.000đ</span></td>
                                <td></td>
                            </tr>

                    </table>
                    <form action="">
                        <div class="tab-content">
                            <span class="price">{{$product->price}}đ</span>
                        </div>
                        <ul class="nav">
                            <li nav-item><a class="active" href="">1m</a></li>
                            <li nav-item><a href="">1m2</a></li>
                            <li nav-item><a href="">1m5</a></li>
                            <li nav-item><a href="">1m7</a></li>
                        </ul>
                        <button class=" btn-custom add__to__cart" type="submit">Mua hàng</button>
                    </form>
                    <form class="Order-quickly mt-3" action="">
                        <strong>Đặt hàng nhanh</strong>
                        <div class="input-group">
                            <input type="text" placeholder="Nhập số điện thoại">

                            <button class="btn-btn-primary" type="submit">Gửi</button>

                        </div>
                    </form>
                    <div class="row row-reason mb-3">
                        <div class="col-12 col-md-6 col-reason">
                            <div class="reason">
                                <i class="fa-solid fa-check"></i>
                                100% bông trắng tinh khiết
                            </div>
                        </div>
                        <div class="col-12 col-md-6 col-reason">
                            <div class="reason">
                                <i class="fa-solid fa-check"></i>
                                Bảo vệ đường chỉ trọn đời
                            </div>
                        </div>
                        <div class="col-12 col-md-6 col-reason">
                            <div class="reason">
                                <i class="fa-solid fa-check"></i>
                                Miễn phí gói quà
                            </div>
                        </div>
                        <div class="col-12 col-md-6 col-reason">
                            <div class="reason">
                                <i class="fa-solid fa-check"></i>
                                Miễn phí gói chân không
                            </div>
                        </div>
                        <div class="col-12 col-md-6 col-reason">
                            <div class="reason">
                                <i class="fa-solid fa-check"></i>
                                100% Ảnh chụp tại shop
                            </div>
                        </div>
                        <div class="col-12 col-md-6 col-reason">
                            <div class="reason">
                                <i class="fa-solid fa-check"></i>
                                Bảo hành gấu bông 6 tháng
                            </div>
                        </div>
                    </div>
                    <div class="hotline mb-4">
                        <strong>Đặt hàng online: 0398827475</strong>
                        <strong>Mua hàng buôn/sỉ: 039742682</strong>
                    </div>
                </div>

            </div>

        </div>
    </div>


</div>
@endsection