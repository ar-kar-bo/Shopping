@extends('admin.layout.master')
@section('content')
<a href="{{route('admin.category.index')}}" class="btn btn-sm btn-primary">All Category</a>
<form action="{{route('admin.category.update',$category->id)}}" method="post">
    @csrf
    @method('PUT')
    <div class="form-group">
        <label for="name">Enter Name</label>
        <input type="text" value="{{$category->name}}" name="name" class="form-controll" id="name">
    </div>
    <input type="submit" value="Update" class="btn btn-sm btn-dark">
</form>
@endsection
