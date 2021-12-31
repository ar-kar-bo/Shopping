@extends('admin.layout.master')
@section('content')
<div class="card">
    <div class="card-header">
        Pending Orders
    </div>
    <div class="card-body">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Product</th>
                    <th>User</th>
                    <th>QTY</th>
                    <th>Total Price</th>
                    <th>Status</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($orders as $order)
                <tr>
                    <td>{{$order->product->name}}</td>
                    <td>{{$order->user->name}}</td>
                    <td>{{$order->quantity}}</td>
                    <td>{{$order->product->price*$order->quantity;}}</td>
                    <td>{{$order->status}}</td>
                    <td>
                        <a href="{{url('admin/order/complete/'.$order->id)}}" class="badge badge-danger">Make Complete</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

@endsection
