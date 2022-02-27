<!doctype html>
<html lang="en">
	<head>
    	<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		
		<!-- Bootstrap CSS -->
		<link href="/css/main.css" rel="stylesheet">
		<link rel="stylesheet" href="/css/bootstrap.min.css">
    	<link rel="stylesheet" href="/fonts/ionicons.min.css">
    	<link rel="stylesheet" href="/css/Features-Boxed.css">
    	<link rel="stylesheet" href="/css/Footer-Dark.css">
    	<link rel="stylesheet" href="/css/styles.css">
        <link rel="stylesheet" href="/css/Contact-Form-Clean.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
        <link rel="stylesheet" href="/css/animated-services.css">
        <link rel="stylesheet" href="/fonts/fontawesome-all.min.css">
        <link rel="stylesheet" href="/css/styles.css">
        <link rel="icon" type="image/png" href="/img/radhakrishna.png"/>
		<title>Shrimad Bhagavad Gita</title>
  	</head>
  	<body>
    	<nav class="navbar sticky-top navbar-light navbar-expand-lg" style="background-color: #ffa000!important">
        	<div class="container-fluid">
            	<a class="navbar-brand" href="{{ url('/') }}">Shrimad Bhagavad Gita</a>
            	<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
              		<span class="navbar-toggler-icon"></span>
            	</button>
            	<div class="collapse navbar-collapse" id="navbarNavDropdown">
              		@yield('navbar')
            	</div>
				<form class="d-flex" action="{{ route('login') }}">
					<button class="btn btn-outline-success login-reg" type="submit">Login</button>
				</form>
				<form class="d-flex" action="{{ route('register') }}">
					<button class="btn btn-outline-success login-reg" type="submit">Register</button>
				</form>
        	</div>
    	</nav>
    	@yield('content')
		<footer class="footer-dark">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-md-3 item">
                    <h3>Services</h3>
                    <ul>
                        <li><a href="https://bootstrapstudio.io/">Web design</a></li>
                        <li><a href="#">Development</a></li>
                        <li><a href="https://dashboard.heroku.com/apps">Hosting</a></li>
                    </ul>
                </div>
                <div class="col-sm-6 col-md-3 item">
                    <h3>About</h3>
                    <ul>
                        <li><a href="https://github.com/garvit-joshi/Bhagavad-Gita">GitHub</a></li>
                        <li><a href="https://github.com/garvit-joshi/Bhagavad-Gita">Project</a></li>
                        <li></li>
                    </ul>
                </div>
                <div class="col-md-6 item text">
                    <h3><strong>Bhagavad Gita</strong></h3>
                    <p><strong>Bhagavad Gita</strong>, also known as the&nbsp;<strong>Gita</strong>&nbsp;-&nbsp;<em>"The
                            Song of The Lord"</em>&nbsp;is a practical guide to one's life that guides one to
                        re-organise their life, achieve inner peace and approach the Supreme Lord (the Ultimate
                        Reality). It is a 700-verse text in Sanskrit which comprises chapters 23 through 40 in the
                        Bhishma-Parva section of the&nbsp;<strong>Mahabharata</strong>.</p>
                </div>
                <div class="col item social"><a href="#"><i class="icon ion-social-facebook"></i></a><a href="#"><i
                            class="icon ion-social-twitter"></i></a><a href="#"><i
                            class="icon ion-social-snapchat"></i></a><a href="#"><i
                            class="icon ion-social-instagram"></i></a></div>
            </div>
            <p class="copyright">Garvit Joshi © 2021</p>
        </div>
    </footer>
    <script src="/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src="/js/bootstrap.min.js"></script>
    <script src="/js/bs-init.js"></script>
	</body>
</html>
