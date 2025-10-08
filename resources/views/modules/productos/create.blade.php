@extends('layouts.main')
@section('titulo', $titulo)
@section('contenido')
<main id="main" class="main">

    <div class="pagetitle">
      <h1>Agregar nuevo producto</h1>

    </div><!-- End Page Title -->


    <section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <!--BOTON AGREGAR-->
              <form action="{{ route("productos.store") }}" method="POST">
                @csrf
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">nombre del producto</label>
                  <input type="text" class="form-control" id="nombre" name="nombre" aria-describedby="emailHelp"placeholder="Ingrese un nombre aqui">
                  <label for="exampleInputEmail1" class="form-label">descripcion del producto</label>
                  <input type="text" class="form-control" id="descripcion" name="descripcion" aria-describedby="emailHelp"placeholder="Ingrese un descripcion aqui">
                  <label for="exampleInputEmail1" class="form-label">cantidad del producto</label>
                  <input type="text" class="form-control" id="cantidad" name="cantidad" aria-describedby="emailHelp"placeholder="Ingrese un cantidad aqui">
                  <label for="exampleInputEmail1" class="form-label">precio del producto</label>
                  <input type="text" class="form-control" id="precio" name="precio" aria-describedby="emailHelp"placeholder="Ingrese un presio aqui">
                </div>
                <button class="btn btn-success">Guardar</button>
                <a href="{{ route("producto") }}" class="btn btn-danger">Cancelar</a>
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