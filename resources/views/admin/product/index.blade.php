@extends('admin.layout.master')
@section('content')
<div class="card">
    <div class="card-body">
        <a href="{{route('admin.product.create')}}" class="btn btn-sm btn-primary">Create Product</a>
<table class="table table-striped">
    <thead>
        <tr>
            <th>Name</th>
            <th>Image</th>
            <th>Category</th>
            <th>Option</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($products as $p)
        <tr>
            <td>{{$p->name}}</td>
            <td>
                <img src="{{asset($p->image)}}" style="width: 40px;" alt="" srcset="">
            </td>
            <td>{{$p->category->name}}</td>
            <td>

                <a href="{{route('admin.product.edit',$p->id)}}" class="badge badge-success">Update</a>
                <a href="{{route('admin.product.show',$p->id)}}" class="badge badge-dark text-white">Detail</a>
                <form action="{{route('admin.product.destroy',$p->id)}}" method="post" class="d-inline" id="delete{{$p->slug}}">
                @csrf
                @method('DELETE')
                    <a href="#{{$p->slug}}" onclick="confirm('Delete?')? document.getElementById('delete{{$p->slug}}').submit():false;" class="badge badge-danger">Delete</a>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
{{$products->links()}}
    </div>
</div>

@endsection
