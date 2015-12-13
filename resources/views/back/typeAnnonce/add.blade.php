@extends('back.template')

@section('contenuBack')
	<div class="panel panel-info">
		<div class="panel-heading">Ajout d'un type d'annonce</div>
		<div class="panel-body">
			{!! Form::open(['route' => 'typeAnnonce.store']) !!}
			<div
				class="form-group {!! $errors->has('libelle') ? 'has-error' : '' !!}">
				{!! Form::text('libelle', null, ['class' => 'form-control',
				'placeholder' => 'Libellé']) !!} {!! $errors->first('libelle', '<small
					class="help-block">:message</small>') !!}
			</div>
			{!! Form::submit('Envoyer !', ['class' => 'btn btn-info pull-right'])
			!!} {!! Form::close() !!}
		</div>
	</div>
	<a href="javascript:history.back()" class="btn btn-primary"> <span
		class="glyphicon glyphicon-circle-arrow-left"></span> Retour
	</a>
@stop
