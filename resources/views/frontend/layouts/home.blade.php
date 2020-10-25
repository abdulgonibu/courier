@extends('frontend.layouts.master')

@section('content')
<div class="our-info-area pt-70 pb-40">
    <div class="container">
    <div class="row">
    <div class="col-lg-4 col-md-6 col-sm-6">
    <div class="single-info mb-30">
    <div class="info-icon">
    <span class="flaticon-support"></span>
    </div>
    <div class="info-caption">
    <p>Call Us Anytime</p>
    <span>+ (123) 1800-567-8990</span>
    </div>
    </div>
    </div>
    <div class="col-lg-4 col-md-6 col-sm-6">
    <div class="single-info mb-30">
    <div class="info-icon">
    <span class="flaticon-clock"></span>
    </div>
    <div class="info-caption">
    <p>Sunday CLOSED</p>
    <span>Mon - Sat 8.00 - 18.00</span>
    </div>
    </div>
    </div>
    <div class="col-lg-4 col-md-6 col-sm-6">
    <div class="single-info mb-30">
    <div class="info-icon">
    <span class="flaticon-place"></span>
    </div>
    <div class="info-caption">
    <p>Columbia, SC 29201</p>
    <span>USA, New York - 10620</span>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    
    
    <div class="categories-area section-padding30">
    <div class="container">
    <div class="row">
    <div class="col-lg-12">
    
    <div class="section-tittle text-center mb-80">
    <span>Our Services</span>
    <h2>What We Can Do For You</h2>
    </div>
    </div>
    </div>
    <div class="row">
    <div class="col-lg-4 col-md-6 col-sm-6">
    <div class="single-cat text-center mb-50">
    <div class="cat-icon">
    <span class="flaticon-shipped"></span>
    </div>
    <div class="cat-cap">
    <h5><a href="services.html">Land Transport</a></h5>
    <p>The sea freight service has grown conside rably in recent years. We spend timetting to know your processes to.</p>
    </div>
    
    </div>
    </div>
    <div class="col-lg-4 col-md-6 col-sm-6">
    <div class="single-cat text-center mb-50">
    <div class="cat-icon">
    <span class="flaticon-ship"></span>
    </div>
    <div class="cat-cap">
    <h5><a href="services.html">Ship Transport</a></h5>
    <p>The sea freight service has grown conside rably in recent years. We spend timetting to know your processes to.</p>
    </div>
    </div>
    </div>
    <div class="col-lg-4 col-md-6 col-sm-6">
    <div class="single-cat text-center mb-50">
    <div class="cat-icon">
    <span class="flaticon-plane"></span>
    </div>
    <div class="cat-cap">
    <h5><a href="services.html">Air Transport</a></h5>
    <p>The sea freight service has grown conside rably in recent years. We spend timetting to know your processes to.</p>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    
    
    <div class="about-low-area padding-bottom">
    <div class="container">
    <div class="row">
    <div class="col-lg-6 col-md-12">
    <div class="about-caption mb-50">
    
    <div class="section-tittle mb-35">
    <span>About Our Company</span>
    <h2>Safe Logistic & Transport Solutions That Saves our Valuable Time!</h2>
    </div>
    <p>Brook presents your services with flexible, convenifent and cdpose layouts. You can select your favorite layouts & elements for cular ts with unlimited ustomization possibilities. Pixel-perfect replication of the designers is intended.</p>
    <p>Brook presents your services with flexible, convefnient and chient anipurpose layouts. You can select your favorite layouts.</p>
    <a href="about.html" class="btn">More About Us</a>
    </div>
    </div>
    <div class="col-lg-6 col-md-12">
    
    <div class="about-img ">
     <div class="about-font-img">
    <img src="{{asset('frontend/assets/img/gallery/about2.png')}}" alt="">
    </div>
    <div class="about-back-img d-none d-lg-block">
    <img src="{{asset('frontend/assets/img/gallery/about1.html')}}" alt="">
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    
    <section class="contact-form-area section-bg  pt-115 pb-120 fix" style=background-image:url({{ asset('frontend/assets/img/gallery/section_bg02.jpg')}}); style="background-image: url{{asset('frontend/assets/img/gallery/section_bg02.jpg')}}" >
        <div class="container">
        <div class="row justify-content-end">
        
        <div class="col-xl-8 col-lg-9">
        <div class="contact-form-wrapper">
        
        <div class="row">
        <div class="col-lg-12">
        
        <div class="section-tittle mb-50">
        <span>Get a Qote For Free</span>
        <h2>Request a Free Quote</h2>
        <p>Brook presents your services with flexible, convenient and cdpose layouts. You can select your favorite layouts & elements for.</p>
        </div>
        </div>
        </div>
        
        <form method="post" action="{{ route('request.store')}}" class="contact-form" id="myForm" enctype="multipart/form-data">
            @csrf
        <div class="row ">
        <div class="col-lg-6 col-md-6">
        <div class="input-form">
        <input type="text" name="name" placeholder="Name">
        </div>
        </div>
        <div class="col-lg-6 col-md-6">
        <div class="input-form">
        <input type="text" name="email" placeholder="Email">
        </div>
        </div>
        <div class="col-lg-12">
        <div class="input-form">
        <input type="text" name="contact" placeholder="Contact Number">
        </div>
        </div>
        <div class="col-lg-6">
        <div class="select-items">
        <select name="select" id="select1" name="categoryselect">
        <option value="">Freight Type</option>
        <option value="">Catagories One</option>
        <option value="">Catagories Two</option>
        <option value="">Catagories Three</option>
        <option value="">Catagories Four</option>
        </select>
        </div>
        </div>
        <div class="col-lg-6 col-md-6">
        <div class="input-form">
        <input type="text" name="city" placeholder="City of Departure">
        </div>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-6">
        <div class="input-form">
        <input type="text" name="incoterms" placeholder="Incoterms">
        </div>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-6">
        <div class="input-form">
        <input type="text" name="weight" placeholder="Weight">
         </div>
        </div>
        
        <div class="col-lg-4 col-md-6 col-sm-6">
        <div class="input-form">
        <input type="text" name="height" placeholder="Height">
        </div>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-6">
        <div class="input-form">
        <input type="text" name="width" placeholder="Width">
        </div>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-6">
        <div class="input-form">
        <input type="text" name="length" placeholder="length">
        </div>
        </div>
        
        <div class="col-lg-12"> 
        <div class="radio-wrapper mb-30 mt-15">
        <label>Extra services:</label>
        <div class="select-radio">
        <div class="radio">
        <input id="radio-1" name="radio" type="radio" checked="">
        <label for="radio-1" class="radio-label">Freight</label>
        </div>
        <div class="radio">
        <input id="radio-2" name="radio" type="radio">
        <label for="radio-2" class="radio-label">Express Delivery</label>
        </div>
        <div class="radio">
        <input id="radio-4" name="radio" type="radio">
        <label for="radio-4" class="radio-label">Insurance</label>
        </div>
        <div class="radio">
        <input id="radio-5" name="radio" type="radio">
        <label for="radio-5" class="radio-label">Packaging</label>
        </div>
        </div>
        </div>
        </div>
        
        <div class="col-lg-12">
        <button name="submit" class="submit-btn">Request a Quote</button>
        </div>
        </div>
        </form>
        </div>
        </div>
        </div>
        </div>
        </section>

    <section >
        <div class="container" id="pricing" style="padding:20px;">
            <h2 style="text-align: center; padding: 20px" ><span style="padding: 8px; background-color: green; color: white;text-align: center;background-color: #33CEFF ;border-radius:7px; ">Pricing</span></h2>
        <div class="row " style="padding-top: 30px">
            <div class="" style="width:60%" >
                <table class="price-table" width="100%">
                    <tbody><tr style="padding: 5px">
                        <th width="30%">DESTINATION</th>
                        <th width="15%">DURATION</th>
                        <th width="15%">Unit Name</th>
                        <th width="15%">Pricing</th>
                    </tr>
                                                    <tr>
                                            <td>Dhaka Metro Same Day</td>
                        <td>24 Hours</td>
                        <td>500gm</td>
                        <td>180.00</td>
                    </tr>
                                    <tr>
                                            <td>Dhaka Metro Next Day</td>
                        <td>24 Hours</td>
                        <td>500gm</td>
                        <td>80.00</td>
                    </tr>
                                    <tr>
                                            <td>Dhaka Metro Standard</td>
                        <td>48 Hours</td>
                        <td>500gm</td>
                        <td>80.00</td>
                    </tr>
                                    <tr>
                                            <td>Outside to Dhaka</td>
                        <td>72 Hours</td>
                        <td>500gm</td>
                        <td>150.00</td>
                    </tr>
                                    <tr>
                                            <td>Dhaka Metro Same Day</td>
                        <td>24 Hours</td>
                        <td>1kg</td>
                        <td>180.00</td>
                    </tr>
                                    <tr>
                                            <td>Dhaka Metro Next Day</td>
                        <td>24 Hours</td>
                        <td>1kg</td>
                        <td>80.00</td>
                    </tr>
                                    <tr>
                                            <td>Dhaka Metro Standard</td>
                        <td>48 Hours</td>
                        <td>1kg</td>
                        <td>80.00</td>
                    </tr>
                                    <tr>
                                            <td>Outside to Dhaka</td>
                        <td>72 Hours</td>
                        <td>1kg</td>
                        <td>190.00</td>
                    </tr>
                                    <tr>
                                            <td>Dhak Metro Same Day</td>
                        <td>24 Hours</td>
                        <td>1.5kg</td>
                        <td>180.00</td>
                    </tr>
                                    <tr>
                                            <td>Dhaka Metro Next Day</td>
                        <td>24 Hours</td>
                        <td>1.5kg</td>
                        <td>80.00</td>
                    </tr>
                    
                    </tbody></table>
            </div>
            <div class="col-md-3" style="float: right">
                <h4 class="bold"><i>Terms and Conditions:</i></h4>
                <ul class="none">
                    <li>Time duration may be changed due to unavoidable circumstances.</li>
                    <li>Start from 100 tk 1% cash handling and risk management charge applicable.</li>
                </ul>
            </div>
        </div>
        </div>
    </section>
    
    
    <div class="team-area section-padding30">
    <div class="container">
    <div class="row justify-content-center">
    <div class="cl-xl-7 col-lg-8 col-md-10">
    
    <div class="section-tittle text-center mb-70">
    <span>Our Team Mambers</span>
    <h2>What We Can Do For You</h2>
    </div>
    </div>
    </div>
    <div class="row">
    <div class="col-lg-4 col-md-4 col-sm-6">
    <div class="single-team mb-30 text-center">
    <div class="team-img">
    <img src="{{asset('frontend/assets/img/gallery/team1.png')}}" alt="">
    <div class="team-caption">
    <h3><a href="#">Mancherwan Kolin</a></h3>
    <p>Health agent</p>
    
    <div class="team-social">
    <ul>
    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
    <li><a href="#"><i class="fas fa-globe"></i></a></li>
    <li><a href="#"><i class="fab fa-instagram"></i></a></li>
    </ul>
    </div>
    </div>
    </div>
    </div>
    </div>
    <div class="col-lg-4 col-md-4 col-sm-6">
    <div class="single-team mb-30 text-center">
    <div class="team-img">
    <img src="{{asset('frontend/assets/img/gallery/team2.png')}}" alt="">
    <div class="team-caption">
    <h3><a href="#">Mancherwan Kolin</a></h3>
    <p>Health agent</p>
    
    <div class="team-social">
    <ul>
    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
    <li><a href="#"><i class="fas fa-globe"></i></a></li>
    <li><a href="#"><i class="fab fa-instagram"></i></a></li>
    </ul>
    </div>
    </div>
    </div>
    </div>
    </div>
    <div class="col-lg-4 col-md-4 col-sm-6">
    <div class="single-team mb-30 text-center">
    <div class="team-img">
    <img src="{{asset('frontend/assets/img/gallery/team3.png')}}" alt="">
    <div class="team-caption">
    <h3><a href="#">Mancherwan Kolin</a></h3>
    <p>Health agent</p>
    
    <div class="team-social">
    <ul>
    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
    <li><a href="#"><i class="fas fa-globe"></i></a></li>
    <li><a href="#"><i class="fab fa-instagram"></i></a></li>
    </ul>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
@endsection
	
