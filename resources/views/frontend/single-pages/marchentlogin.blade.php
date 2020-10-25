@extends('frontend.layouts.master')
@section('content')

<div class="container" style="padding: 100px">
        <h1  style="background: ;text-align: center; "> Marchent Login</h1>
        <div class="row" style="margin-top: 50px">
            <div class="col-md-6" style="background-color: #6FF08F ">
                <img  src="../www.steadfastcourier.com/icon/rl-img.png">
            </div>
            <div class="col-md-6" style="padding-left: 100px" >
                            <form method="POST" action="https://sacourierservice.com/runner/authenticate">
                                <input type="hidden" name="_token" value="qP0JYbUf7Ourspk9gTYcApTTTz9rji5Wk2sdcW4Y">                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fa fa-user"></i></span>
                                    </div>
                                    <input type="text" class="form-control" name="name" placeholder="Username" >
                                </div>

                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fa fa-key"></i></span>
                                    </div>
                                    <input type="password" name="password" class="form-control" placeholder="Password" >
                                    <input type="hidden" name="type" value="Runner" class="form-control" >
                                </div>
                                <div class="row">
                                    <div class="col pr-2">
                                        <button  type="submit" class="btn btn-block text-uppercase h4 font-weight-bold" style="background: #6FF08F; color:#fff;">Login</button>
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <a class="btn btn-link" href="runner/password/request.html" style="font-size:16px; color: #173C5A; font-weight: 600;">
                                        Forgot your password ?
                                    </a>
                                </div>
                                
                            </form>
                        </div>
                    </div>
                </div>
  @endsection              