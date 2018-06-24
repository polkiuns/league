@extends('layouts.layout')
@section('content')
@push('styles')
<link rel="stylesheet" type="text/css" href="/css/modificadorBlogs.css">
<link rel="stylesheet" type="text/css" href="/css/navbar.css">
<link rel="stylesheet" type="text/css" href="/css/sidebarNavBlog.css">
@endpush

      <div class="row">
        <!-- Blog Entries Column -->
        <div class="col-md-8">
          <h1 class="my-4">Blogs
          @if(isset($scopeName))  
            <small>{{$scopeName->name}}</small>
          @else
            <small>Todos los blogs</small>
          @endif
          </h1>
          <hr class="style-seven">
          <!-- Blog Post -->
          @foreach($blogs as $blog)
          <div class="card mb-4">
            <div class="card-body">
              <h2 class="card-title">{{$blog->title}}</h2>
              <hr class="style-two">
              <p class="card-text">{{$blog->description}}</p>   
            </div>
            <div class="card-body text-muted">
               <hr class="style-two">
              Posted on {{$blog->created_at}} by 
              <a href="#">{{$blog->user->name}}</a>
              in
              <a href="#">{{$blog->category->name}}</a>
            </div>
            <a href="{{route('blogs.show' , $blog)}}" class="btn btn-primary">Leer mas &rarr;</a>
          </div>
          @endforeach
          <!-- Pagination -->
        @isset($blogs) 
          {{$blogs->links()}}
        @endisset
        </div>
        <!-- Sidebar Widgets Column -->
        @include('layouts.partials.sidebarBlog')
      </div>
      <!-- /.row -->

    <!-- /.container -->
@endsection

@push('scripts')
<script type="text/javascript">
  
    $(function() {

      $("#category").change(function() {

        if($(this).val() == 1)
        {
          window.location.replace('blogs');
        } else {
          window.location.replace('blogs?category=' + $(this).val());
        }
        
      });

    });

</script>
@endpush