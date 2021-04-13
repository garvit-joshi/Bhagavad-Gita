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
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
	</body>
</html>
