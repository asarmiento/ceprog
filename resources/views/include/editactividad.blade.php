<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="panel panel-default">
				<div class="panel-heading">Editar actividad</div>

				<div class="panel-body">
					<div class="form-group">

						@include('errors.error')


	{!! Form::label('estrategia', 'Estrategia: ', ['class' => 'control-label col-xs-2']) !!}

    <div class="col-lg-10">
   {!! Form::textarea('estrategia', null, ['class' => 'form-control', 'rows' => '3']) !!}
   </div>
   </div>
	
	<div class="form-group">
	{!! Form::label('cognoscitivo', 'Nivel cognoscitivo: ', ['class' => 'control-label col-xs-2']) !!}

    <div class="col-lg-10">
   {!! Form::textarea('cognoscitivo', null, ['class' => 'form-control', 'rows' => '3']) !!}
   </div>
    </div>
	
	<div class="form-group">
   {!! Form::label('actividad', 'Nombre de la actividad: ', ['class' => 'control-label col-xs-2']) !!}

    <div class="col-lg-10">
   {!! Form::text('actividad', null, ['class' => 'form-control']) !!}
   </div>
   </div>

   <div class="form-group">
   {!! Form::label('descripcion', 'Descripción de la actividad: ', ['class' => 'control-label col-xs-2']) !!}

   <div class="col-lg-10">
   {!! Form::textarea('descripcion', null, ['class' => 'form-control', 'rows' => '3']) !!}
    </div>
   </div>

   <div class="form-group">

   {!! Form::label('objetivo', 'Objetivo: ', ['class' => 'control-label col-xs-2']) !!}

     <div class="col-lg-10">
   {!! Form::textarea('objetivo', null, ['class' => 'form-control', 'rows' => '3']) !!}
   </div>
     </div>

      <div class="form-group">

   <div class="form-group">

   {!! Form::label('opcionuno', 'Descripción de las rúbricas 1: ', ['class' => 'control-label col-xs-2']) !!}

    <div class="col-lg-10">
   {!! Form::textarea('opcionuno', null, ['class' => 'form-control', 'rows' => '3']) !!}
    </div>
    </div>

    <div class="form-group">

   {!! Form::label('opciondos', 'Descripción de las rúbricas 2: ', ['class' => 'control-label col-xs-2']) !!}

    <div class="col-lg-10">
   {!! Form::textarea('opciondos', null, ['class' => 'form-control', 'rows' => '3']) !!}
    </div>
    </div>

    <div class="form-group">

   {!! Form::label('opciontres', 'Descripción de las rúbricas 3: ', ['class' => 'control-label col-xs-2']) !!}

    <div class="col-lg-10">
   {!! Form::textarea('opciontres', null, ['class' => 'form-control', 'rows' => '3']) !!}
    </div>
    </div>

    <div class="form-group">

    {!! Form::label('valoractividad', 'Valor Total de la actividad: ', ['class' => 'control-label col-xs-2']) !!}

    <div class="col-lg-10">
   {!! Form::text('valoractividad', null, ['class' => 'form-control']) !!}
   </div>
    </div>

    <div class="form-group">

    {!! Form::label('unidad', 'Unidad(es): ', ['class' => 'control-label col-xs-2']) !!}

    <div class="col-lg-10">
   {!! Form::text('unidad', null, ['class' => 'form-control']) !!}
   </div>
   </div>
	
	<div class="form-group">

    {!! Form::label('evidencia', 'Evidencias: ', ['class' => 'control-label col-xs-2']) !!}

    <div class="col-lg-10">
   {!! Form::text('evidencia', null, ['class' => 'form-control']) !!}
   </div>
   </div>
	
	<div class="form-group">

	{!! Form::label('caracteristicas', 'Características de entrega de la evidencia: ', ['class' => 'control-label col-xs-2']) !!}

    <div class="col-lg-10">
   {!! Form::text('caracteristicas', null, ['class' => 'form-control']) !!}
   </div>
    </div>

    <div class="form-group">

  {!! Form::label('realizacion', 'Sugerencias de realización:  ', ['class' => 'control-label col-xs-2']) !!}

    <div class="col-lg-10">
   {!! Form::textarea('realizacion', null, ['class' => 'form-control', 'rows' => '3']) !!}
   </div>
    </div>
	
	<div class="form-group">

   {!! Form::label('fecha', 'Fecha ', ['class' => 'control-label col-xs-2']) !!}

    <div class="col-lg-10">
   {!! Form::text('fecha', null, ['class' => 'form-control']) !!}
   </div>
    </div>
	
	<div class="form-group">

   {!! Form::label('codigoactividad', 'Código de la actividad: ', ['class' => 'control-label col-xs-2']) !!}

    <div class="col-lg-10">
   {!! Form::text('codigoactividad', null, ['class' => 'form-control']) !!}
   </div>
  </div>

    <div class="form-group">

   {!! Form::label('user', 'Elegir alumno : ', ['class' => 'control-label col-xs-2']) !!}

       <div class="col-lg-10">
   {!! Form::select('user[]', $user, null, [ 'id' => 'tag_list', 'class' => 'form-control', 'multiple']) !!}
    </div>
</div>
  
   <div class="form-group">

   {!! Form::label('materia', 'Materia: ', ['class' => 'control-label col-xs-2']) !!}

    <div class="col-lg-10">
   {!! Form::text('materia', null, ['class' => 'form-control']) !!}
   </div>
  </div>

    </div>

  

  
				</div>
			</div>
		</div>
	</div>
</div>

<div class="col-xs-offset-2 col-xs-10">

     {!! Form::submit($submitButtonText, ['class' => 'btn btn-default']) !!}

    </div>


    @section('footer')
	
	@include('script.select')
	
    @stop