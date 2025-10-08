@extends('layouts.main')
@section('titulo', $titulo)
@section('contenido')
<main id="main" class="main">

    <div class="pagetitle">
      <h1>Agregar nuevo cliente</h1>

    </div><!-- End Page Title -->


    <section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <!--BOTON AGREGAR-->
              <form action="{{ route("clientes.store") }}" method="POST">
                @csrf
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">apellido del cliente</label>
                  <input type="text" class="form-control" id="apellido" name="apellido" aria-describedby="emailHelp"placeholder="Ingrese un apellido aqui">
                  <label for="exampleInputEmail1" class="form-label">nombre del cliente</label>
                  <input type="text" class="form-control" id="nombre" name="nombre" aria-describedby="emailHelp"placeholder="Ingrese un nombre aqui aqui">
                  <label for="exampleInputEmail1" class="form-label">email del cliente</label>
                  <input type="text" class="form-control" id="email" name="email" aria-describedby="emailHelp"placeholder="Ingrese un email aqui">
                </div>
                <button class="btn btn-success"><i class="fa-solid fa-address-card"></i></button>
                <a href="{{ route("cliente") }}" class="btn btn-info"><i class="fa-solid fa-rectangle-xmark"></i></a>
              </form>
              
              <!-- Table with stripped rows -->
             
              <!-- End Table with stripped rows -->

            </div>
          </div>

        </div>
      </div>
    </section>

</main><!-- End #main -->
@endsection