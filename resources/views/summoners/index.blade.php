@extends('layouts.layout')
@section('content')
@push('styles')
<link rel="stylesheet" type="text/css" href="/css/modificadorContact.css">
@endpush
    <br>
@if(count($summoner))

<div class="card" style="width: 18rem;">
  <img class="card-img-top" src="http://ddragon.leagueoflegends.com/cdn/8.13.1/img/profileicon/{{$summoner->profile_icon}}.png" alt="Card image cap">
  <div class="card-body">
    <h5 class="card-title">Nombre: {{ $summoner->name }}</h5>
        <h5 class="card-title">{{$summoner->level}}</h5>
  </div>
</div>
	
@else
<div id="app">
  <Summoner></Summoner>
</div>
	<br>
@endif


@endsection
@if(!count($summoner))
@push('scripts')
<script src="{{ asset('js/app.js') }}"></script>
@endpush
@endif

