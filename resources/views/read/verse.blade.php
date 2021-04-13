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
    <section class="features-boxed">
        <div class="container">
            <div class="intro">
                <h2 class="text-center">Bhagavad Gita</h2>
                <p class="text-center"><strong>Bhagavad Gita</strong>, also known as
                    the&nbsp;<strong>Gita</strong>&nbsp;-&nbsp;<em>"The Song of The Lord"</em>&nbsp;is a practical guide
                    to one's life that guides one to re-organise their life, achieve inner peace and approach the
                    Supreme Lord (the Ultimate Reality). It is a 700-verse text in Sanskrit which comprises chapters 23
                    through 40 in the Bhishma-Parva section of the&nbsp;<strong>Mahabharata</strong>.<br></p>
            </div>
            <div class="row justify-content-center features">
                @foreach($verse_array as $verse)
                <div class="col-sm-6 col-md-5 col-lg-4 item">
                    <div class="box">
                        <h3 class="name"><strong>Chapter: {{ $verse->chapter }}</strong></h3>
                        <h3 class="name"><strong>Verse: {{ $verse->verse }}</strong></h3>
                        <p class="description">{{ $verse->shloka }}</p><a class="learn-more" href="{{ url('read/'.$verse->chapter.'?verse='.$verse->verse.'') }}">Learn more »</a>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>

@endsection