@extends('layouts.layout')
@section('navbar')
<ul class="navbar-nav">
    <li class="nav-item">
        <a class="nav-link" aria-current="page" href="{{ url('/') }}">Home</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="{{ url('read') }}">Read</a>
    </li>
    <li class="nav-item">
        <a class="nav-link active" href="{{ url('contact') }}">Contact Us</a>
    </li>
    <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
        More
        </a>
        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <li><a class="dropdown-item" href="{{ url('verseofday') }}">Verse of the day</a></li>
            <li><a class="dropdown-item" href="https://github.com/garvit-joshi/Bhagavad-Gita" target="_blank">GitHub Source Code</a></li>
        </ul>
    </li>
</ul>

@endsection

@section('content')

@endsection