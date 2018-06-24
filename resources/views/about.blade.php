@extends('layouts.layout')
@section('content')
@push('styles')
<link rel="stylesheet" type="text/css" href="/css/modificadorAbout.css">
@endpush


      <!-- Introduction Row -->
      <h1 class="my-4">Sobre nosotros
        <small>Estamos encantados de conocerte!</small>
      </h1>
      <hr class="style-seven">
      <p>Tan solo somos un equipo de aficionados intentando crear un rincon donde todos los loleros se sientan comodos y puedan encontrar gente para jugar en equipo, olvidandose de todos los guiris feeders y flamers. Para eso hemos creado esta pagina... asique... ¡Bienvenidx!</p>

      <!-- Team Members Row -->
      <div class="row">
        <div class="col-lg-12">
          <h2 class="my-4">Nuestro equipo</h2>
        </div>
        <hr class="style-seven">
        <div class="col-lg-6 col-sm-6 text-center mb-4">
          <img class="rounded-circle img-fluid d-block mx-auto" src="http://placehold.it/200x200" alt="">
          <h3>Yuri
            <small>Programador</small>
          </h3>
          <p>Encargado de que la pagina funcione correctamente para que todos la puedan disfrutar</p>
        </div>
        <div class="col-lg-6 col-sm-6 text-center mb-4">
          <img class="rounded-circle img-fluid d-block mx-auto" src="http://placehold.it/200x200" alt="">
          <h3>Ilia
            <small>Diseñador</small>
          </h3>
          <p>¿La pagina luce genial? Pues es gracias a él</p>
        </div>

@endsection