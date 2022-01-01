@extends('user.layout.master')
@section('content')
@if ($status == 'complete')
<h2>Your Complete Order List</h2>
@elseif($status == 'pending')
<h2>Your Pending Order List</h2>
@else
<h2>Your All Order List</h2>
@endif
<table class="table table-striped">
    <thead>
        <tr>
            <th>Name</th>
            <th>Image</th>
            <th>Quantity</th>
            <th>Total Price</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($order as $o)
        <tr>
            <td>{{$o->product->name}}</td>
            <td>
                <img src="{{asset($o->product->image)}}" style="width:50px;border-radius:30%" alt="">
            </td>
            <td>{{$o->quantity}}</td>
            <td>
                {{$o->quantity*$o->product->price}}
            </td>
        </tr>
        @endforeach

    </tbody>
</table>
@endsection
