@extends('user.layout.master')
@section('content')
<div class="card-body">
    <h2>Your Cart List</h2>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Image</th>
                <th>Name</th>
                <th>Total</th>
                <th>Add or Reduce</th>
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
                    <span class="badge badge-danger">-</span>
                    <span class="badge badge-success">+</span>
                </td>
            </tr>
            <tr>
                <td>1</td>
                <td>Man Product</td>
                <td>
                    <img src="./assets/2.jpg" style="width:50px;border-radius:30%" alt="">
                </td>
                <td>4</td>
                <td>
                    <span class="badge badge-danger">-</span>
                    <span class="badge badge-success">+</span>
                </td>
            </tr>
            <tr>
                <td>1</td>
                <td>Man Product</td>
                <td>
                    <img src="./assets/2.jpg" style="width:50px;border-radius:30%" alt="">
                </td>
                <td>4</td>
                <td>
                    <span class="badge badge-danger">-</span>
                    <span class="badge badge-success">+</span>
                </td>
            </tr>
        </tbody>
    </table>

@endsection
