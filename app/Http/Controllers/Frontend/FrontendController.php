<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\Logo;
use App\Model\Slider;
use App\Model\Contact;
use App\Model\Mission;
use App\Model\Vission;
use App\Model\Marchent;
use App\Model\Service;
use App\Model\About;
use App\Model\Order;
use App\Model\Communicate;
use Mail;

class FrontendController extends Controller
{
    public function index(){
    	$data['logo']       = Logo::first();
    	$data['sliders']    = Slider::all();
        $data['contact']    = Contact::first();
        $data['mission']    = Mission::first();
        $data['vission']    = Vission::first();
     
        $data['services']   = Service::all();
    	return view('frontend.layouts.home', $data);
    }

    public function aboutUs(){
        $data['logo']       = Logo::first();
        $data['contact']    = Contact::first();
        $data['abouts']     = About::first();
    	return view('frontend.single-pages.aboutus',$data);
    }

    public function contactUs(){
        $data['logo']= Logo::first();
        $data['contact']= Contact::first();
    	return view('frontend.single-pages.contactus', $data);
    }

    public function newsdetails($id){
        $data['logo']= Logo::first();
        $data['news'] = NewsEvent::find($id);
        $data['contact']= Contact::first();
        return view('frontend.single-pages.news-event-details',$data);
    }

    public function service(){

        $data['logo']= Logo::first();
        $data['mission']    = Mission::first();
        $data['contact']= Contact::first();
        return view('frontend.single-pages.service',$data);

    }

    public function marchent(){
        $data['logo']= Logo::first();
         $data['vission']    = Vission::first();
        $data['contact']= Contact::first();
        return view('frontend.single-pages.becomeamarcent',$data);

    }
    public function marchentlogin(){
        $data['logo']= Logo::first();
         $data['vission']    = Vission::first();
        $data['contact']= Contact::first();
        return view('frontend.single-pages.marchentlogin',$data);

    }

    public function delivaryman(){
        $data['logo']= Logo::first();
         $data['vission']    = Vission::first();
        $data['contact']= Contact::first();
        return view('frontend.single-pages.delivaryman',$data);

    }

    
    public function delivarymanlogin(){
        $data['logo']= Logo::first();
         $data['vission']    = Vission::first();
        $data['contact']= Contact::first();
        return view('frontend.single-pages.delvarymanlogin',$data);

    }

    public function price(){
        $data['logo']= Logo::first();
        
        $data['contact']= Contact::first();
        return view('frontend.single-pages.price',$data);

    }

    public function contactstore(Request $request){
        $contact = new Communicate();
        $contact->name = $request->name;
        $contact->email = $request->email;
        $contact->mobile_no = $request->mobile_no;
        $contact->address = $request->address;
        $contact->msg = $request->msg;
        $contact->save();

        $data = array(
            'name' => $request->name,
            'email'=>$request->email,
            'mobile_no'=> $request->mobile_no,
            'address' => $request->address,
            'msg' => $request->msg,
        );

        Mail::send('frontend.emails.contact', $data, function($message) use($data){
            $message->from('abdulgoni.me@gmail.com', 'Abdul Goni');
            $message->to($data['email']);
            $message->subject('Thanks for contact us');

        });
        return redirect()->back()->with('success', 'Your message successfully sent');

    }

    public function marchentstore(Request $request){
        $marchent = new Marchent();
        $marchent->cname = $request->cname;
        $marchent->name = $request->name;
        $marchent->nearest_zone = $request->nearest_zone;
        $marchent->phone = $request->phone;
        $marchent->email = $request->email;
        $marchent->password = $request->password;
        $marchent->save();

        return redirect()->back()->with('success', 'Your message successfully sent');

    }

    public function orderstore(Request $request){
        $order = new Order();
        $order->name = $request->name;
        $order->email = $request->email;
        $order->contact = $request->contact;
        $order->categoryselect = $request->categoryselect;
        $order->city = $request->city;
        $order->city = $request->incoterms;
        $order->city = $request->weight;
        $order->city = $request->height;
        $order->city = $request->width;
        $order->city = $request->length;
        $order->save();

        $data = array(
            'name' => $request->name,
            'email'=>$request->email,
            'contact'=> $request->contact,
            'categoryselect' => $request->categoryselect,
            'city' => $request->city,
        );

        Mail::send('frontend.emails.order', $data, function($message) use($data){
            $message->from('abdulgoni.me@gmail.com', 'Abdul Goni');
            $message->to($data['email']);
            $message->subject('Thanks for contact us');

        });

        return redirect()->back()->with('success', 'Your message successfully sent');

    }
}
