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

    <form action="/announcement/search/" method="post">
        <ul>
            @csrf
            <li><input type="text" name="keyword" placeholder="Enter a keyword"></li>
            <li><input type="submit" name="search" value="Search"></li>
            <li><a href="/announcement/create">Create new</a></li>
        </ul>
    </form>

    @foreach($announcements as $announcement)
        <div class="entry">
            <h3><a href="/announcement/{{ $announcement->id }}">{{ $announcement->name }}</a></h3>
            <p>{{ trim(substr($announcement->description, 0, 50)) . '...' }}</p>
        </div>
    @endforeach

    {{ $announcements->links() }}
@endsection
