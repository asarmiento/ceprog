@extends('template.Master')



@section('content')


{!! Form::model($role, ['route' => ['role.update', $role->id ], 'method' => 'PUT', 'class' => 'form-horizontal']) !!}

@include('include.editrole', ['submitButtonText' => 'Editar Grupo'])


@include('errors.error')

@stop