<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Jerus Group - Immobilier et services</title> 
{!! Html::style('bootstrap/css/bootstrap.min.css') !!} 
{!! Html::style('bootstrap/css/bootstrap-theme.min.css') !!}
{!! Html::style('bootstrap/css/sticky-footer-navbar.css') !!} 
{!! Html::style('custom/style.css') !!}
<!-- 		{!! Html::style('https://netdna.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css') !!} -->
<!--[if lt IE 9]>
			{{ Html::style('https://oss.maxcdn.com/libs/html5shiv/3.7.2/html5shiv.js') }}
			{{ Html::style('https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js') }}
		<![endif]-->
<style>
textarea {
	resize: none;
}
</style>
</head>
<body>
	<header class="">
		<div class="container">
			<h1 class="page-header">JERUS GROUP</h1>
			@yield('header')
		</div>
	</header>
	<div class="container">
	      <!-- Static navbar -->
		<nav class="navbar navbar-inverse navbar-default">
			<div class="container-fluid">
				<div class=" collapse navbar-collapse">
					<ul class="nav navbar-nav">
						@yield('menu') 
					</ul>
					<ul class="nav navbar-nav navbar-right">
							@if(auth()->guest())
								@if(!Request::is('auth/login'))
									<li><a href="{{ url('/auth/login') }}">Login</a></li>
								@endif
							@else
								<li class="dropdown">
									<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">{{ auth()->user()->nom }} <span class="caret"></span></a>
									<ul class="dropdown-menu" role="menu">
										<li><a href="{{ url('typeAnnonce') }}">Espace admin</a></li>
										<li><a href="{{ url('/') }}">Accueil</a></li>
										<li><a href="{{ url('/auth/logout') }}">Logout</a></li>
									</ul>
								</li>
							@endif
						</ul>
				</div>
			</div>
		</nav>
		@yield('contenu')
	</div>
	<footer class="footer">
      <div class="container">
        <div class="row">
		<div class="col-xs-offset-2 col-xs-8">
			<ul>
			<li><a href="#">Qui sommes nous</a></li>
			<li><a href="#">Coordonnées</a></li>
			<li><a href="#">Régie publicitaire</a></li>
			<li><a href="#">Plan du site</a></li>
			<li><a href="#" class="last">Mentions légales</a></li>
		</ul>
		</div>
	</div>
      </div>
    </footer>
	<!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    {!! Html::script('bootstrap/js/bootstrap.min.js') !!}
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    {!! Html::script('bootstrap/js/ie10-viewport-bug-workaround.js') !!}
</body>
</html>