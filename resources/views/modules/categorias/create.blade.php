@extends('layouts.main')
@section('titulo', $titulo)
@section('contenido')
    

<main id="main" class="main">

    <div class="pagetitle">
      <h1>Agregar nueva categoria</h1>

    </div><!-- End Page Title -->


    <section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <!--BOTON AGREGAR-->
              <form action="{{ route("categorias.store") }}" method="POST">
                @csrf
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">nombre de categoria</label>
                  <input type="text" class="form-control" id="nombre" name="nombre" aria-describedby="emailHelp"placeholder="Ingrese una categoria aqui">
                </div>
                <button class="btn btn-success"><i class="fa-solid fa-address-card"></i></i></button>
                <a href="{{ route("categori") }}" class="btn btn-info"><i class="fa-solid fa-rectangle-xmark"></i></a>
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