@extends('layouts.layout')
@section('navbar')
<ul class="navbar-nav">
    <li class="nav-item">
        <a class="nav-link active" aria-current="page" href="{{ url('/') }}">Home</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="{{ url('read') }}">Read</a>
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
<section data-bss-hover-animate="swing" id="services" class="services">
        <div class="container-md section-title">
            <div class="text-center">
                <h5 class="d-inline-block justify-content-lg-center" style="background-color: #e2d6b5;width: 120px;margin-left: 0px;border-radius: 30px;padding: 5px;margin-top: 20px;color: #ffffff;font-size: 18px;">Gita</h5>
                <h2 style="color: #75aadb;">We Offer&nbsp;<span style="color: #d12d33;"><strong>&nbsp;Peace</strong></span></h2>
                <p class="d-inline-block" style="width: 50%;"><strong>A gift is pure when it is given from the heart to the right person at the right time and at the right place, and when we expect NOTHING in return.</strong><br>&nbsp; &nbsp;&nbsp;</p>
            </div>
            <div class="row">
                <div class="col-12 text-center col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
                    <div class="text-center icon-box">
                        <div class="icon"><i class="fab fa-dribbble" style="margin-bottom: 15px;"></i>
                            <h4 class="title"><a href="{{ url('read') }}">Read</a></h4>
                            <p class="description">No one who does good work will ever come to a bad end, either here or in the world to come.<br>&nbsp; &nbsp; &nbsp;&nbsp;</p>
                        </div>
                    </div>
                </div>
                <div class="col-12 text-center col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
                    <div class="text-center icon-box">
                        <div class="icon"><i class="fab fa-renren" style="margin-bottom: 15px;"></i>
                            <h4 class="title"><a href="{{ url('contact') }}">Contact Us</a></h4>
                            <p class="description">We are kept from our goal, not by obstacles, but by a clear path to a lesser goal.<br>&nbsp; &nbsp; &nbsp;&nbsp;</p>
                        </div>
                    </div>
                </div>
                <div class="col-12 text-center col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
                    <div class="text-center icon-box">
                        <div class="icon"><i class="fab fa-codepen" style="margin-bottom: 15px;"></i>
                            <h4 class="title"><a href="{{ url('read/verseofday') }}">Verse of the day</a></h4>
                            <p class="description">For those who have conquered the mind, it is their friend. For those who have failed to do so, the mind works like an enemy<br>&nbsp; &nbsp; &nbsp;&nbsp;</p>
                        </div>
                    </div>
                </div>
                <div class="col-12 text-center col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
                    <div class="text-center icon-box">
                        <div class="icon"><i class="fab fa-github" style="margin-bottom: 15px;"></i>
                            <h4 class="title"><a href="https://github.com/garvit-joshi/Bhagavad-Gita">GitHub</a></h4>
                            <p class="description">the wise work for the welfare of the world, without thought for themselves.<br>&nbsp; &nbsp; &nbsp;&nbsp;</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="features-boxed"></section>

@endsection