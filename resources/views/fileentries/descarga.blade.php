@extends('template.alumno')


@section('content')
 
   {!! Form::open(['route' => 'addentry', 'method' => 'POST', 'class' => 'form-horizontal', 'files' => true]) !!}
		
			@include('include.descarga', ['submitButtonText' => 'Subir archivo'])

   {!! Form::close() !!}


@endsection
 
