@extends('admin.layouts.layout')
@section('content')
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Tabla de categorias</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="table1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Id</th>
                  <th>Titulo</th>
                  <th>Descripcion</th>
                  <th>Autor</th>
                  <th>Categoria</th>
                  <th>Acciones</th>
                </tr>
                </thead>
                <tbody>
                @foreach($blogs as $blog)
                <tr>
                  <td>{{$blog->id}}</td>
                  <td>{{$blog->title}}</td>
                  <td>{{$blog->description}}</td>
                  <td>{{$blog->user->name}}</td>
                  <td>{{$blog->category->name}}</td>
                  <td>
                          <a href="{{route('admin.blogs.edit' , $blog)}}" title="Editar curso" class="btn btn-xs btn-info"><i class="fa fa-pencil"></i></a>
                         
                          <form method = "POST" action ="{{route('admin.blogs.delete' , $blog)}}" style="display: inline;">
                          @csrf {{method_field('DELETE')}} 
                          <button onclick = "return confirm('¿Estas seguro de querer borrar este curso?')" title="Eliminar curso" class="btn btn-xs btn-danger"><i class="fa fa-times"></i></button>
                        </form>
                  </td>
                </tr>
                @endforeach
                </tbody>
                <tfoot>
                <tr>
                  <th>Id</th>
                  <th>Titulo</th>
                  <th>Descripcion</th>
                  <th>Autor</th>
                  <th>Categoria</th>
                  <th>Acciones</th>
                </tr>
                </tfoot>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
@endsection