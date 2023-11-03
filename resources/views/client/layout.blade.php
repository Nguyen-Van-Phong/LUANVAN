<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>gaubongonline</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet" href="{{asset('fe')}}/css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <script type="" src="{{asset('fe')}}/js/main.js"></script>

</head>

<body>
    @include('inc.header')
    @include('inc.banner')
    @include('inc.services')

    <div class="container">
        <div class="row ">
            <div class="col-6 col-sm-4 home__banner"><a href=""><img src="images/gaubong1.png" alt=""></a></div>
            <div class="col-6 col-sm-4 home__banner"><a href=""><img src="images/gaubong2.png" alt=""></a></div>
            <div class="col-6 col-sm-4 home__banner"><a href=""><img src="images/gaubong3.png" alt=""></a></div>
            <div class="col-6 col-sm-4 home__banner"><a href=""><img src="images/gaubong4.png" alt=""></a></div>
            <div class="col-6 col-sm-4 home__banner"><a href=""><img src="images/gaubong5.png" alt=""></a></div>
            <div class="col-6 col-sm-4 home__banner"><a href=""><img src="images/gaubong6.png" alt=""></a></div>
        </div>
        <div class="collection">
            <div class="collection__title">
                <h2>BỘ SƯU TẬP GẤU BÔNG</h2>
            </div>
            <div class="collection__content mt-4">
                <div class=" row ">
                    <div class="col-lg-4 col-md-4 col-12">
                        <div class="collection__content-post">
                            <a href="">
                                <img src="images/collection4.jpg" alt="">
                            </a>
                        </div>
                        <div class="collection__content-info">
                            <a href="">
                                <p>Team Vàng Bùng Nổ Cho Mùa Hè Rực Rỡ</p>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-12">
                        <div class="collection__content-post">
                            <a href="">
                                <img src="images/collection5.jpg" alt="">
                            </a>
                        </div>
                        <div class="collection__content-info">
                            <a href="">
                                <p>Team Vàng Bùng Nổ Cho Mùa Hè Rực Rỡ</p>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-12">
                        <div class="collection__content-post">
                            <a href="">
                                <img src="images/collection3.jpg" alt="">
                            </a>
                        </div>
                        <div class="collection__content-info">
                            <a href="">
                                <p>Team Vàng Bùng Nổ Cho Mùa Hè Rực Rỡ</p>
                            </a>
                        </div>
                    </div>

                </div>
            </div>
            <div class="content__more">
                <a class="btn btn-primary" href="">
                    Xem thêm
                </a>
            </div>
            <div class="products">
                <div class="product__title">
                    <h2>GẤU BÔNG HOT TREND</h2>
                </div>
                <div class="product__content mt-4">
                    <div class=" row ">
                        <div class="col-lg-3 col-md-6 col-6">
                            <div class="product__content-post">
                                <a class="" href="products.html">
                                    <img src="images/hottrend9.jpg" alt="">
                                    <p>Gấu Bông Monpink</p>
                                </a>
                                <div class="product__content-price">
                                    <span>150.000đ</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-6">
                            <div class="product__content-post">
                                <a class="" href="">
                                    <img src="images/hottrend8.jpg" alt="">
                                    <p>Gấu Bông MonPink Dây Đeo</p>
                                </a>
                                <div class="product__content-price">
                                    <span>150.000đ</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-6">
                            <div class="product__content-post">
                                <a class="" href="">
                                    <img src="images/hottrend7.jpg" alt="">
                                    <p>Gấu Trúc Bông Gấu Tre</p>
                                </a>
                                <div class="product__content-price">
                                    <span>150.000đ</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-6">
                            <div class="product__content-post">
                                <a class="" href="">
                                    <img src="images/hottrend6.jpg" alt="">
                                    <p>Mèo Bông Dudu</p>
                                </a>
                                <div class="product__content-price">
                                    <span>150.000đ</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="content__more">
                    <a class="btn btn-primary" href="">
                        Xem tất cả các gấu bông hottrend
                    </a>
                </div>
            </div>
            <div class="products">
                <div class="product__title">
                    <h2>GẤU BÔNG TEDDY CAO CẤP</h2>
                </div>
                <div class="product__content mt-4">
                    <div class=" row ">
                        <div class="col-lg-3 col-md-6 col-6">
                            <div class="product__content-post">
                                <a class="" href="">
                                    <img src="images/hottrend9.jpg" alt="">
                                    <p>Gấu Bông Monpink</p>
                                </a>
                                <div class="product__content-price">
                                    <span>150.000đ</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-6">
                            <div class="product__content-post">
                                <a class="" href="">
                                    <img src="images/hottrend8.jpg" alt="">
                                    <p>Gấu Bông MonPink Dây Đeo</p>
                                </a>
                                <div class="product__content-price">
                                    <span>150.000đ</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-6">
                            <div class="product__content-post">
                                <a class="" href="">
                                    <img src="images/hottrend7.jpg" alt="">
                                    <p>Gấu Trúc Bông Gấu Tre</p>
                                </a>
                                <div class="product__content-price">
                                    <span>150.000đ</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-6">
                            <div class="product__content-post">
                                <a class="" href="">
                                    <img src="images/hottrend6.jpg" alt="">
                                    <p>Mèo Bông Dudu</p>
                                </a>
                                <div class="product__content-price">
                                    <span>150.000đ</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="content__more">
                    <a class="btn btn-primary" href="">
                        Xem tất cả các gấu bông teddy cao cấp
                    </a>
                </div>
            </div>
            <div class="products">
                <div class="product__title">
                    <h2>BST HOA BÔNG KHÔNG TÀN</h2>
                </div>
                <div class="product__content mt-4">
                    <div class=" row ">
                        <div class="col-lg-3 col-md-6 col-6">
                            <div class="product__content-post">
                                <a class="" href="">
                                    <img src="images/hottrend9.jpg" alt="">
                                    <p>Gấu Bông Monpink</p>
                                </a>
                                <div class="product__content-price">
                                    <span>150.000đ</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-6">
                            <div class="product__content-post">
                                <a class="" href="">
                                    <img src="images/hottrend8.jpg" alt="">
                                    <p>Gấu Bông MonPink Dây Đeo</p>
                                </a>
                                <div class="product__content-price">
                                    <span>150.000đ</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-6">
                            <div class="product__content-post">
                                <a class="" href="">
                                    <img src="images/hottrend7.jpg" alt="">
                                    <p>Gấu Trúc Bông Gấu Tre</p>
                                </a>
                                <div class="product__content-price">
                                    <span>150.000đ</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-6">
                            <div class="product__content-post">
                                <a class="" href="">
                                    <img src="images/hottrend6.jpg" alt="">
                                    <p>Mèo Bông Dudu</p>
                                </a>
                                <div class="product__content-price">
                                    <span>150.000đ</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="content__more">
                    <a class="btn btn-primary" href="">
                        Xem tất cả các bst hoa bông không tàn
                    </a>
                </div>
            </div>
            <div class="products">
                <div class="product__title">
                    <h2>BST NHÍM BÔNG</h2>
                </div>
                <div class="product__content mt-4">
                    <div class=" row ">
                        <div class="col-lg-3 col-md-6 col-6">
                            <div class="product__content-post">
                                <a class="" href="">
                                    <img src="images/hottrend9.jpg" alt="">
                                    <p>Gấu Bông Monpink</p>
                                </a>
                                <div class="product__content-price">
                                    <span>150.000đ</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-6">
                            <div class="product__content-post">
                                <a class="" href="">
                                    <img src="images/hottrend8.jpg" alt="">
                                    <p>Gấu Bông MonPink Dây Đeo</p>
                                </a>
                                <div class="product__content-price">
                                    <span>150.000đ</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-6">
                            <div class="product__content-post">
                                <a class="" href="">
                                    <img src="images/hottrend7.jpg" alt="">
                                    <p>Gấu Trúc Bông Gấu Tre</p>
                                </a>
                                <div class="product__content-price">
                                    <span>150.000đ</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-6">
                            <div class="product__content-post">
                                <a class="" href="">
                                    <img src="images/hottrend6.jpg" alt="">
                                    <p>Mèo Bông Dudu</p>
                                </a>
                                <div class="product__content-price">
                                    <span>150.000đ</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="content__more">
                    <a class="btn btn-primary" href="">
                        Xem tất cả các bst nhím bông
                    </a>
                </div>
            </div>
            <div class="products">
                <div class="product__title">
                    <h2>GẤU TRÚC BÔNG</h2>
                </div>
                <div class="product__content mt-4">
                    <div class=" row ">
                        <div class="col-lg-3 col-md-6 col-6">
                            <div class="product__content-post">
                                <a class="" href="">
                                    <img src="images/hottrend9.jpg" alt="">
                                    <p>Gấu Bông Monpink</p>
                                </a>
                                <div class="product__content-price">
                                    <span>150.000đ</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-6">
                            <div class="product__content-post">
                                <a class="" href="">
                                    <img src="images/hottrend8.jpg" alt="">
                                    <p>Gấu Bông MonPink Dây Đeo</p>
                                </a>
                                <div class="product__content-price">
                                    <span>150.000đ</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-6">
                            <div class="product__content-post">
                                <a class="" href="">
                                    <img src="images/hottrend7.jpg" alt="">
                                    <p>Gấu Trúc Bông Gấu Tre</p>
                                </a>
                                <div class="product__content-price">
                                    <span>150.000đ</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-6">
                            <div class="product__content-post">
                                <a class="" href="">
                                    <img src="images/hottrend6.jpg" alt="">
                                    <p>Mèo Bông Dudu</p>
                                </a>
                                <div class="product__content-price">
                                    <span>150.000đ</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="content__more">
                    <a class="btn btn-primary" href="products.html">
                        Xem tất cả các gấu trúc bông
                    </a>
                </div>
            </div>
        </div>
        <div class="  row__home__service mt-5">
            <div class=" col__home__service">
                <a class="home__service" href="">
                    <img src="images/content1.png" alt="">
                    <p>Giao hàng tận nhà</p>
                </a>
            </div>
            <div class=" col__home__service">
                <a class="home__service" href="">
                    <img src="images/content2.png" alt="">
                    <p>Bọc quà giá rẻ</p>
                </a>
            </div>
            <div class=" col__home__service">
                <a class="home__service" href="">
                    <img src="images/content3.png" alt="">
                    <p>Tặng thiệp miễn phí</p>
                </a>
            </div>
            <div class=" col__home__service">
                <a class="home__service" href="">
                    <img src="images/content4.png" alt="">
                    <p>Giặt gấu bông</p>
                </a>
            </div>
            <div class=" col__home__service">
                <a class="home__service" href="">
                    <img src="images/content5.png" alt="">
                    <p>Nén nhỏ gấu</p>
                </a>
            </div>
        </div>

    </div>
    <!-------------------- app container ------------------>
    @include('inc.footer')


</body>



</html>