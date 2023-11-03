@extends('admin.layout')
@section('title','User')

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
    <div class="card-header py-3">
        <a href="{{ route('admin.user.create')}}" class="m-0 font-weight-bold  btn btn-primary ">Add +</a>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Action</th>

                    </tr>
                </thead>
                <tfoot>
                </tfoot>
                <tbody>

                    @foreach($userList as $item)

                    <tr>
                        <td>{{ $item->name}}</td>
                        <td>{{ $item->email}}</td>

                        <td>
                            <a href="{{route('admin.user.delete',['id' => $item->id])}}">
                                <button class="btn btn-primary ml-4">Delete</button>
                            </a>

                        </td>

                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection