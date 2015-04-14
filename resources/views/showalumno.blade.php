@extends('template.Maestro')


@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="panel panel-default">
				<div class="panel-heading">Actividad</div>

				<div class="panel-body">
				
<h4>Nombre de la Actividad:</h4><p>{{ $alumnos->actividad }}</p>
<h4>Descripcion de la actividad: </h4><p>{{ $alumnos->descripcion }}</p>
<h4>Fecha de la Actividad: </h4><p>{{ $alumnos->fecha }}</p>
<h4>Codigo de la Actividad:</h4><p>{{ $alumnos->codigoactividad }}</p>
<h4>Objetivo: </h4><p>{{ $alumnos->objetivo }}</p>
<h4>Rubricas: </h4><li><p>{{ $alumnos->opcionuno }}</p></li><li><p>{{ $alumnos->opciondos }}</p></li><li><p>{{ $alumnos->opciontres }}</p></li>
<h4>Unidad: </h4><p>{{ $alumnos->unidad }}</p>
<h4>Evidencias: </h4><p>{{ $alumnos->evidencia}}</p>
<h4>Valor total de la actividad: </h4><p>{{ $alumnos->valoractividad }}</p>
<h4>Características de entrega de la evidencia: </h4><p>{{ $alumnos->caracteristicas}}</p>
<h4>Sugerencias de realización: </h4><p>{{ $alumnos->realizacion}}</p>



				</div>
			</div>
		</div>
	</div>
</div>
@endsection

