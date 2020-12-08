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
	
	<form action="/event/{{ $event['id'] }}" method="post">
        @method('PUT')
		@csrf
		<ul>
			<li><label for="name">Name</label></li>
			<li><input type="text" id="name" name="name" value="{{ session('_old_input') ? old('name') : $event['name'] }}"></li>
			@error('name')
        		<li class="error_msg">{{ $message }}</li>
			@enderror

			<li><label for="date">Date</label></li>
			<li><input type="date" id="date" name="date" value="{{ session('_old_input') ? old('date') : $event['date'] }}"></li>
			@error('date')
                <li class="error_msg">{{ $message }}</li>
			@enderror

			<li><label for="description">Description</label></li>
			<li><textarea id="description" name="description" maxlength="10000">{{ session('_old_input') ? old('description') : $event['description'] }}</textarea></li>
			@error('description')
                <li class="error_msg">{{ $message }}</li>
			@enderror
			
			<li><input type="submit" name="save" value="Save"></li>
			<li><a href="/event">Cancel</a></li>
		</ul>
	</form>
	
@endsection
