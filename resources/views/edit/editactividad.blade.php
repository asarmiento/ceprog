@extends('template.Maestro')



@section('content')


{!! Form::model($profesor, ['route' => ['profesor.update', $profesor->id ], 'method' => 'PUT', 'class' => 'form-horizontal']) !!}

@include('include.editactividad', ['submitButtonText' => 'Editar Actividad'])


@stop
