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

    @if(session('notif'))
        <p class="notif">{{ session('notif') }}</p>
    @endif

	<form action="login" method="post">
		@csrf
		<ul>
			<li><label for="user_name">User name</label></li>
			<li><input type="text" id="user_name" name="user_name" value="{{ old('user_name') }}"></li>
			@error('user_name')
				<li class="error_msg">{{ $message }}</li>
			@enderror

			<li><label for="password">Password</label></li>
			<li><input type="password" id="password" name="password" value="{{ old('password') }}"></li>
			@error('password')
				<li class="error_msg">{{ $message }}</li>
			@enderror
			
			<li><input type="submit" name="login" value="Login"></li>
		</ul>
	</form>
	
	<p class="register-direction">Do not have an account?</p>
    <p class="register-direction"><a href="/register">Register</a> now.</p>
@endsection
