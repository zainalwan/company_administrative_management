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
            <td>{{ $account['name'] }}</td>
        </tr>
	    <tr>
            <td>User name</td>
            <td>{{ $account['user_name'] }}</td>
        </tr>
    </table>

    <ul>
        <li><a href="/account/change_password">Change password</a></li>
        <li>
            <form action="/account" method="post">
                @method('DELETE')
                @csrf
                <input type="submit" name="delete" value="Delete">
            </form>
        </li>
    </ul>
@endsection
