@extends('user.layout.master')
@section('content')
<div class="row">
    <!-- Loop Product -->
    @foreach ($products as $product)
    <div class="col-md-4">
        <a href="{{url('product/'.$product->slug)}}">
            <div class="card">
                <img class="card-img-top"
                    src="{{asset($product->image)}}"
                    alt="">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-12">
                            <h4>{{$product->name}}
                            </h4>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <a href="" class="badge badge-primary">{{$product->price}}</a>
                        </div>
                        <div class="col-md-4">
                            <a href="" class="badge badge-warning">{{$product->category->name}}</a>
                        </div>
                    </div>
                    <div class="row">
                        <a href="{{url('/product/cart/add/'.$product->slug)}}" class="btn btn-sm btn-danger text-white btn-block">Add To Cart</a>
                    </div>



                </div>
            </div>
        </a>

    </div>
    @endforeach

</div>
<div class="row">
    <div class="col-md-6 offset-3">
        {{$products->links()}}
    </div>
</div>

@endsection
