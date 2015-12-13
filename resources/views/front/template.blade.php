@extends('template')
@section('menu')
	<li class="active"><a href="#">Immobiliers</a></li>
	<li><a href="#">Auto & Moto</a></li>
	<li><a href="#">Bonnes affaires</a></li>
	<li><a href="#">Multimédias</a></li>
	<li><a href="#">Professionnels</a></li>
	<li><a href="#">Loisirs & Vacances</a></li> 
@stop
@section('contenu')
	<div class="row">
		<div class="col-sm-12">
			<br>
			@yield('contenuFront')
		</div>
	</div>
@stop