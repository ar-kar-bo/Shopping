@extends('user.layout.master')
@section('content')
            <div class="card-header">
                Register
            </div>
            <div class="card-body">
                <form action="{{url('/register')}}" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="name">Enter Name</label>
                        <input type="text" id="name" name="name" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="email">Enter Email</label>
                        <input type="email" id="email" name="email" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="password">Enter Password</label>
                        <input type="password" id="password" name="password" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="file">Enter Email</label>
                        <input type="file" name="image" class="form-control">
                    </div>
                    <div class="form-group">
                        <input type="submit" value="Register" class="btn btn-primary">
                    </div>
                </form>
    </div>
@endsection
