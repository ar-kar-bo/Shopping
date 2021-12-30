@extends('admin.layout.master')
@section('content')
<div class="card">
    <div class="card-body">
        <a href="{{route('admin.product.index')}}" class="btn btn-primary">All Products</a>
        <form action="{{route('admin.product.store')}}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="name">Enter Name</label>
                <input type="text" name="name" class="form-control" id="">
            </div>
            <div class="form-group">
                <label for="name">Enter Price</label>
                <input type="text" name="price" class="form-control" id="">
            </div>

            <div class="form-group">
                <label for="name">Choose Category</label>
                <select name="cat_id" class="form-control" id="">
                    @foreach ($cat as $c)
                    <option value="{{$c->id}}">{{$c->name}}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="name">Enter Description</label>
                <textarea name="description" cols="30" rows="10" class="form-control" id=""></textarea>
            </div>
            <div class="form-group">
                <label for="">Choose Image</label>
                <input type="file" name="image" class="form-control" id="">
            </div>
            <input type="submit" value="Create" class="btn btn-dark">
        </form>
    </div>
</div>

@endsection
