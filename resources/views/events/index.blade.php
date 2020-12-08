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

    @if(session('notif'))
        <p class="notif">{{ session('notif') }}</p>
    @endif

    @foreach($events as $event)
        <div class="entry">
            <h3><a href="/events/{{ $event->id }}">{{ $event->name }}</a></h3>
            <p>{{ trim(substr($event->description, 0, 50)) . '...' }}</p>
        </div>
    @endforeach

    {{ $events->links() }}
@endsection
