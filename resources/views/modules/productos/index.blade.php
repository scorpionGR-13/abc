@extends('layouts.main')
@section('titulo', $titulo)
@section('contenido')
<main id="main" class="main">

  <div class="pagetitle">
    <h1>productos</h1>
    <section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">

              <a href="{{route('productos.create')}}" class="btn btn-primary"><i class="fa-solid fa-circle-plus"></i> Agregar Nuevo producto</a>
              <!-- Table with stripped rows -->
              <table class="table datatable">
                <thead>
                    <tr>
                      <th>id</th>
                      <th>Nombre</th>
                      <th>descripcion</th>
                      <th>cantidad</th>
                      <th>presio</th>
                      <th>Acciones</th>
                    </tr>
                    
                </thead>
                <tbody>
                  @foreach ($produc as $prod)
                  <tr>
                    <td>{{$prod->categoria_id }}</td>
                    <td>{{$prod->nombre}}</td>
                    <td>{{$prod->descripcion}}</td>
                    <td>{{$prod->cantidad}}</td>
                    <td>{{$prod->precio}}</td>
                    <td>
                      <a href="" class="btn btn-warning"><i class="fa-solid fa-pen-to-square"></i></a>
                      <a href="" class="btn btn-danger"><i class="fa-solid fa-trash-can"></i></a>
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