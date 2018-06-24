@extends('layouts.layout')
@push('styles')

<link rel="stylesheet" type="text/css" href="/css/navbar.css">
<link rel="stylesheet" type="text/css" href="/css/modificadorBlogsIndex.css">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
@endpush
@section('content')

          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Tabla de Blogs</h3>
            </div>
            <!-- /.box-header -->
                  <hr class="style-seven">
            <div class="box-body">
              <table id="table1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Titulo</th>
                  <th>Descripcion</th>
                  <th>Categoria</th>
                  <th>Acciones</th>
                </tr>
                </thead>
                <tbody>
                @foreach($blogs as $blog)
                <tr>
                  <td>{{$blog->title}}</td>
                  <td>{{$blog->description}}</td>
                  <td>{{$blog->category->name}}</td>
                  <td>
                          <a href="{{route('blogs.edit' , $blog)}}" title="Editar curso" class="btn btn-xs btn-info"><i class="far fa-edit"></i></a>
                         
                          <form method = "POST" action ="{{route('blogs.delete' , $blog)}}" style="display: inline;">
                          @csrf {{method_field('DELETE')}} 
                          <button onclick = "return confirm('¿Estas seguro de querer borrar este curso?')" title="Eliminar curso" class="btn btn-xs btn-danger"><i class="far fa-trash-alt"></i></button>
                        </form>
                  </td>
                </tr>
                @endforeach
                </tbody>

              </table>
            </div>
            <!-- /.box-body -->
          </div>

@endsection
