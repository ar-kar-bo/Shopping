@extends('user.layout.master')
@section('content')
            <div class="card-header">
                Register
            </div>
            <div class="card-body">
                <form action="{{url('/register')}}" method="post" enctype="multipart/form-data">
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
                        <label for="new_pw">Enter New Password</label>
                        <input type="password" id="new_pw" name="new_pw" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="con_pw">Enter Confirm Password</label>
                        <input type="password" id="con_pw" name="con_pw" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="file">Choose Image</label>
                        <input type="file" name="image" class="form-control">
                    </div>
                    <div class="form-group">
                        <input type="submit" value="Register" class="btn btn-primary">
                    </div>
                </form>
    </div>
@endsection
