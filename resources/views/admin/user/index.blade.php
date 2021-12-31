@extends('admin.layout.master')
@section('content')
<div class="card">
    <div class="card-header">
        <h4>All Users</h4>
    </div>
    <div class="card-body">
        <a href="" class="btn btn-sm btn-primary">Create User</a>
<table class="table table-striped">
    <thead>
        <tr>
            <th>Name</th>
            <th>Email</th>
            <th>Image</th>
            <th>Order Count</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($users as $user)
        <tr>
            <td>{{$user->name}}</td>
            <td>
                {{$user->email}}
            </td>
            <td>
                <img src="{{asset($user->image)}}" style="width: 50px;border-radius:10px;" alt="" srcset="">
            </td>
            <td>
                {{$user->order_count}}
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
    </div>
</div>
@endsection
