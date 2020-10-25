<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use App\Model\Headline;

class HeadlineControlle extends Controller
{
    public function view(){
        $data['alldata'] = Headline::all();
        return view('backend.headline.headline-view', $data);
}

public function add(){
  return view('backend.headline.add-headline');
}

public function store(Request $request){
  $data = new Headline();
  $data->created_by = Auth::user()->id;

  $data->headline = $request->headline;

  $data->save();
  return redirect()->route('headline.view')->with('success', 'Data add success');
}



public function edit($id){
$editData = Headline::find($id);
return view ('backend.headline.edit-headline', compact('editData'));
}

public function update(Request $request, $id){
  $data = Headline::find($id);
  $data->updated_by = Auth::user()->id;
  $data->headline = $request->headline;
   $data->save();
  return redirect()->route('headline.view')->with('success', 'Data update success');
}

public function delete($id){
       $contact = headline::find($id);
       $contact->delete();
       return redirect()->route('headline.view')->with('success', 'Data deleted success');
}

public function viewCommunicate (){
$alldata = Communicate::orderBy('id', 'desc')->get();
return view ('backend.contact.view_commicate', compact('alldata'));
}

public function Communicatedelete($id){
 $commicate = Communicate::find($id);
 $commicate->delete();
 return redirect()->route('contacts.communicate')->with('success', 'Data Deleted Successfully');
}
}
