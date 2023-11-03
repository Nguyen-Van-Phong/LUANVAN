@extends('admin.layout')
@section('title','Create user')

@section('content')

<div class="form">

    <form action="{{route('admin.user.create')}}" method="post">
        @csrf
        {{ csrf_field() }}
        <div class="row">
            <div class="col-md-6 col-12">
                <div class="form-group">
                    <label for="">Name</label>
                    <input name="name" type="text" class="form-control" required placeholder="Enter name">
                </div>
            </div>
            <div class="col-md-6 col-12">
                <div class="form-group">
                    <label for="">Emai</label>
                    <input name="email" type="text" require class="form-control" placeholder="Enter name">
                </div>
            </div>
            <div class="col-md-6 col-12">
                <div class="form-group">
                    <label for="">Password</label>
                    <input name="password" type="password" require class="form-control" placeholder="Enter name">
                </div>
            </div>



        </div>
        <button class="btn btn-success" type="submit">Add</button>

    </form>

</div>



@endsection