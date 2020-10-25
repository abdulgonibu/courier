<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class frontController extends Controller
{
    public function __construct(){

    }
    public function index()
    {
    	$setups = DB::table('setups')->first();
    	if(!empty($setups)){
    		$socials = explode(',', $setups->social);
    		$icons = explode(',', $setups->social);
    		foreach($icons as $icon) {
    			$icon = explode('.', $icon);
    			$icon = $icon[1];
    			$fa[] = $icon;
    		}
    	}else{
    		$socials = [];
    	}
		$cats = DB::table('categories')->where('status', 'on')->get();
		$home = DB::table('contents')->where('category','home')->first();
		$about = DB::table('contents')->where('category','about us')->first();
		$about->slug = DB::table('categories')->where('title','about us')->value('slug');
		$services = DB::table('services')->where('status','on')->get();
		$services->slug = DB::table('categories')->where('title','services')->value('slug');
		$portfolio = DB::table('portfolios')->where('status','on')->get();
		foreach($portfolio as $port){
			$port->cat = DB::table('portcats')->where('title',$port->category)->value('slug');
		}
		$portfolio->slug = DB::table('categories')->where('title','portfolio')->value('slug');
		$portcats = DB::table('portcats')->where('status','on')->get();
		$clients = DB::table('clients')->where('status','on')->get();
		$clients->slug = DB::table('categories')->where('title','clients')->value('slug');
		$teams = DB::table('teams')->where('status','on')->get();
		$teams->slug = DB::table('categories')->where('title','teams')->value('slug');
		foreach($teams as $team){
			$team->teamur1 = explode (',',$team->social);
			foreach($team->teamur1 as $url){
			$icon = explode('.',$url);
			$icon = $icon[0];
			$team->font[] = $icon;
		}
	}

    	return view('frontend.index',[
          'setups' => $setups,
          'socials' => $socials,
          'fa' => $fa,
		  'cats' => $cats,
		  'home' => $home,
		  'about' => $about,
		  'services' => $services,
		  'portfolio' => $portfolio,
		  'portcats' => $portcats,
		  'clients' => $clients,
		  'teams'  => $teams,
		  

    	]);
    }
}
