@extends('admin.layout.master')
@section('content')
<div class="card">
    <div class="card-header">
        <h4>Dashboard</h4>
    </div>
    <div class="card-body">
            <div class="row">
                <div class="col-md-4">
                    <div class="card bg-primary">
                        <div class="card-body text-center">
                            <h3 class="text-white">Total User</h3>
                            <b class="rounded-circle btn btn-sm btn-white text-dark">{{$user_count}}</b>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card bg-warning">
                        <div class="card-body text-center">
                            <h3 class="text-white">Pending</h3>
                            <b class="rounded-circle btn btn-sm btn-white text-dark">{{$pending_count}}</b>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card bg-success">
                        <div class="card-body text-center">
                            <h3 class="text-white">Complete</h3>
                            <b class="rounded-circle btn btn-sm btn-white text-dark">{{$complete_count}}</b>
                        </div>
                    </div>
                </div>

        </div>
        <h4>Latest Orders</h4>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Product</th>
                    <th>User</th>
                    <th>QTY</th>
                    <th>Total Price</th>
                    <th>Status</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($orders as $order)
                <tr>
                    <td>{{$order->product->name}}</td>
                    <td>{{$order->user->name}}</td>
                    <td>{{$order->quantity}}</td>
                    <td>{{$order->product->price*$order->quantity;}}</td>
                    <td>
                        @if ($order->status == 'pending')
                        <b class="badge badge-warning">{{$order->status}}</b>
                        @else
                        <b class="badge badge-success">{{$order->status}}</b>
                        @endif
                    </td>
                </tr>
                @endforeach
            </tbody>
    </div>
</div>
@endsection
