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
                  <th>Email</th>
                  <th>Asunto</th>

                </tr>
                </thead>
                <tbody>
                @foreach($contacts as $contact)
                <tr>
                  <td>{{$contact->id}}</td>
                  <td>{{$contact->name}}</td>
                  <td>{{$contact->email}}</td>
                  <td>{{$contact->affair}}</td>
                  <td>
                         
                          <form method = "POST" action ="{{route('admin.contact.delete' , $contact)}}" style="display: inline;">
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
                  <th>Email</th>
                  <th>Asunto</th>
                </tr>
                </tfoot>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
@endsection