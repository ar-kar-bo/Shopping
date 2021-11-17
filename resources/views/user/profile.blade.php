@extends('user.layout.master')
@section('content')
<form action="" method="post" enctype="multipart/form-data">
    <div class="form-group">
        <label for="">Your Name</label>
        <input type="text" name="name" class="form-control">
    </div>
    <div class="form-group">
        <label for="">Your email</label>
        <input type="text" name="email" class="form-control">
    </div>
    <div class="form-group">
        <label for="">Your Password</label>
        <input type="text" name="password" class="form-control">
    </div>
    <div class="form-group">
        <label for="">Your Image</label>
        <input type="file" name="image" class="form-control">
        <img src="./assets/2.jpg" style="width:20%;border-radius:20%" alt="">
    </div>
    <input type="submit" value="Update" class="btn btn-sm btn-primary" id="">
</form>
@endsection
