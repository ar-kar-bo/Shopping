@extends('admin.layout.master')
@section('content')
<div class="card">
    <div class="card-header">
        Complete Orders
    </div>
    <div class="card-body">
        <div class="card">
            <div class="card-body">
                <form action="{{url('admin/order/complete')}}" class="row" method="get">
                {{-- @csrf --}}
                    <div class="form-group col-md-4">
                        <input type="date" name="start_date" id="">
                    </div>
                    <div class="form-group col-md-4">
                        <input type="date" name="end_date" id="">
                    </div>
                    <div class="form-group col-md-4">
                        <input type="submit" value="Filter">
                    </div>
                </form>
            </div>
        </div>
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
                    <td>{{$order->status}}</td>

                </tr>
                @endforeach
            </tbody>
        </table>
{{$orders->links()}}

    </div>
</div>

@endsection
