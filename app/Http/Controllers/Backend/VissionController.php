<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use App\Model\Vission;

class VissionController extends Controller
{
    public function view(){
     	    $data['countVission'] = Vission::count();
    		$data['alldata'] = Vission::all();
    		return view('backend.vission.vission-view', $data);
	}

  public function add(){
  	return view('backend.vission.add-vission');
  }

  public function store(Request $request){
  	$data = new Vission();
  	$data->created_by = Auth::user()->id;
  	$data->title = $request->title;
  	if ($request->file('image')) {
  		$file = $request->file('image');
  		$filename =date('YmdHi').$file->getClientORiginalName();
  		$file->move(public_path('upload/vission_images'), $filename);
  		$data['image'] = $filename;
  	    $data->save();
  	return redirect()->route('vissions.view')->with('success', 'Data add success');
  }
}


  public function edit($id){
    $editData = Vission::find($id);
    return view ('backend.vission.edit-vission', compact('editData'));
  }

  public function update(Request $request, $id){
  	$data = Vission::find($id);
  	$data->updated_by = Auth::user()->id;
  	if ($request->file('image')) {
  		$file = $request->file('image');
  		@unlink(public_path('upload/vission_images/'.$data->image));
  		$filename =date('YmdHi').$file->getClientORiginalName();
  		$file->move(public_path('upload/vission_images'), $filename);
  		$data['image'] = $filename;
  	    $data->save();
  	return redirect()->route('vissions.view')->with('success', 'Data update success');
  }
}
  public function delete($id){
       	$vission = Vission::find($id);
       	if (file_exists('public/upload/vission_images/' .$vission_images) AND ! empty($vission_images)) {
    			unlink('public/upload/vission_images/' . $vission_images);
    		}
       	$vission->delete();
       	return redirect()->route('vissions.view')->with('success', 'Data deleted success');
  }
}