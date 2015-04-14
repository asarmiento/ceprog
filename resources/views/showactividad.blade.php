@extends('template.Maestro')


@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="panel panel-default">
				<div class="panel-heading">Actividad</div>

				<div class="panel-body">
				
 <h4>Nombre de la Actividad: </h4><p>{{ $profesor->actividad }}</p>
 <h4>Descripcion de la actividad: </h4><p>{{ $profesor->descripcion }}</p>
 <h4>Estrategia: </h4><p>{{ $profesor->estrategia }}</p>
 <h4>Nivel cognositivo: </h4> <p>{{ $profesor->cognoscitivo }}</p>
 <h4>Objetivo: </h4><p>{{ $profesor->objetivo }}</p>
 <h4>Descripcion de las Rubricas: </h4><li><p>{{ $profesor->opcionuno }}</p></li><li><p>{{ $profesor->opciondos }}</p></li><li><p>{{ $profesor->opciontres }}</p></li>
 <h4>Valor total de la actividad: </h4><p>{{ $profesor->valoractividad }}</p>
 <h4>Unidad(es):</h4><p>{{ $profesor->unidad }}</p>
 <h4>Evidencias: </h4><p>{{ $profesor->evidencia }}</p>
 <h4>Caracteristicas: </h4><p> {{ $profesor->caracteristicas }}</p>
 <h4>Sugeencia de relacion: </h4><p>{{ $profesor->realizacion }}</p>
 <h4>Fecha de actividad:</h4><p>{{ $profesor->fecha }}</p>
 <h4>Codigo de la actividad: </h4><p>{{ $profesor->codigoactividad }}</p>
 <h4>Materia:</h4><p>{{ $profesor->materia }}</p>

				</div>
			</div>
		</div>
	</div>
</div>
@endsection


