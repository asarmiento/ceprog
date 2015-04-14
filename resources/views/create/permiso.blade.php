@extends('template.Master')


@section('content')

	
{!! Form::open(['route' => 'permiso.store', 'method' => 'POST', 'class' => 'form-horizontal']) !!}
	
	@include('include.permiso', ['submitButtonText' => 'Crear Permisos'])


{!! Form::close() !!}

@stop