@php

/* 
* Code that written below is belong to Zain Alwan Wima Irfani. You may
* not use, share, modify, and study without the author's permission
* (zainalwan4@gmail.com).
*  */

@endphp

@extends('layout.general')

@section('content')
	<h2>{{ $title }}</h2>
	
	<form action="/account/change_password" method="post">
        @method('PUT')
		@csrf
		<ul>
			<li><label for="current_password">Current password</label></li>
			<li><input type="password" id="current_password" name="current_password" value="{{ old('current_password') }}"></li>
			@error('current_password')
        		<li class="error_msg">{{ $message }}</li>
	        @enderror
                
			<li><label for="new_password">New password</label></li>
			<li><input type="password" id="new_password" name="new_password"></li>
			@error('new_password')
                <li class="error_msg">{{ $message }}</li>
			@enderror
                
			<li><label for="retype_new_password">Retype new password</label></li>
			<li><input type="password" id="retype_new_password" name="retype_new_password"></li>
			@error('retype_new_password')
                <li class="error_msg">{{ $message }}</li>
			@enderror
			
			<li class="inline"><input type="submit" name="save" value="Save"></li>
			<li class="button secondary inline"><a href="/account">Cancel</a></li>
		</ul>
	</form>
	
@endsection
