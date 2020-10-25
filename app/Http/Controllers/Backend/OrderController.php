<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\Order;
use DB;

class OrderController extends Controller
{
    public function view(){
        $data['alldata'] = Order::all();
        return view('backend.order.order', $data);
}

public function pendinglist(){
    $data['alldata'] = Order::orderBy('contact','desc')->orderBy('id','desc')->where('status','0')->get();
    return view('backend.order.order-pending-list', $data);
}


public function approve($id){
    $order = Order::find($id);
    if($order->save()){
        DB::table('orders')
                ->where('id', $id)
                ->update(['status' => 1]);
    }
    return redirect()->route('orders.pending')->with('success','Data approved successfully');
}



}
