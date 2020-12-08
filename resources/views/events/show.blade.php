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
    
	<table>
	    <tr>
            <td>Name</td>
            <td>{{ $event['name'] }}</td>
        </tr>
	    <tr>
            <td>Date</td>
            <td>{{ $event['date'] }}</td>
        </tr>
	    <tr>
            <td>Description</td>
            <td>{{ $event['description'] }}</td>
        </tr>
    </table>

    <ul>
        <li><a href="/events/{{ $event['id'] }}/edit">Edit</a></li>
        <li>
            <form action="/events/{{ $event['id'] }}" method="post">
                @method('DELETE')
                @csrf
                <input type="submit" name="delete" value="Delete">
            </form>
        </li>
    </ul>
@endsection
