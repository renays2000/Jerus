@extends('template')
@section('menu')
	<li class="{{ Request::segment(1) === 'annonce' ? 'active' : null }}"><a href="#">Annonces</a></li>
	<li class="{{ Request::segment(1) === 'user' ? 'active' : null }}"><a href="{{url('user')}}">Utilisateur</a></li>
	<li><a href="#">Articles</a></li>
	<li><a href="#">Categories</a></li>
	<li class="{{ Request::segment(1) === 'thematique' ? 'active' : null }}"><a href="#">Thematiques</a></li>
	<li class="{{ Request::segment(1) === 'typeAnnonce' ? 'active' : null }}"><a href="{{url('typeAnnonce')}}">TypeAnnonces</a></li>
	<li class="dropdown {{ Request::segment(1) === 'adresse' ? 'active' : null }}">
		<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Adresses <span class="caret"></span></a>
                <ul class="dropdown-menu">
                  	<li class="{{ Request::segment(1) === 'ville' ? 'active' : null }}"><a href="#">Ville</a></li>
					<li class="{{ Request::segment(1) === 'region' ? 'active' : null }}"><a href="#">Région</a></li>
                  <li role="separator" class="divider"></li>
                  <li class="dropdown-header">Quartier</li>
<!--                   <li><a href="#">Separated link</a></li> -->
<!--                   <li><a href="#">One more separated link</a></li> -->
                </ul>
	</li>
	
	<li class="{{ Request::segment(1) === 'mail' ? 'active' : null }}"><a href="#">Mails</a></li>
	<li class="{{ Request::segment(1) === 'commentaire' ? 'active' : null }}"><a href="#">Commentaires</a></li> 
	<li class="{{ Request::segment(1) === 'image' ? 'active' : null }}"><a href="#">Images</a></li> 
@stop
@section('contenu')
<div class="row">
	<div class="col-sm-offset-2 col-sm-8">
		<br>
		@yield('contenuBack')
	</div>
</div>
@stop