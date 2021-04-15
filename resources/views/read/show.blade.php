@extends('layouts.layout')
@section('navbar')
<ul class="navbar-nav">
    <li class="nav-item">
        <a class="nav-link" aria-current="page" href="{{ url('/') }}">Home</a>
    </li>
    <li class="nav-item">
        <a class="nav-link active" href="{{ url('read') }}">Read</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="{{ url('contact') }}">Contact Us</a>
    </li>
    <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
        More
        </a>
        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <li><a class="dropdown-item" href="{{ url('read/verseofday') }}">Verse of the day</a></li>
            <li><a class="dropdown-item" href="https://github.com/garvit-joshi/Bhagavad-Gita" target="_blank">GitHub Source Code</a></li>
        </ul>
    </li>
</ul>

@endsection

@section('content')
<section class="features-boxed"></section>
    <section class="contact-clean" style="color: var(--bs-blue);background: url(&quot;/img/krishnaRathshadow.jpg&quot;) center / cover no-repeat;transform-style: preserve-3d;">
        <form style="transform-style: preserve-3d;">
            <h2 class="text-center">Chapter: {{ $bhagavad->chapter }}</h2>
            <h2 class="text-center">Verse: {{ $bhagavad->verse }}</h2>
            <h2 class="text-center">Shloka</h2>
            <p class="text-center">{{ $bhagavad->shloka }}</p>
            <h2 class="text-center">Explanation</h2>
            <p class="text-center">{{ $bhagavad->explanation }}</p>
    </form>
    </section>

@endsection