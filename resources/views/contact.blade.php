@extends('layouts.layout')
@section('content')
@push('styles')
<link rel="stylesheet" type="text/css" href="/css/modificadorContact.css">
@endpush



    {!! Form::open(['route' => 'messages.mod']) !!}
    @csrf

        <div class="box">
          <div class="box-body">
          	<div class="form-row">
              <div class="col {{$errors->has('name') ? 'has-error' : ''}}" >
              	{!!Form::label('name', 'Nombre')!!}
                {!!Form::text('name', old('name') ,['placeholder' => 'Escriba su nombre, porfavor' , 'class' => 'form-control'])!!}
                {!! $errors->first('name', '<span class="help-block">:message</span>')!!}     
              </div>
              <div class="col {{$errors->has('email') ? 'has-error' : ''}}">
              	{!!Form::label('email', 'Email')!!}
                {!!Form::text('email', old('email'),['placeholder' => 'Escriba su email' , 'class' => 'form-control' , 'size' => '5x3'])!!}
                {!! $errors->first('email', '<span class="help-block">:message</span>') !!}
                <small class="form-text text-muted">Necesitamos esta informacion para ponernos en contacto contigo!!</small>
              </div>
          </div>
              <div class="form-group {{$errors->has('asunto') ? 'has-error' : ''}}">
              	{!!Form::label('asunto', 'Asunto' , ['class' => "control-label"])!!}
                {!!Form::text('asunto', old('asunto'),['placeholder' => 'Escriba el asunto del mensaje' , 'class' => 'form-control' , 'size' => '5x3'])!!}
                {!! $errors->first('asunto', '<span class="help-block">:message</span>') !!}
              </div>
              <div class="form-group {{$errors->has('body') ? 'has-error' : ''}}">
              	{!!Form::label('body', 'Contenido del mensaje')!!}
               	{!!Form::textarea('body', isset($curso) ? $curso->body : '' ,['placeholder' => 'Ingresa aqui el contenido del mensaje' , 'class' => 'form-control' , 'size' => '5x10' , 'id' => 'editor1'])!!}					
                {!! $errors->first('body', '<span class="help-block">:message</span>') !!}
              </div>
          </div>
        </div>

              <div class="form-group">
                <label></label>
                  <button type="submit" class="btn btn-primary btn-block" id="enviar">Enviar mensaje</button>
              </div>


 
    {!! Form::close() !!}


@endsection