@extends('user.layout.master')
@section('content')
<h4>Login</h4>
<form action="{{url('/login')}}" method="post">
    @csrf
    <div class="form-group">
        <label for="email">Enter Email</label>
        <input type="email" id="email" name="email" class="form-control">
    </div>
    <div class="form-group">
        <label for="password">Enter Password</label>
        <input type="password" id="password" name="password" class="form-control">
    </div>
    <div class="form-group">
        <input type="submit" value="Login" class="btn btn-primary">
    </div>
</form>
@endsection
