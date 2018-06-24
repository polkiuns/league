@extends('layouts.layout')
@section('content')
@push('styles')
<link rel="stylesheet" type="text/css" href="/css/modificadorContact.css">
@endpush

    {!! Form::open(['route' => 'summoner.create']) !!}
    @csrf

        <div class="box">
          <div class="box-body">
          	<div class="form-row">
              <div class="col {{$errors->has('name') ? 'has-error' : ''}}" >
              	{!!Form::label('name', 'Nombre')!!}
                {!!Form::text('name', old('name') ,['placeholder' => 'Escriba su nombre, porfavor' , 'class' => 'form-control', 'v-model' => 'summoner'])!!}
                {!! $errors->first('name', '<span class="help-block">:message</span>')!!}     
              </div>
              <div class="form-group">
                <label></label>
                  <button type="submit" class="btn btn-primary btn-block" id="enviar">Enviar mensaje</button>
              </div>

        </div>
      </div>
      <summoner></summoner>
    </div>
 
    {!! Form::close() !!}


@endsection
@push('scripts')
<script src="{{ elixir('js/app.js') }}"></script>
@endpush