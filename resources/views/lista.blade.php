@extends('template.master')

@section('content')

	<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="panel panel-default">
				<div class="panel-heading">Lista de Usuarios</div>

				<div class="panel-body">
						
							@include('include.buscar', ['submitButtonText' => 'Buscar'])

					<h6>Hay {!! $users->total(); !!} Usuarios</h6>
					<table class="table table-bordered">
			
		<tr>
			
			<td>#</td>
			<td>Name</td>
			<td>Email</td>
			<td>Modificar Usuario</td>

		</tr>
		
		@foreach($users as $user)

		<tr data-id="{{ $user->id }}">
			<td>{{ $user->id }}</td>
			<td>{{ $user->name }}</td>
			<td>{{ $user->email }}</td>
			<td>
				
				{!! Form::model($user, ['route' => ['admin.destroy', $user->id], 'method' => 'DELETE', 'role' => 'form']) !!}
						
						<a href="{{ route('admin.show', $user->id) }}" class="btn btn-info">Ver Usuario</a>
						<a href="{{ route('admin.edit', $user->id) }}" class="btn btn-warning">Editar Usuario</a>
						<button type="submit" onclick= "return confirm('seguro que desea eliminar el usuario?')" class="btn btn-danger">Borrar</button>

				{!! Form::close() !!}
				
			</td>
		</tr>
		@endforeach
	</table>
		{!! $users->render() !!}
				</div>
			</div>
			
		</div>
	</div>
</div>

{!! Form::model($users, ['route' => ['admin.destroy', ':USER_ID'], 'method' => 'DELETE', 'id' => 'form-delete']) !!}
			{!! Form::close() !!}
	
@stop


@section('scripts')


@stop