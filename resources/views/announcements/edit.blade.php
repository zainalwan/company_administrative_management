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
	
	<form action="/announcement/{{ $announcement['id'] }}" method="post">
        @method('PUT')
		@csrf
		<ul>
			<li><label for="name">Name</label></li>
			<li><input type="text" id="name" name="name" value="{{ session('_old_input') ? old('name') : $announcement['name'] }}"></li>
			@error('name')
        		<li class="error_msg">{{ $message }}</li>
			@enderror

			<li><label for="description">Description</label></li>
			<li><textarea id="description" name="description" maxlength="10000">{{ session('_old_input') ? old('description') : $announcement['description'] }}</textarea></li>
			@error('description')
                <li class="error_msg">{{ $message }}</li>
			@enderror
			
			<li><input type="submit" name="save" value="Save"></li>
			<li><a href="/announcement">Cancel</a></li>
		</ul>
	</form>
	
@endsection
