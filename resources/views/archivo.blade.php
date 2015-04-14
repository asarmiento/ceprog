@extends('template.Maestro')

@section('content')

	<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="panel panel-default">
				<div class="panel-heading">Lista de archivos</div>

				<div class="panel-body">
						
							{!! Form::open(['action' => 'FileEntryController@index', 'method' => 'GET', 'class' => 'navbar-form navbar-left pull-right', 'role' => 'search']) !!}
							
							<div class="form-group">
								
								{!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'nombre de actividad']) !!}

							</div>		

							<button type="submit" class="btn btn-default">Buscar</button>

						{!! Form::close() !!}

					<h6>Hay {!! $entries->total(); !!} Archivos</h6>
					<table class="table table-bordered">
			
		<tr>
			
			<td>#</td>
			<td>Name</td>
			<td>Mensaje</td>
			<td>Archivo</td>

		</tr>
		
		@foreach($entries as $entry)

		<tr>
			<td>{{ $entry->id }}</td>
			<td>{{ $entry->name }}</td>
			<td>{{ $entry->mensaje }}</td>
			<td>
				
				
						
						<a href="{{ route('getentry', $entry->filename)}}" class="btn btn-success">Descargar</a>	
			</td>
		</tr>
		@endforeach
	</table>
		{!! $entries->render() !!}
				</div>
			</div>
			
		</div>
	</div>
</div>

@stop


@section('scripts')


@stop