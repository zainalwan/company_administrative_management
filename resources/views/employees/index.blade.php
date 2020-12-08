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

    <form action="/employee/search/" method="post">
        <ul>
            @csrf
            <li><input type="text" name="keyword" placeholder="Enter a keyword"></li>
            <li><input type="submit" name="search" value="Search"></li>
            <li><a href="/employee/create">Add new</a></li>
        </ul>
    </form>

    @if(session('notif'))
        <p class="notif">{{ session('notif') }}</p>
    @endif

    @foreach($employees as $employee)
        <div class="entry">
            <h3><a href="/employee/{{ $employee->id }}">{{ $employee->name }}</a></h3>
        </div>
    @endforeach

    {{ $employees->links() }}
@endsection
