<aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

      <li class="nav-item">
        <a class="nav-link " href="{{ route('home') }}">
          <i class="bi bi-grid"></i>
          <span>Inicio</span>
        </a>
      </li><!-- End Dashboard Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#components-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-menu-button-wide"></i><span>Ventas</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="components-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="{{ route("ventas_nueva") }}">
              <i class="bi bi-circle"></i><span>Vender productos</span>
            </a>
          </li>
          <li>
            <a href="{{ route("detalles_nueva") }}">
              <i class="bi bi-circle"></i><span>Colsultyar Ventas</span>
            </a>
          </li>
          
        </ul>
      </li><!-- End Components Nav -->

      <!-- End Icons Nav -->

      <li class="nav-heading">Categorias</li>

      <li class="nav-item">
        <a class="nav-link collapsed" href="{{ route("categori") }}">
          <i class="bi bi-person"></i>
          <span>Categorias</span>
        </a>
      </li><!-- End Profile Page Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="{{ route("producto") }}">
          <i class="bi bi-question-circle"></i>
          <span>Productos</span>
        </a>
      </li><!-- End F.A.Q Page Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="{{ route("cliente") }}">
          <i class="bi bi-envelope"></i>
          <span>Clientes</span>
        </a>
      </li><!-- End Contact Page Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="{{ route("usuarios") }}">
          <i class="bi bi-card-list"></i>
          <span>Usuarios</span>
        </a>
      </li><!-- End Register Page Nav -->

      <!-- End Blank Page Nav -->

    </ul>

  </aside>