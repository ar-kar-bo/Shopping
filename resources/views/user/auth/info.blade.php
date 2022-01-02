@extends('user.layout.master')
@section('content')
            <div class="card-header">
                Profile
            </div>
            <div class="card-body">
                <form action="{{url('/profile/update')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label for="name">Enter Name</label>
                        <input type="text" id="name" name="name" value="{{$user->name}}" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="email">Enter Email</label>
                        <input type="email" id="email" name="email" value="{{$user->email}}" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="file">Choose Image</label>
                        <input type="file" name="image" class="form-control">
                        <img src="{{asset($user->image)}}" style="width: 30%;border-radius:20px;" alt="" srcset="">
                    </div>
                    <div class="form-group">
                        <input type="submit" value="Update" class="btn btn-primary">
                    </div>
                </form>
    </div>
@endsection
