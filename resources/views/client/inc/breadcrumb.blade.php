<div class="container">
    <ul class="breadcrumb mt-2">
        <li class="breadcrumb-item">Trang chủ</li>

        <li class="breadcrumb-item">
            <a href="{{route('product_detail',['id' => $product->id])}}">{{$product->category->name}}</a>
        </li>
        <li class="breadcrumb-item">
            <a href="">{{$product->name}}</a>
        </li>
    </ul>
</div>