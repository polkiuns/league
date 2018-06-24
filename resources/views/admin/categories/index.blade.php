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
                  <th>Nombre</th>
                  <th>Descripcion</th>
                  <th>Acciones</th>
                </tr>
                </thead>
                <tbody>
                @foreach($categories as $category)
                <tr>
                  <td>{{$category->id}}</td>
                  <td>{{$category->name}}</td>
                  <td>{{$category->description}}</td>
                  <td>
                          <a href="{{route('admin.categories.edit' , $category)}}" title="Editar curso" class="btn btn-xs btn-info"><i class="fa fa-pencil"></i></a>
                         
                          <form method = "POST" action ="{{route('admin.categories.delete' , $category)}}" style="display: inline;">
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
                  <th>Nombre</th>
                  <th>Descripcion</th>
                  <th>Acciones</th>
                </tr>
                </tfoot>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
@endsection