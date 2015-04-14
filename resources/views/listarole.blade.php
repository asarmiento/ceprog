@extends('template.master')

@section('content')

	<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="panel panel-default">
				<div class="panel-heading">Lista de Grupos</div>

				<div class="panel-body">
						
							{!! Form::open(['route' => 'role.index', 'method' => 'GET', 'class' => 'navbar-form navbar-left pull-right', 'role' => 'search']) !!}
							
							<div class="form-group">
								
								{!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'nombre de grupo']) !!}

							</div>		

							<button type="submit" class="btn btn-default">Buscar</button>

						{!! Form::close() !!}

					<h6>Hay {!! $roles->total(); !!} Grupos</h6>
					<table class="table table-bordered">
			
		<tr>
			
			<td>#</td>
			<td>Name</td>
			<td>Email</td>
			<td>Modificar Usuario</td>

		</tr>
		
		@foreach($roles as $role)

		<tr>
			<td>{{ $role->id }}</td>
			<td>{{ $role->name }}</td>
			<td>{{ $role->slug }}</td>
			<td>
				
				{!! Form::model($role, ['route' => ['role.destroy', $role->id], 'method' => 'DELETE', 'role' => 'form']) !!}
						
						<a href="{{ route('role.show', $role->id) }}" class="btn btn-info">Ver usuarios del grupo</a>
						<a href="{{ route('role.edit', $role->id) }}" class="btn btn-warning">Asignar grupo</a>
						<button type="submit" onclick= "return confirm('seguro que desea eliminar el Grupo?, recuerda que se eliminaran todos los usuarios que esten ese grupo.')" class="btn btn-danger">Borrar</button>

				{!! Form::close() !!}
				
			</td>
		</tr>
		@endforeach
	</table>
		{!! $roles->render() !!}
				</div>
			</div>
			
		</div>
	</div>
</div>

@stop


@section('scripts')


@stop