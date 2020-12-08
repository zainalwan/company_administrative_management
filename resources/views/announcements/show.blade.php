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
            <td>{{ $announcement['name'] }}</td>
        </tr>
	    <tr>
            <td>Description</td>
            <td>
                @foreach($announcement['descriptions'] as $description)
                    <p>{{ $description }}</p>
                @endforeach
            </td>
        </tr>
    </table>

    <ul>
        <li><a href="/announcement/{{ $announcement['id'] }}/edit">Edit</a></li>
        <li>
            <form action="/announcement/{{ $announcement['id'] }}" method="post">
                @method('DELETE')
                @csrf
                <input type="submit" name="delete" value="Delete">
            </form>
        </li>
    </ul>
@endsection
