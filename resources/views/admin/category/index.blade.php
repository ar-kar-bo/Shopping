@extends('admin.layout.master')
@section('content')
<div class="card">
    <div class="card-header">
        <h4>Category</h4>
        <a href="{{route('admin.category.create')}}" class="btn btn-sm btn-primary">Create Category</a>

    </div>
    <div class="card-body">
<table class="table table-striped">
    <thead>
        <tr>
            <th>Name</th>
            <th>Option</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($categories as $c)
        <tr>
            <td>{{$c->name}}</td>
            <td>
                <a href="{{route('admin.category.edit',$c->id)}}" class="badge badge-success">Update</a>
                <form action="{{route('admin.category.destroy',$c->id)}}" method="post" class="d-inline" id="delete{{$c->slug}}">
                @csrf
                @method('DELETE')
                    <a href="#{{$c->slug}}" onclick="confirm('Delete?')? document.getElementById('delete{{$c->slug}}').submit():false;" class="badge badge-danger">Delete</a>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
    </div>
</div>
@endsection
