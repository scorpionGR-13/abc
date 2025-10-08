@extends('layouts.main')
@section('titulo', $titulo)
@section('contenido')
<main id="main" class="main">

    <div class="pagetitle">
      <h1>clientes</h1>
      <section class="section">
        <div class="row">
          <div class="col-lg-12">
  
            <div class="card">
              <div class="card-body">
  
                <a href="{{route('clientes.create')}}" class="btn btn-primary"><i class="fa-solid fa-circle-plus"></i> Agregar Nuevo cliente</a>
                <!-- Table with stripped rows -->
                <table class="table datatable">
                  <thead>
                      <tr>
                        <th>id</th>
                        <th>user_id </th>
                        <th>apellido</th>
                        <th>nombre</th>
                        <th>email</th>
                        <th>Acciones</th>
                      </tr>
                      
                  </thead>
                  <tbody>
                    @foreach ($client as $clien)
                    <tr>
                      <td>{{$clien->id  }}</td>
                      <td>{{$clien->user_id }}</td>
                      <td>{{$clien->apellido}}</td>
                      <td>{{$clien->nombre}}</td>
                      <td>{{$clien->email}}</td>
                      <td>
                        <a href=" {{ route('clientes.edit', $clien->id) }}" class="btn btn-warning"><i class="fa-solid fa-pen-to-square"></i></a>
                        <a href=" {{ route('clientes.show', $clien->id) }}" class="btn btn-danger"><i class="fa-solid fa-trash-can"></i></a>
                      </td>
                    </tr>
                    @endforeach
                  </tbody>
                </table>
                <!-- End Table with stripped rows -->
  
              </div>
            </div>
  
          </div>
        </div>
      </section>

    </div><!-- End Page Title -->

    <section class="section dashboard">
      
    </section>

</main><!-- End #main -->
@endsection