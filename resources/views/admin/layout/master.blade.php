<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MM-Coder-Shop</title>
    <link rel="stylesheet"
            href="https://demos.creative-tim.com/argon-dashboard/assets/vendor/nucleo/css/nucleo.css">
    <link rel="stylesheet"
            href="https://demos.creative-tim.com/argon-dashboard/assets/vendor/@fortawesome/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" href="https://demos.creative-tim.com/argon-dashboard/assets/css/argon.min.css?v=1.2.0">
    <style>
        body{
            margin-top: 30px;
        }
    </style>

</head>

<body>

    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <ul class="list-group">
                            <a href="#">
                                <li class="list-group-item bg-primary text-white">Admin Management</li>
                            </a>
                            <a href="{{url('/admin')}}">
                                <li class="list-group-item">Dashboard</li>
                            </a>
                            <a href="{{route('admin.category.index')}}">
                                <li class="list-group-item">Category</li>
                            </a>
                            <a href="{{route('admin.product.index')}}">
                                <li class="list-group-item">Product</li>
                            </a>
                            <a href="{{url('admin/order/panding')}}">
                                <li class="list-group-item">Panding Order</li>
                            </a>
                            <a href="{{url('admin/order/complete')}}">
                                <li class="list-group-item">Complete Order</li>
                            </a>
                            <a href="{{url('admin/user')}}">
                                <li class="list-group-item">User List</li>
                            </a>
                            <a href="{{url('admin/logout')}}">
                                <li class="list-group-item">Logout</li>
                            </a>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-8">
                @include('inc.error')
                @yield('content')
            </div>
        </div>
    </div>

    <script src="https://demos.creative-tim.com/argon-dashboard/assets/vendor/jquery/dist/jquery.min.js"></script>
    <script
            src="https://demos.creative-tim.com/argon-dashboard/assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://demos.creative-tim.com/argon-dashboard/assets/js/argon.min.js?v=1.2.0"></script>
</body>

</html>
