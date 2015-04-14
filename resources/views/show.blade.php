@extends('template.Master')


@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="panel panel-default">
				<div class="panel-heading">Usuarios</div>

				<div class="panel-body">
				
<p>Este es el Usuario: {{ $users->name }}</p>
<p>Su Correo electronico es: {{ $users->email }}</p>


@unless ($users->roles->isEmpty())
<h2>Grupo</h2>

<ul>
	
	@foreach($users->roles as $role)
	
		<li>{{ $role->name }}</li>

	@endforeach

</ul>
@endunless


@unless ($users->userPermissions->isEmpty())
<h2>Permiso</h2>

<ul>
	
	@foreach($users->userPermissions as $user)
	
		<li>{{ $user->name }}</li>

	@endforeach

</ul>
@endunless

				</div>
			</div>
		</div>
	</div>
</div>
@endsection
