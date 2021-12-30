<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\ProductOrder;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function pending()
    {
        $orders = ProductOrder::where('status','pending')->with('user','product')->paginate(20);
        return view('admin.order.index',compact('orders'));
    }

    public function complete(Request $request)
    {
        if(isset($request->start_date)){
            $start_date=$request->start_date;
            $end_date=$request->end_date;
            $orders = ProductOrder::where('status','complete')
            ->whereBetween('created_at',[$start_date,$end_date])
            ->paginate(2);
            $orders->appends($request->all());
        }else{
            $orders = ProductOrder::where('status','complete')->with('user','product')->paginate(20);
        }
        return view('admin.order.complete',compact('orders'));
    }

    public function makeComplete($id)
    {
        ProductOrder::where('id',$id)->update([
            'status'=>'complete'
        ]);
        return redirect()->back()->with('success','Changed to complete.');
    }



}
