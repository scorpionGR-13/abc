@extends('layouts.main')
@section('titulo', $titulo)
@section('contenido')

<main id="main" class="main">

    <div class="pagetitle">
      <h1>editar usuario</h1>

    </div><!-- End Page Title -->


    <section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <!--BOTON AGREGAR-->
              <form action="{{ route("usuarios.update", $item->id) }}" method="POST">
                @csrf
                @method('PUT')
                <label for="name">Nombre del usuario</label>
                <input type="text" class="form-control" required name="name" id="name" value="{{ $item->name }}">
                <label for="email">Email</label>
                <input type="text" name="email" id="email" class="form-control" required value="{{ $item->email }}">
                <label for="rol">Rol de usuario</label>
                <select name="rol" id="rol" class="form-select">
                  <option value="">Selecciona el rol</option>
                  @if ($item->rol == 'admin')
                    <option value="admin" selected>Admin</option>
                    <option value="cajero">Cajero</option>
                  @else
                    <option value="admin">Admin</option>
                    <option value="cajero" selected>Cajero</option>
                  @endif
                </select>
                <button class="btn btn-warning mt-3"><i class="fa-solid fa-file-pen"></i></button>
                <a href="{{ route("usuarios") }}" class="btn btn-info mt-3">
                  <i class="fa-solid fa-rectangle-xmark"></i>
                </a>
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