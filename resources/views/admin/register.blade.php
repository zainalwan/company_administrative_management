@php

/* 
* Code that written below is belong to Zain Alwan Wima Irfani. You may
* not use, share, modify, and study without the author's permission
* (zainalwan4@gmail.com).
*  */

@endphp

@extends('layout.separate')

@section('content')
	<h2>{{ $title }}</h2>
	
	<form action="/register" method="post">
		@csrf
		<ul>
			<li><label for="name">Name</label></li>
			<li><input type="text" id="name" name="name" value="{{ old('name') }}"></li>
			@error('name')
				<li class="error_msg">{{ $message }}</li>
			@enderror
			
			<li><label for="user_name">User name</label></li>
			<li><input type="text" id="user_name" name="user_name" value="{{ old('user_name') }}"></li>
			@error('user_name')
				<li class="error_msg">{{ $message }}</li>
			@enderror

			<li><label for="password">Password</label></li>
			<li><input type="password" id="password" name="password"></li>
			<li class="info">Password must contain lowercase, uppercase, number, and at least 8 characters length.</li>
			@error('password')
				<li class="error_msg">{{ $message }}</li>
			@enderror
			
			<li><label for="retype_password">Retype password</label></li>
			<li><input type="password" id="retype_password" name="retype_password"></li>
			@error('retype_password')
				<li class="error_msg">{{ $message }}</li>
			@enderror

			<li><input type="submit" name="register" value="Register"></li>
		</ul>
	</form>
	
	<p class="login-direction">Already have an account?</p>
    <p class="login-direction"><a href="/login">Login</a> now.</p>
@endsection
