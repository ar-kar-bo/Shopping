@extends('user.layout.master')
@section('content')
<h2>Your Order List</h2>
<table class="table table-striped">
    <thead>
        <tr>
            <th>ID</th>
            <th>Image</th>
            <th>Name</th>
            <th>Total</th>
            <th>Total Price</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>1</td>
            <td>Man Product</td>
            <td>
                <img src="./assets/2.jpg" style="width:50px;border-radius:30%" alt="">
            </td>
            <td>4</td>
            <td>
                10000ks
            </td>
        </tr>

    </tbody>
</table>
@endsection
