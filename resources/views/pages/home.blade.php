@php

/* 
* Code that written below is belong to Zain Alwan Wima Irfani. You may
* not use, share, modify, and study without the author's permission
* (zainalwan4@gmail.com).
*  */

@endphp

@extends('layout.general')

@section('content')
	<h2>Home</h2>

	<p class="caption">Do something awesome.</p>
	<a class="button create-event" href="/event/create">Create an event</a>

	<h3>Recent Updates</h3>

    <div class="recent">
	    @foreach($events as $event)
		    <div class="card">
			    <svg width="1em" height="1em" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg">
				    <path fill-rule="evenodd" d="M14 0H2a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2zM1 3.857C1 3.384 1.448 3 2 3h12c.552 0 1 .384 1 .857v10.286c0 .473-.448.857-1 .857H2c-.552 0-1-.384-1-.857V3.857z"/>
				    <path fill-rule="evenodd" d="M12 7a1 1 0 1 0 0-2 1 1 0 0 0 0 2z"/>
			    </svg>
                <div class="text">
			        <h4><a href="/event/{{ $event->id }}">{{ $event->name }}</a></h4>
			        <p>{{ trim(substr($event->description, 0, 50)) . '...' }}</p>
                </div>
		    </div>
	    @endforeach

	    @foreach($announcements as $announcement)
		    <div class="card">
			    <svg width="1em" height="1em" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg">
				    <path d="M8 16a2 2 0 0 0 2-2H6a2 2 0 0 0 2 2zm.995-14.901a1 1 0 1 0-1.99 0A5.002 5.002 0 0 0 3 6c0 1.098-.5 6-2 7h14c-1.5-1-2-5.902-2-7 0-2.42-1.72-4.44-4.005-4.901z"/>
			    </svg>
                <div class="text">
			        <h4><a href="/announcement/{{ $announcement->id }}">{{ $announcement->name }}</a></h4>
			        <p>{{ trim(substr($announcement->description, 0, 50)) . '...' }}</p>
                </div>
		    </div>
	    @endforeach
    </div>
@endsection
