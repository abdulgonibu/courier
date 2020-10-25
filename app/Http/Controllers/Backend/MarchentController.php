<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use App\Model\Contact;
use App\Model\Communicate;
use App\Model\Marchent;


class MarchentController extends Controller
{
    public function view(){
        $data['alldata'] = Marchent::all();
        return view('backend.marchent.all-marchent', $data);
}


public function pendinglist(){
    $data['alldata'] = Marchent::orderBy('phone','desc')->orderBy('id','desc')->where('status','0')->get();
    return view('backend.marchent.marchent-pending-list', $data);
}
}
