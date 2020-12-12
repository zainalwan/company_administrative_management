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
	
	<form action="/employee" method="post">
		@csrf
		<ul>
			<li><label for="name">Name</label></li>
			<li><input type="text" id="name" name="name" value="{{ old('name') }}"></li>
			@error('name')
    			<li class="error_msg">{{ $message }}</li>
			@enderror

			<li><label for="born">Born</label></li>
			<li><input type="date" id="born" name="born" value="{{ old('born') }}"></li>
			@error('born')
                <li class="error_msg">{{ $message }}</li>
			@enderror
                
			<li><label for="address">Address</label></li>
			<li><input type="text" id="address" name="address" value="{{ old('address') }}"></li>
			@error('address')
                <li class="error_msg">{{ $message }}</li>
			@enderror

			<li><label for="email">Email</label></li>
			<li><input type="text" id="email" name="email" value="{{ old('email') }}"></li>
			@error('email')
                <li class="error_msg">{{ $message }}</li>
			@enderror

			<li class="inline"><input type="submit" name="save" value="Save"></li>
			<li class="inline"><a class="button secondary" href="/employee">Cancel</a></li>
		</ul>
	</form>
	
@endsection
