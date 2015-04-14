@extends('template.Maestro')


@section('content')
 
   {!! Form::open(['route' => 'addentry', 'method' => 'POST', 'class' => 'form-horizontal', 'files' => true]) !!}
		
			@include('include.subir', ['submitButtonText' => 'Subir archivo'])

   {!! Form::close() !!}


@endsection
 





