@extends('layouts.layout')
@push('styles')
<link rel="stylesheet" type="text/css" href="/css/modificadorIndex.css">
@endpush
@section('content')

      <h1 class="my-4">Bienvenidx a nuestra pagina</h1>
      <hr class="style-seven">
      <!-- Marketing Icons Section -->
      <div class="row">
        <div class="col-lg-4 mb-4">
          <div class="card h-100">
            <h4 class="card-header">Compañeros</h4>
            <div class="card-body">
              <p class="card-text">Con nuestro buscador de compañeros jamas volveras a estar solx en la grieta! manda y recibe peticiones para formar un equipo imparable</p>
            </div>
            <div class="card-footer">
              <a href="#" class="btn btn-primary btn-block">¿En que consiste?</a>
            </div>
          </div>
        </div>
        <div class="col-lg-4 mb-4">
          <div class="card h-100">
            <h4 class="card-header">Blogs</h4>
            <div class="card-body">
              <p class="card-text">Te interesa compartir algo con la extensa comunidad de league of legends? No te preocupes, expresa tu opinion en este blog</p>
            </div>
            <div class="card-footer">
              <a href="#" class="btn btn-primary btn-block">Ver todos los blogs</a>
            </div>
          </div>
        </div>
        <div class="col-lg-4 mb-4">
          <div class="card h-100">
            <h4 class="card-header">TabernaLolera</h4>
            <div class="card-body">
              <p class="card-text">Se que algunos echais de menos el chat publico, si, todos lo echamos de menos, por eso hemos desarrollado este chat para que simule lo que deberia haber sido añadido en el nuevo cliente</p>
            </div>
            <div class="card-footer">
              <a href="#" class="btn btn-primary btn-block">Ir al chat</a>
            </div>
          </div>
        </div>
      </div>
      <!-- /.row -->

      <!-- Portfolio Section -->
      <h1 class="my-4">Blogs con una gran valoracion</h1>
      <hr class="style-seven">
      <div class="row">
        @foreach($blogs as $blog)
        <div class="col-lg-4 mb-4">
          <div class="card h-100">
            <h4 class="card-header">{{$blog->title}}</h4>
            <div class="card-body">
              <p class="card-text">{{$blog->description}}</p>
            </div>
            <div class="card-footer">
              Posted by 
              <a href="#">{{$blog->user->name}}</a> <br>
              <a href="#" class="btn btn-primary pull-right">Leer mas &rarr;</a>
            </div>
          </div>
        </div>
        @endforeach
      </div>
      <!-- /.row -->
      <hr class="style-seven">

      <!-- Call to Action Section -->
      <div class="row mb-4">
        <div class="col-md-8">
          <p id="parrafo">Si te interesa leer mas blogs alucinantes como estos</p>
        </div>
        <div class="col-md-4">
          <a class="btn btn-lg btn-secondary btn-block" href="#">Pincha aqui</a>
        </div>
      </div>

    </div>

@endsection
