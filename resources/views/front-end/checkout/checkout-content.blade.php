@extends('front-end.master')
@section('body')
<div class="row px-4" style="margin: 0px;">
	<div class="col-lg-12 well text-center cext-bold" style="margin: 10px 0px;">
		<h3>you have to login to complete your valuable order.if are you not registered please first regitered </h3>
	</div>
	<div class="col-lg-6 well">
		<h3 class='text-center text-warning py-5'>Please Register if don't register before</h3>
		{{Form::open(['route'=>'customer-sign-up','method'=>'post'])}}
		<div class="form-group">
			<input type="text" name="first_name" class="form-control w-25" placeholder="First Name">
		</div>
		<div class="form-group">
		<input type="text" name="last_name" class="form-control" placeholder="Last Name">
		</div>
		<div class="form-group">
			<input type="email" name="email" class="form-control" placeholder="Email@fjkjf">
		</div>
		<div class="form-group">
			<input type="password" name="password" class="form-control" placeholder="password">
		</div>
		<div class="form-group">
		 <input type="tel" name="phone" class="form-control" placeholder="phone">
		</div>
		<div class="form-group">
			<textarea name="address" class="form-control" placeholder="address"></textarea>
		</div>
		<div class="form-group">
			<input type="submit" name="btn" class="btn btn-info btn-lg" value="submit">
		</div>
		{{Form::close()}}
	</div>


	<div class="col-lg-5 well" style="margin:109px 47px">
		<h3 class='text-center text-warning py-5'>Please Login</h3>
		<h4 class="text-danger text-center">{{Session::get('message')}}</h4>
		{{Form::open(['route'=>'customer-login','method'=>'post'])}}

		<div class="form-group">
			<input type="email" name="email_login" class="form-control" placeholder="Email@fjkjf">
		</div>
		<div class="form-group">
			<input type="password" name="password_login" class="form-control" placeholder="password">
		</div>
		<div class="form-group">
			<input type="submit" name="btn" class="btn btn-success btn-lg" value="submit">
		</div>
		{{Form::close()}}
	</div>


</div>
@endsection