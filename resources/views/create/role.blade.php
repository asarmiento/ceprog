@extends('template.Master')


@section('content')

	
{!! Form::open(['route' => 'role.store', 'method' => 'POST', 'class' => 'form-horizontal']) !!}
	
	@include('include.role', ['submitButtonText' => 'Crear role'])


{!! Form::close() !!}

@stop