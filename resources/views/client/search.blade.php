@extends('client.layout')
@section('title','Search')
@section('content')
@if ($productList->count() > 0)
<div class="container">
    <div class="products">
        <div class="product__title">
            <h2>Từ khóa tìm kiếm"{{$query}}"</h2>
        </div>
        <div class="product__content mt-4">
            <div class=" row ">
                @foreach ($productList as $item)
                <div class="col-lg-3 col-md-6 col-6">
                    <div class="product__content-post">
                        <a class="" href="{{route('product_detail',['id' => $item->id])}}">
                            <img src="{{asset('fe')}}/images/{{( $item->img )}}" alt="">
                            <p>{{$item->name}}</p>

                        </a>
                        <div class="product__content-price">
                            <span>{{$item->price}}đ</span>
                        </div>

                    </div>
                </div>

                @endforeach
            </div>
        </div>
    </div>
</div>
@else
<div class="product__title">
    <h2>Không có sản phẩm này</h2>
</div>
@endif
@endsection