@extends('layouts.layout')
@push('styles')
<link rel="stylesheet" type="text/css" href="/css/createBlog.css">
<link rel="stylesheet" type="text/css" href="/css/navbar.css">
@endpush
@section('content')
            <div class="box">
             <div class="box-body">
                {!! Form::open(['route'=>'blogs.store']) !!}
                <div class="col {{ $errors->has('title') ? 'has-error' : '' }}">
                  {!! Form::label('title' , 'Titulo de la publicacion') !!}
                  {!! Form::text('title', old('title'), ['id' => 'title' ,'class'=>'form-control', 'placeholder'=>'Enter title of blog']) !!}
                  <span class="text-danger">{{ $errors->first('title') }}</span>
                </div>
        		<br>
        		<div class="col {{ $errors->has('category_id') ? 'has-error' : '' }}">
                  {!! Form::label('category_id' , 'Agrega una categoria a la publicacion') !!}
                  {!! Form::select('category_id',$categories, old('category_id'), ['id' => 'curso','class'=>'form-control']) !!}
                  <span class="text-danger">{{ $errors->first('category_id') }}</span>
            </div>
                <br>
                <div class="col {{ $errors->has('description') ? 'has-error' : '' }}">
                  {!! Form::label('description' , 'Resume tu entrada brevemente') !!}
                  {!! Form::textarea('description', old('description'), ['id' => 'description' ,'class'=>'form-control', 'placeholder'=>'Enter description of blog' , 'size' => '2x3']) !!}
                  <span class="text-danger">{{ $errors->first('description') }}</span>
                </div>
				<br>
              <div class="form-group {{$errors->has('body') ? 'has-error' : ''}}">
              	{!!Form::label('body', 'Contenido de la publicacion, admite formato HMTL')!!}
               	{!!Form::textarea('body', old('body') ,['placeholder' => 'Ingresa contenido body' , 'class' => 'form-control' , 'size' => '5x10' , 'id' => 'editor1'])!!}					
                {!! $errors->first('body', '<span class="help-block">:message</span>') !!}
              </div>

                <div class="form-group">
                  <button class="btn btn-primary btn-block">Crear nueva entrada</button>
                </div>
                {!! Form::close() !!}
              </div>

    </div>

@endsection

@push('scripts')
<script src="/adminlte/bower_components/ckeditor/ckeditor.js"></script>
<script>
  $(function () {
    CKEDITOR.replace('editor1');
  });
</script>
@endpush