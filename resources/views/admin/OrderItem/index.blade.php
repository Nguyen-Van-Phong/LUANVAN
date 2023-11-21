@extends('admin.layout')
@section('title','OrderItem')

@section('content')
@if(Session::has('message'))
<h3>{{ Session::get('message') }}</h3>
@endif

<!-- Page Heading -->


@if (Session::has('success'))
<div class="alert alert-success">
    <ul>
        <li>{!! \Session::get('success') !!}</li>
    </ul>
</div>
@endif
<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>Order</th>
                        <!-- <th>Img</th> -->
                        <!-- <th>Desc</th> -->
                        <th>Product</th>
                        <th>Quantity</th>



                    </tr>
                </thead>
                <tfoot>

                </tfoot>
                <tbody>

                    @foreach($orderItemList as $item)

                    <tr>
                        <td>{{ $item->order_id}}</td>
                        <td>{{ $item->product_id}}</td>
                        <td>{{ $item->quantity}}</td>




                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection