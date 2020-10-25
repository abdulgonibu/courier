<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use App\Model\Service;

class serviceController extends Controller
{
    public function view(){
    		$data['alldata'] = Service::all();
    		return view('backend.service.service-view', $data);
	}

  public function add(){
  	return view('backend.service.add-service');
  }

  public function store(Request $request){
  	$data = new Service();
  	$data->created_by = Auth::user()->id;
  	$data->short_title = $request->short_title;
  	$data->long_title = $request->long_title;
  	$data->save();
  	return redirect()->route('services.view')->with('success', 'Data add success');
  }



  public function edit($id){
    $editData = Service::find($id);
    return view ('backend.service.edit-service', compact('editData'));
  }

  public function update(Request $request, $id){
  	$data = Service::find($id);
  	$data->updated_by = Auth::user()->id;
  	$data->short_title = $request->short_title;
  	$data->long_title = $request->long_title;
  	 $data->save();
  	return redirect()->route('services.view')->with('success', 'Data update success');
  }

  public function delete($id){
       	$service = Service::find($id);
       	$service->delete();
       	return redirect()->route('services.view')->with('success', 'Data deleted success');
  }

}
