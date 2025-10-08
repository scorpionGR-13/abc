@extends('layouts.main')
@section('titulo', $titulo)
@section('contenido')
    

<main id="main" class="main">

    <div class="pagetitle">
      <h1>Eliminar categoria</h1>

    </div><!-- End Page Title -->


    <section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <!--BOTON AGREGAR-->
              <form action="{{ route("categorias.destroy",$item->id) }}" method="POST">
                @csrf<!--CONTRARESTAR ATAQUES-->
                @method('DELETE')
                <label for="">¿Estas segurode eliminar esta categoria?</label>
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">nombre de categoria</label>
                  <input type="text" readonly class="form-control" id="nombre" name="nombre"
                  aria-describedby="emailHelp"placeholder="Ingrese una categoria aqui" value="{{$item->nombre}}">
                </div>
                <button class="btn btn-danger"><i class="fa-solid fa-trash-can"></i></button>
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