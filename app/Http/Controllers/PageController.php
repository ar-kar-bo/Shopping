<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        return view('user.index');
    }

    public function productDetail()
    {
        return view('user.detail');
    }

    public function productOrder()
    {
        return view('user.order');
    }

    public function productCart()
    {
        return view('user.cart');
    }

    public function profile()
    {
        return view('user.profile');
    }
}
