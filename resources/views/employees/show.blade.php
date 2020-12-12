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
        
	<table>
	    <tr>
            <td>Name</td>
            <td>{{ $employee['name'] }}</td>
        </tr>
	    <tr>
            <td>Recruited at</td>
            <td>{{ $employee['recruited_at'] }}</td>
        </tr>
	    <tr>
            <td>Born</td>
            <td>{{ $employee['born'] }}</td>
        </tr>
	    <tr>
            <td>Address</td>
            <td>{{ $employee['address'] }}</td>
        </tr>
	    <tr>
            <td>Email</td>
            <td>{{ $employee['email'] }}</td>
        </tr>
    </table>

    <ul class="action">
        <li><a class="button" href="/employee/{{ $employee['id'] }}/edit">Edit</a></li>
        <li>
            <form action="/employee/{{ $employee['id'] }}" method="post">
                @method('DELETE')
                @csrf
                <input class="button secondary" type="submit" name="delete" value="Delete">
            </form>
        </li>
    </ul>
@endsection
