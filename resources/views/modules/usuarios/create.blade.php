@extends('layouts.main')
@section('titulo', $titulo)
@section('contenido')

<main id="main" class="main">

    <div class="pagetitle">
      <h1>Agregar nuevo usuario</h1>

    </div><!-- End Page Title -->


    <section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <!--BOTON AGREGAR-->
              <form action="{{ route("usuarios.store") }}" method="POST">
                @csrf
                <label for="name">Nombre del usuario</label>
                <input type="text" class="form-control" required name="name" id="name">
                <label for="email">Email</label>
                <input type="text" name="email" id="email" class="form-control" required>
                <label for="password">Password</label>
                <input type="password" name="password" id="password" 
                class="form-control" required>
                <label for="rol">Rol de usuario</label>
                <select name="rol" id="rol" class="form-select">
                  <option value="">Selecciona el rol</option>
                  <option value="admin">Admin</option>
                  <option value="cajero">Cajero</option>
                </select>
                <button class="btn btn-primary mt-3"><i class="fa-solid fa-address-card"></i> Guardar</button>
                <a href="{{ route("usuarios") }}" class="btn btn-info mt-3">
                  <i class="fa-solid fa-rectangle-xmark"></i> Cancelar
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