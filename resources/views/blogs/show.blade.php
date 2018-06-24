@extends('layouts.layout')
@push('styles')
<link rel="stylesheet" type="text/css" href="/css/navbar.css">

<link rel="stylesheet" type="text/css" href="/css/modificadorBlogShow.css">
<link rel="stylesheet" type="text/css" href="/css/sidebarNavBlog.css">

@endpush
@section('content')



      <div class="row">

        <!-- Post Content Column -->
        <div class="col-lg-8">

          <!-- Title -->
          <h1 class="mt-4">{{$blog->title}}</h1>

          <!-- Author -->
          <p class="lead">
            Posted on {{$blog->created_at}}
            by
            <a href="#">{{$blog->user->name}}</a>
            in
            <a href="#">{{$blog->category->name}}</a>
          </p>

          <hr class="style-seven">

          <!-- Preview Image -->
          <img class="img-fluid rounded" src="http://placehold.it/900x300" alt="">

          <hr class="style-seven">

          <!-- Post Content -->
				<div class="contenido-post">
				{!!$blog->body!!}
        </div>
          <hr class="style-seven">

          <!-- Comments Form -->
<div id="disqus_thread"></div>
<script>

/**
*  RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.
*  LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables*/
/*
var disqus_config = function () {
this.page.url = PAGE_URL;  // Replace PAGE_URL with your page's canonical URL variable
this.page.identifier = PAGE_IDENTIFIER; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
};
*/
(function() { // DON'T EDIT BELOW THIS LINE
var d = document, s = d.createElement('script');
s.src = 'https://leaguetest-1.disqus.com/embed.js';
s.setAttribute('data-timestamp', +new Date());
(d.head || d.body).appendChild(s);
})();
</script>
<noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>

        </div>
        

        @include('layouts.partials.sidebarBlog')



     
      </div>

      <!-- /.row -->


@endsection
@push('scripts')
    <script>
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
    });
    </script>
@endpush