@extends('admin.layout.master')
@section('content')
<a href="{{route('admin.category.index')}}" class="btn btn-sm btn-primary">All Category</a>
<form action="{{route('admin.category.store')}}" method="post">
    @csrf
    <div class="form-group">
        <label for="name">Enter Name</label>
        <input type="text" name="name" class="form-controll" id="name">
    </div>
    <input type="submit" value="Create" class="btn btn-sm btn-dark">
</form>
@endsection
