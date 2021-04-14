@extends('layouts.layout')
@section('navbar')
<link rel="stylesheet" href="/css/Contact-Form-Clean.css">
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
            <li><a class="dropdown-item" href="{{ url('read/verseofday') }}">Verse of the day</a></li>
            <li><a class="dropdown-item" href="https://github.com/garvit-joshi/Bhagavad-Gita" target="_blank">GitHub Source Code</a></li>
        </ul>
    </li>
</ul>

@endsection

@section('content')
<section class="features-boxed"></section>
    <section class="contact-clean" style="color: var(--bs-blue);background: url(&quot;/img/sribhagavadgita.jpg&quot;) center / cover no-repeat;transform-style: preserve-3d;">
        <form style="transform-style: preserve-3d;" data-bss-recipient="99205f06aaf5884f647033c140000ca3">
            <h2 class="text-center">Contact us</h2>
            <div class="mb-3"><input class="form-control" type="text" name="name" placeholder="Name"></div>
            <div class="mb-3"><input class="form-control" type="email" name="email" placeholder="Email"></div>
            <div class="mb-3"><textarea class="form-control" name="message" placeholder="Message" rows="14"></textarea></div>
            <div class="mb-3"><button class="btn btn-primary" type="submit">send </button></div>
        </form>
    </section>
<script src="/js/smart-forms.min.js"></script>
@endsection