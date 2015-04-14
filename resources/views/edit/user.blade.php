@extends('template.Master')



@section('content')


{!! Form::model($user, ['route' => ['admin.update', $user->id ], 'method' => 'PUT', 'class' => 'form-horizontal']) !!}

@include('include.edit', ['submitButtonText' => 'Editar usuario'])


@include('errors.error')

@stop