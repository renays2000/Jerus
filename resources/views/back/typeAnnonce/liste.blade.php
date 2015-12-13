@extends('back.template')

@section('contenuBack')
		<div class="panel panel-primary">
			<div class="panel-heading">
				<h3 class="panel-title">Liste des types d'annonce</h3>
			</div>
			<table class="table">
				<thead>
					<tr>
						<th>#</th>
						<th>Nom</th>
						<th></th>
					</tr>
				</thead>
				<tbody>
					@foreach ($typeAnnonces as $typeAnnonce)
						<tr>
							<td>{!! $typeAnnonce->id!!}</td>
							<td class="text-primary"><strong>{!! $typeAnnonce->libelle !!}</strong></td>
							<td>
								{!! Form::open(['method' => 'DELETE', 'route' => ['typeAnnonce.destroy', $typeAnnonce->id]]) !!}
									{!! Form::submit('Supprimer', ['class' => 'btn btn-sx btn-danger btn-block', 'onclick' => 'return confirm(\'Vraiment supprimer cet type ?\')']) !!}
								{!! Form::close() !!}
							</td>
						</tr>
					@endforeach
	  			</tbody>
			</table>
		</div>
		{!! link_to_route('typeAnnonce.create', 'Ajouter un type', [], ['class' => 'btn btn-info pull-right']) !!}
		{!! $links !!}
<!-- 	</div> -->
@stop