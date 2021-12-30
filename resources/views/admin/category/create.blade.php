@extends('admin.layout.master')
@section('content')
<div class="card">
    <div class="card-body">
        <a href="{{route('admin.category.index')}}" class="btn btn-sm btn-primary">All Categories</a>
<form action="{{route('admin.category.store')}}" method="post">
    @csrf
    <div class="form-group">
        <label for="name">Enter Name</label>
        <input type="text" name="name" class="form-control" id="name">
    </div>
    <input type="submit" value="Create" class="btn btn-sm btn-dark">
</form>
    </div>
</div>
@endsection
