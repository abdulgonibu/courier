

	<div class="header-area">
	<div class="main-header ">
	<div class="header-top d-none d-lg-block">
	<div class="container">
	<div class="col-xl-12">
	<div class="row d-flex justify-content-between align-items-center">
	<div class="header-info-left">
	<ul>
	<li>Phone: {{$contact->mobile}}</li>
	<li>Email: {{$contact->email}} <a href="https://colorlib.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="f997968b9c899580b980968c8b9d9694989097d79a9694">[email&#160;protected]</a></li>
	</ul>
	</div>
	<div class="header-info-right">
	<ul class="header-social">
	<li><a href="{{$contact->twtter}}"><i class="fab fa-twitter"></i></a></li>
	<li><a href="{{$contact->facebook}}"><i class="fab fa-facebook-f"></i></a></li>
	<li><a href="{{$contact->youtube}}"><i class="fab fa-youtube"></i></a></li>
	<li> <a href="{{$contact->google_plus}}"><i class="fab fa-google-plus-g"></i></a></li>
	</ul>
	</div>
	</div>
	</div>
	</div>
	</div>
	<div class="header-bottom  header-sticky">
	<div class="container">
	<div class="row align-items-center">
	
	<div class="col-xl-2 col-lg-2">
	<div class="logo">
	<a href="{{route('index')}}"><img src="{{url('/upload/logo_images/'.$logo->image)}}" alt=""></a>
	</div>
	</div>
	<div class="col-xl-10 col-lg-10">
	<div class="menu-wrapper  d-flex align-items-center justify-content-end">
	
	<div class="main-menu d-none d-lg-block">
	<nav>
	<ul id="navigation">
	<li><a href="{{route('index')}}">Home</a></li>
	<li><a href="{{route('about.us')}}">About</a></li>
	<li><a href="{{route('service')}}">Services</a></li>
	<li><a href="{{route('price')}}">Price</a></li>
	
	<li><a href="{{route('contact.us')}}">Contact</a></li>
	</ul>
	</nav>
	</div>
	
	<div class="header-right-btn d-none d-lg-block ml-20">
	<a href="{{route('contact.us')}}" class="btn header-btn">Get A Qoue</a>
	</div>
	</div>
	</div>
	
	<div class="col-12">
	<div class="mobile_menu d-block d-lg-none"></div>
	</div>
	</div>
	</div>
	</div>
	</div>
	</div>
	
