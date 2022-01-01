<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use App\Models\ProductCart;
use App\Models\ProductOrder;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;


class PageController extends Controller
{
    public function index()
    {
        $products = Product::latest()->with('category')->paginate(6);
        return view('user.index',compact('products'));
    }

    public function byCategory($slug)
    {
        $cat_id = Category::where('slug',$slug)->first()->id;
        $products = Product::where('category_id',$cat_id)->latest()->with('category')->paginate(6);
        return view('user.index',compact('products'));
    }

    public function search(Request $request)
    {
        $search = $request->search;
        $products = Product::where('name','like',"%{$search}%")->latest()->with('category')->paginate(6);
        $products->append($request->all());
        return view('user.index',compact('products'));
    }

    public function detail(Request $request,$slug)
    {
        //update
        $product = Product::where('slug',$slug);
        $product->update([
            'view_count'=>DB::raw("view_count+1")
        ]);
        //get
        $product = $product->with('category')->first();
        return view('user.detail',compact('product'));
    }


    public function addToCart($slug)
    {
        $user_id = Auth::user()->id;
        $product = Product::where('slug',$slug)->first();
        $quantity = 1;
        ProductCart::create([
            'user_id'=>$user_id,
            'product_id'=>$product->id,
            'quantity'=>$quantity
        ]);
        return redirect()->back();
    }

    public function cart()
    {
        $cart = ProductCart::with('product')->where('user_id',Auth::user()->id)->get();
        return view('user.cart',compact('cart'));

    }

    public function makeOrder()
    {
        $user_id = Auth::user()->id;
        $cart = ProductCart::where('user_id',$user_id)->get();
        foreach($cart as $c){
            ProductOrder::create([
                'user_id'=>$user_id,
                'product_id'=>$c->product_id,
                'quantity'=>$c->quantity,
                'status'=>'pending'
            ]);
            ProductCart::where('id',$c->id)->delete();
        }
        return redirect()->back()->with('success','Order Success!');

    }

    public function order()
    {
        $order = ProductOrder::with('product')->where('user_id',Auth::user()->id)->get();
        $status ='all';
        return view('user.order',compact('order','status'));
    }

    public function pendingOrder()
    {
        $order = ProductOrder::with('product')->where('user_id',Auth::user()->id)->where('status','pending')->get();
        $status ='pending';
        return view('user.order',compact('order','status'));
    }

    public function completeOrder()
    {
        $order = ProductOrder::with('product')->where('user_id',Auth::user()->id)->where('status','complete')->get();
        $status ='complete';
        return view('user.order',compact('order','status'));
    }

    public function profile()
    {
        $user = User::where('id',Auth::user()->id)->first();
        return view('user.auth.info',compact('user'));
    }

    public function update(Request $request)
    {
        $request->validate([
            'name'=>'required',
            'email'=>'required',
            'image'=>'mimes:png,jpg,jpeg'
        ]);
        $user = User::where('id',Auth::user()->id)->first();
        if($request->file('image')){
            $image_arr = explode('/',$user->image);
            Storage::disk('image')->delete($image_arr[1]);
            $file = $request->file('image');
            $file_name = uniqid(time()).$file->getClientOriginalName();
            $file_path = 'image/'.$file_name;
            $file->storeAs('image',$file_name);
        }else{
            $file_path = $user->image;
        }
        User::where('id',Auth::user()->id)->update([
            'name'=>$request->name,
            'email'=>$request->email,
            'image'=>$file_path,
        ]);
        return redirect()->back()->with('success','Profile Updated Success!');
    }
}
