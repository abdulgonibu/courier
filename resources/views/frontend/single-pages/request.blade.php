@extends('frontend.layouts.master')
@section('content')

<section class="contact-form-area section-bg  pt-115 pb-120 fix" style="background-image:url({{asset('frontend/assets/img/gallery/section_bg02.jpg')}} data-background="assets/img/gallery/section_bg02.jpg">
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
    @endsection