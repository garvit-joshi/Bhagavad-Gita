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
        <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
            More
        </a>
        <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
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
                <div class="col-sm-6 col-md-5 col-lg-4 item">
                    <div class="box">
                        <h3 class="name"><strong>Chapter 1 - Arjuna Visada Yoga</strong></h3>
                        <h3 class="name"></h3>
                        <p class="description">Arjuna's Dilemma</p><a class="learn-more" href="{{ url('read/1') }}">Learn more »</a>
                    </div>
                </div>
                <div class="col-sm-6 col-md-5 col-lg-4 item">
                    <div class="box">
                        <h3 class="name"><strong>Chapter 2 - Sankhya Yoga</strong></h3>
                        <p class="description">Transcendental Knowledge</p><a class="learn-more" href="{{ url('read/2') }}">Learn more
                            »</a>
                    </div>
                </div>
                <div class="col-sm-6 col-md-5 col-lg-4 item">
                    <div class="box">
                        <h3 class="name"><strong>Chapter 3 - Karma Yoga</strong></h3>
                        <p class="description">Path of Selfless Service</p><a class="learn-more" href="{{ url('read/3') }}">Learn more
                            »</a>
                    </div>
                </div>
                <div class="col-sm-6 col-md-5 col-lg-4 item">
                    <div class="box">
                        <h3 class="name"><strong>Chapter 4 - Jnana Karma Sanyasa Yoga</strong></h3>
                        <p class="description">Path of Knowledge and the Disciplines of Action</p><a class="learn-more"
                            href="{{ url('read/4') }}">Learn more »</a>
                    </div>
                </div>
                <div class="col-sm-6 col-md-5 col-lg-4 item">
                    <div class="box">
                        <h3 class="name"><strong>Chapter 5 - Karma Sanyasa Yoga</strong></h3>
                        <p class="description">Path of Renunciation</p><a class="learn-more" href="{{ url('read/5') }}">Learn more »</a>
                    </div>
                </div>
                <div class="col-sm-6 col-md-5 col-lg-4 item">
                    <div class="box">
                        <h3 class="name"><strong>Chapter 6 - Dhyana Yoga</strong></h3>
                        <p class="description">Path of Meditation</p><a class="learn-more" href="{{ url('read/6') }}">Learn more »</a>
                    </div>
                </div>
                <div class="col-sm-6 col-md-5 col-lg-4 item">
                    <div class="box">
                        <h3 class="name"><strong>Chapter 7 - Gyaan Vigyana Yoga</strong></h3>
                        <p class="description">Self-Knowledge and Enlightenment</p><a class="learn-more" href="{{ url('read/6') }}">Learn more »</a>
                    </div>
                </div>
                <div class="col-sm-6 col-md-5 col-lg-4 item">
                    <div class="box">
                        <h3 class="name"><strong>Chapter 8 - Akshara Brahma Yoga</strong></h3>
                        <p class="description">Path of the Eternal God</p><a class="learn-more" href="{{ url('read/6') }}">Learn more »</a>
                    </div>
                </div>
                <div class="col-sm-6 col-md-5 col-lg-4 item">
                    <div class="box">
                        <h3 class="name"><strong>Chapter 9 - Raja Vidya Yoga</strong></h3>
                        <p class="description">Yoga through the King of Sciences</p><a class="learn-more" href="{{ url('read/6') }}">Learn more »</a>
                    </div>
                </div>
                <div class="col-sm-6 col-md-5 col-lg-4 item">
                    <div class="box">
                        <h3 class="name"><strong>Chapter 10 - Vibhooti Yoga</strong></h3>
                        <p class="description">Yoga through Appreciating the Infinite Opulences of God</p><a class="learn-more" href="{{ url('read/6') }}">Learn more »</a>
                    </div>
                </div>
                <div class="col-sm-6 col-md-5 col-lg-4 item">
                    <div class="box">
                        <h3 class="name"><strong>Chapter 11 - Vishwaroopa Darshana Yoga</strong></h3>
                        <p class="description">Yoga through Beholding the Cosmic Form of God</p><a class="learn-more" href="{{ url('read/6') }}">Learn more »</a>
                    </div>
                </div>
                <div class="col-sm-6 col-md-5 col-lg-4 item">
                    <div class="box">
                        <h3 class="name"><strong>Chapter 12 - Bhakti Yoga</strong></h3>
                        <p class="description">The Yoga of Devotion</p><a class="learn-more" href="{{ url('read/6') }}">Learn more »</a>
                    </div>
                </div>
                <div class="col-sm-6 col-md-5 col-lg-4 item">
                    <div class="box">
                        <h3 class="name"><strong>Chapter 13 - Ksetra Ksetrajna Vibhaaga Yoga</strong></h3>
                        <p class="description">Yoga through Distinguishing the Field and the Knower of the Field</p><a class="learn-more" href="{{ url('read/6') }}">Learn more »</a>
                    </div>
                </div>
                <div class="col-sm-6 col-md-5 col-lg-4 item">
                    <div class="box">
                        <h3 class="name"><strong>Chapter 14 - Gunatraya Vibhaga Yoga</strong></h3>
                        <p class="description">Yoga through Understanding the Three Modes of Material Nature</p><a class="learn-more" href="{{ url('read/6') }}">Learn more »</a>
                    </div>
                </div>
                <div class="col-sm-6 col-md-5 col-lg-4 item">
                    <div class="box">
                        <h3 class="name"><strong>Chapter 15 - Purushottama Yoga</strong></h3>
                        <p class="description">The Yoga of the Supreme Divine Personality</p><a class="learn-more" href="{{ url('read/6') }}">Learn more »</a>
                    </div>
                </div>
                <div class="col-sm-6 col-md-5 col-lg-4 item">
                    <div class="box">
                        <h3 class="name"><strong>Chapter 16 - Daivasura Sampad Vibhaga Yoga</strong></h3>
                        <p class="description">Yoga through Discerning the Divine and Demoniac Natures</p><a class="learn-more" href="{{ url('read/6') }}">Learn more »</a>
                    </div>
                </div>
                <div class="col-sm-6 col-md-5 col-lg-4 item">
                    <div class="box">
                        <h3 class="name"><strong>Chapter 17 - Sraddhatraya Vibhaga Yoga</strong></h3>
                        <p class="description">Yoga through Discerning the Three Divisions of Faith</p><a class="learn-more" href="{{ url('read/6') }}">Learn more »</a>
                    </div>
                </div>
                <div class="col-sm-6 col-md-5 col-lg-4 item">
                    <div class="box">
                        <h3 class="name"><strong>Chapter 18 - Moksha Sanyaas Yoga</strong></h3>
                        <p class="description">Yoga through the Perfection of Renunciation and Surrender</p><a class="learn-more" href="{{ url('read/6') }}">Learn more »</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection