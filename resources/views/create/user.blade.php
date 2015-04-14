@extends('template.Master')


@section('content')

	
{!! Form::open(['route' => 'admin.store', 'method' => 'POST', 'class' => 'form-horizontal']) !!}
	
	@include('include.user', ['submitButtonText' => 'Crear usuario'])


{!! Form::close() !!}

@stop