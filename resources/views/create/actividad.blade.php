@extends('template.Maestro')


@section('content')

	
{!! Form::open(['route' => 'profesor.store', 'method' => 'POST', 'class' => 'form-horizontal']) !!}
	
	@include('include.actividad', ['submitButtonText' => 'Crear actividad'])


{!! Form::close() !!}

@stop