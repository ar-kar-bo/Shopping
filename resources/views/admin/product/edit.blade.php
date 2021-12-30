@extends('admin.layout.master')
@section('content')
<div class="card">
    <div class="card-body">
        <a href="{{route('admin.product.index')}}" class="btn btn-sm btn-primary">All Products</a>
        <form action="{{route('admin.product.update',$product->id)}}" method="post" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="name">Enter Name</label>
                <input type="text" name="name" value="{{$product->name}}" class="form-control" id="">
            </div>
            <div class="form-group">
                <label for="name">Enter Price</label>
                <input type="text" name="price" value="{{$product->price}}" class="form-control" id="">
            </div>

            <div class="form-group">
                <label for="name">Choose Category</label>
                <select name="cat_id" class="form-control" id="">
                    @foreach ($cat as $c)
                    <option value="{{$c->id}}" @if ($c->id == $product->category_id)selected

                    @endif>{{$c->name}}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="name">Enter Description</label>
                <textarea name="description" cols="30" rows="10" class="form-control" id="">{{$product->description}}</textarea>
            </div>
            <div class="form-group">
                <label for="">Choose Image</label>
                <input type="file" name="image" class="form-control" id="">
                <img src="{{asset($product->image)}}" style="width: 30%;border-radius:20px;" alt="" srcset="">

            </div>
            <input type="submit" value="Update" class="btn btn-dark">
        </form>
    </div>
</div>

@endsection
