@extends('admin.layout')
@section('title','Order')

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
                        <th>user</th>
                        <!-- <th>Img</th> -->
                        <!-- <th>Desc</th> -->
                        <th>Code</th>
                        <th>Address</th>
                        <th>Phone</th>
                        <th>Status</th>


                    </tr>
                </thead>
                <tfoot>

                </tfoot>
                <tbody>

                    @foreach($orderList as $item)

                    <tr>
                        <td>{{ $item->user->name}}</td>
                        <td>{{ $item->code}}</td>
                        <td>{{ $item->address}}</td>
                        <td>{{ $item->phone}}</td>
                        <td>{{ $item->status}}</td>



                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection