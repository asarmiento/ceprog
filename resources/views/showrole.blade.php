@extends('template.Master')


@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="panel panel-default">
				<div class="panel-heading">Roles</div>

				<div class="panel-body">
				
<p>Este es el Grupo: {{ $role->name }}</p>
<p>Su clave es : {{ $role->slug }}</p>


@unless ($role->users->isEmpty())
<h2>Usuarios</h2>

<ul>
	
	@foreach($role->users as $user)
	
		<li>{{ $user->name }} - {{ $user->email }}</li>

	@endforeach

</ul>
@endunless


				</div>
			</div>
		</div>
	</div>
</div>
@endsection
