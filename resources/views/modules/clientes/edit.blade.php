@extends('layouts.main')
@section('titulo', $titulo)
@section('contenido')
    

<main id="main" class="main">

    <div class="pagetitle">
      <h1>Actualizar cliente</h1>

    </div><!-- End Page Title -->


    <section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <!--BOTON AGREGAR-->
              <form action="{{ route("clientes.update",$item->id) }}" method="POST">
                @csrf<!--CONTRARESTAR ATAQUES-->
                
                @method('PUT')
                <label for="">¿Estas segurode editar este cliente?</label>
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">nombre de cliente</label>
                  <input type="text" class="form-control" id="nombre" name="nombre"
                  aria-describedby="emailHelp"placeholder="Ingrese un cliente aqui" value="{{$item->nombre}}">

                  <label for="exampleInputEmail1" class="form-label">apellido de cliente</label>
                  <input type="text" class="form-control" id="apellido" name="apellido"
                  aria-describedby="emailHelp"placeholder="Ingrese un apellido aqui" value="{{$item->apellido}}">

                  <label for="exampleInputEmail1" class="form-label">email de cliente</label>
                  <input type="text" class="form-control" id="email" name="email"
                  aria-describedby="emailHelp"placeholder="Ingrese un email aqui" value="{{$item->email}}">

                </div>
                <button class="btn btn-success"><i class="fa-solid fa-file-pen"></i></button>
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