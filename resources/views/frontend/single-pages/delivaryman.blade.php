@extends('frontend.layouts.master')
@section('content')
<div class="container "style="padding: 100px">

	<h1  style="text-align: center; ">Become A Delivary Man</h1>
	<div class="row" style="margin-top: 50px">
		<div class="col-md-6" style="background-color: #6FF08F">
			<img  src="">
		</div>

		<div class="col-md-6" style="padding-left: 100px" >
				<form method="POST" action="">
					<input type="hidden" name="_token" value="qP0JYbUf7Ourspk9gTYcApTTTz9rji5Wk2sdcW4Y">
					<div class="form-group row">
						<div class="col-md-10">
							<input id="name" type="text" class="form-control" name="name" value="" placeholder="User Name" required autofocus>
							<input id="cname" type="hidden" class="form-control" name="cname" value="Deliveryexpert" placeholder="Enter your business Name" required autofocus>
								 <input type="hidden" name="type" value="Runner">
														</div>
					</div>
					   <div class="form-group row">
						<div class="col-md-10">
							<input id="phone" type="text" class="form-control" name="phone" value="" placeholder="Phone" required autofocus>
														</div>
					</div>
					<div class="form-group row">
						<div class="col-md-10">

								<p>Select Of Your interested job area</p>
								<select id="nearezone" name="nearest_zone" class="form-control font-15 text-color-5">
																				<option selected value="">Select Area</option>
																				<option value="Dhaka City Corporation">Dhaka City Corporation</option>
																				<option value="Savar">Savar</option>
																				<option value="Keraniganj">Keraniganj</option>
																				<option value="Tongi">Tongi</option>
																				<option value="Narayanganjo City">Narayanganjo City</option>
																				<option value="Gazipur City">Gazipur City</option>
																				<option value="kallyanpur">kallyanpur</option>
																				<option value="Rangpur City Corporation">Rangpur City Corporation</option>
																				<option value="Sylhet City Corporation">Sylhet City Corporation</option>
																				<option value="Bashundhara">Bashundhara</option>
																				<option value="Banani">Banani</option>
																				<option value="Dhaka-Cant">Dhaka-Cant</option>
																				<option value="Dhanmondi">Dhanmondi</option>
																				<option value="Farmgate">Farmgate</option>
																				<option value="Gazipur">Gazipur</option>
																				<option value="Gulshan">Gulshan</option>
																				<option value="Jattrabari">Jattrabari</option>
																				<option value="Keraniganj">Keraniganj</option>
																				<option value="Khilgaon">Khilgaon</option>
																				<option value="Mirpur">Mirpur</option>
																				<option value="Mirpur-1">Mirpur-1</option>
																				<option value="Mirpur-Pallabi">Mirpur-Pallabi</option>
																				<option value="Mirpur10">Mirpur10</option>
																				<option value="Mirpur60Ft">Mirpur60Ft</option>
																				<option value="Mogbazar">Mogbazar</option>
																				<option value="Mohakhali">Mohakhali</option>
																				<option value="Savar">Savar</option>
																				<option value="Motijheel">Motijheel</option>
																				<option value="Narayanganj">Narayanganj</option>
																				<option value="Mohammadpur">Mohammadpur</option>
																				<option value="Old Dhaka">Old Dhaka</option>
																				<option value="Rampura">Rampura</option>
																				<option value="Shahbag">Shahbag</option>
																				<option value="Uttara">Uttara</option>
																				<option value="SA_Paribahan">SA_Paribahan</option>
																				<option value="Sundorban">Sundorban</option>
																		</select>

						</div>
					</div>
					<div class="form-group row">
						<div class="col-md-10">
							<input id="email" type="email" class="form-control" name="email" value="" placeholder="E-Mail Address" required>
														</div>
					</div>

					<div class="form-group row">
						<div class="col-md-10">
							<input id="password" type="password" class="form-control" name="password"  placeholder="Password" required>
														</div>
					</div>

					<div class="form-group row">
						<div class="col-md-10">
							<input id="password-confirm" type="password" class="form-control" name="password_confirmation" placeholder="Confirm Password" required>
						</div>
					</div>

					<div class="form-group row mb-0">
						<div class="col-md-6 offset-md-4">
							<button type="submit" class="btn  font-weight-bold" style="background: #6FF08F; color: #fff;">
								Register
							</button>
						</div>
					</div>
					
				</form>
			</div>
		</div>
		</div>
@endsection
	