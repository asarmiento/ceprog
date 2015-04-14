@extends('template.alumno')

@section('content')

	<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="panel panel-default">
				<div class="panel-heading">Lista de actividades</div>

				<div class="panel-body">
						
							{!! Form::open(['route' => 'alumnos.index', 'method' => 'GET', 'class' => 'navbar-form navbar-left pull-right', 'role' => 'search']) !!}
							
							<div class="form-group">
								
								{!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'nombre de actividad']) !!}

							</div>		

							<button type="submit" class="btn btn-default">Buscar</button>

						{!! Form::close() !!}

					<h6>Hay {!! $alumnos->total(); !!} Actividad</h6>
					<table class="table table-bordered">
			
		<tr>
			
			<td>#</td>
			<td>Name</td>
			<td>Materia</td>
			<td>Actions</td>

		</tr>
		
		@foreach($alumnos as $alumno)

		<tr>
			<td>{{ $alumno->id }}</td>
			<td>{{ $alumno->actividad }}</td>
			<td>{{ $alumno->materia }}</td>
			<td>
				
				{!! Form::model($alumno, ['route' => ['alumnos.destroy', $alumno->id], 'method' => 'DELETE', 'role' => 'form']) !!}
						
						<a href="{{ route('alumnos.show', $alumno->id) }}" class="btn btn-info">Ver actividad</a>
						<a href="{{ action('DescargaController@create')}}" class="btn btn-success">Responder actividad</a>

				{!! Form::close() !!}
				
			</td>
		</tr>
		@endforeach
	</table>
		{!! $alumnos->render() !!}
				</div>
			</div>
			
		</div>
	</div>
</div>

@stop


@section('scripts')


@stop