@extends('layouts.layout')
@section('noContainer')
@push('styles')
<link rel="stylesheet" type="text/css" href="/css/profile.css">
@endpush

<div class="content-profile-page">
   <div class="profile-user-page card">
      <div class="img-user-profile">
        <img class="profile-bgHome" src="https://fantasy.eslgaming.com/img/bg.jpg?50dff73" />
        <img class="avatar" src="http://gravatar.com/avatar/288ce55a011c709f4e17aef7e3c86c64?s=200" alt="jofpin"/>
           </div>
          <button>Summonner</button>
          <div class="user-profile-data">
            <h1>{{auth()->user()->name}}</h1>
            <p>{{isset($profile->location) ? $profile->location : ''}}</p>
          </div> 
          <div class="description-profile col-md-6">{{isset($profile->primary_rol) ? $profile->primary_rol : ''}}</div>
          <div class="description-profile col-md-6">{{isset($profile->secondary_rol) ? $profile->secondary_rol : ''}}</div>
       <ul class="data-user">
        <li><a><strong>3390</strong><span>Posts</span></a></li>
        <li><a><strong>(mensaje)</strong><span>Enviar mensaje</span></a></li>
        <li><a><strong>(add)</strong><span>(agregar invocador)</span></a></li>
       </ul>
      </div>
    </div>

<footer>
   <h4>Design by <a href="https://twitter.com/jofpin" target="_blank" title="José Pino">@jofpin</a></h4>
</footer>


@endsection