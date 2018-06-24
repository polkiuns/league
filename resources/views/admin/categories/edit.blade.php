@extends('admin.layouts.layout')

@section('content')


    <section class="content-header">
      <h1>
        Crear una categoria del blog
        <small>A continuacion podra crear una nueva categoria</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Inicio</a></li>
        <li>Categoria</li>
        <li class="active">Crear</li>
      </ol>
    </section>

		
          <div class="row">
            <div class="col-md-12">
            <div class="box">
             <div class="box-body">
              
     
    			{!! Form::model($category, array('route' => array('admin.categories.update', $category))) !!}
    			@csrf {{method_field('PUT')}}

                  <div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">

                  {!! Form::label('name' , 'Nombre de la categoria') !!}

                  {!! Form::text('name', $category->name, ['id' => 'name' ,'class'=>'form-control', 'placeholder'=>'Enter name of category']) !!}

                  <span class="text-danger">{{ $errors->first('name') }}</span>

                </div>


                  <div class="form-group {{ $errors->has('description') ? 'has-error' : '' }}">

                  {!! Form::label('description' , 'Descripcion de la categoria') !!}

                  {!! Form::textarea('description', $category->description, ['id' => 'description' ,'class'=>'form-control', 'placeholder'=>'Enter description of category']) !!}

                  <span class="text-danger">{{ $errors->first('description') }}</span>

                </div>


                <div class="form-group">

                  <button class="btn btn-success">Agregar categoria</button>

                </div>


                {!! Form::close() !!}
              </div>
            </div>
@endsection

