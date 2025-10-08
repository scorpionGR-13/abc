@extends('layouts.main')
@section('titulo', $titulo)
@section('contenido')
<main id="main" class="main">
    <div class="pagetitle">
      <h1>usuarios</h1>
      <section class="section">
        <div class="row">
          <div class="col-lg-12">
  
            <div class="card">
              <div class="card-body">
  
                <a href="{{route('usuarios.create')}}" class="btn btn-primary"><i class="fa-solid fa-circle-plus"></i> Agregar Nuevo usuario</a>
                <!-- Table with stripped rows -->
                <table class="table datatable">
                  <thead>
                      <tr>
                        
                        <th>email </th>
                        <th>name</th>
                        <th>rol</th>
                        <th>password</th>
                        <th>activo</th>
                        <th>editar</th>
                      </tr>
                      
                  </thead>
                  <tbody id="tbody-usuarios">
                    <!--COMTENIDO DE LA TABLA-LLAMANDO-->
                    @include('modules.usuarios.tbody');
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
@include('modules.usuarios.modal_cambiar_password')
@endsection
@push('scripts')
    <script>

      function recargar_tbody(){
        $.ajax({
          type : "GET",
          url : "{{ route('usuarios.tbody') }}",
          success : function(respuesta){
            console.log(respuesta);
          } 
        });
      }

      function cambiar_estado(id, estado) {
        $.ajax({
          type: "GET",
          url : "cambiar-estado/" + id + "/" + estado,
          success: function(respuesta){
            if(respuesta == 1){
              Swal.fire({
                title: 'Exito!',
                text: 'Cambio de estado exitoso!',
                icon: 'success',
                confirmButtonText:'Aceptar'
              });
              recargar_tbody();
            } else {
              Swal.fire({
                title: 'Fallo!',
                text: 'No se llevo a cabo el cambio!',
                icon: 'error',
                confirmButtonText:'Aceptar'
              });
            }
          }
        });
      }

      function agregar_id_usuario(id) {
        $('#id_usuario').val(id);
      }

      function cambio_password(){
        let id = $('#id_usuario').val();
        let password = $('#password').val();

        $.ajax({
          type: "GET",
          url: "cambiar-password/" + id + "/" + password,
          success :function(respuesta){
            if(respuesta == 1){
               Swal.fire({
                title: 'Exito!',
                text: 'Cambio de password exitoso!',
                icon: 'success',
                confirmButtonText:'Aceptar'
              });
              $('#cambiar_password').modal('hide');
              $('#frmPassword')[0].reset();
            } else {
              Swal.fire({
                title: 'Fallo!',
                text: 'Cambio de password no exitoso!',
                icon: 'error',
                confirmButtonText:'Aceptar'
              });
            }
          }
        });

        return false;
      }

      $(document).ready(function(){
        $('.form-check-input').on("change", function(){
          let id = $(this).attr("id");
          let estado = $(this).is(":checked") ? 1 : 0;
          cambiar_estado(id, estado);
        });
      });
    </script>
@endpush