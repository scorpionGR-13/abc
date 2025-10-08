@extends('layouts.main')
<main id="main" class="main">

    <div class="pagetitle">
      <h1>Tienda</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Menu</a></li>
          <li class="breadcrumb-item active">Tienda</li>
        </ol>
      </nav>
    </div>

    <section class="section dashboard">
      <div class="row">

        <div class="col-lg-8">
          <div class="row">

            <!-- VENTAS -->
            <div class="col-xxl-4 col-md-6">
              <div class="card info-card sales-card">
                <div class="card-body">
                  <h5 class="card-title">Ventas <span>| Dias</span></h5>

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi bi-cart"></i>
                    </div>
                    <div class="ps-3">
                      <h6>145</h6>
                      <span class="text-success small pt-1 fw-bold">12%</span> <span class="text-muted small pt-2 ps-1">incremento</span>

                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- CATEGORIAS -->
            <div class="col-xxl-4 col-md-6">
              <div class="card info-card revenue-card">
                <div class="card-body">
                  <h5 class="card-title">Catgorias <span>| Productos</span></h5>
                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="fa-solid fa-layer-group"></i>
                    </div>
                    <div class="ps-3">
                      <h6>264 p</h6>
                      <span class="text-success small pt-1 fw-bold">8%</span> <span class="text-muted small pt-2 ps-1">incremento</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>

          </div>
        </div>
    
        <div class="col-lg-8">
          <div class="row">
              <!-- PRODUCTOS -->
              <div class="col-xxl-4 col-md-6">
                <div class="card info-card sales-card">
                  <div class="card-body">
                    <h5 class="card-title">Productos <span>| Precios</span></h5>
                    <div class="d-flex align-items-center">
                      <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                        <i class="fa-brands fa-product-hunt"></i>
                      </div>
                      <div class="ps-3">
                        <h6>300</h6>
                        <span class="text-success small pt-1 fw-bold">12%</span> <span class="text-muted small pt-2 ps-1">incremento</span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- CLIENTES -->
              <div class="col-xxl-4 col-md-6">
                <div class="card info-card revenue-card">
                  <div class="card-body">
                    <h5 class="card-title">Clientes <span>| Cantidad</span></h5>
                    <div class="d-flex align-items-center">
                      <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                        <i class="fa-brands fa-intercom"></i>
                      </div>
                      <div class="ps-3">
                        <h6>3,264</h6>
                        <span class="text-success small pt-1 fw-bold">8%</span> <span class="text-muted small pt-2 ps-1">incremento</span>

                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- USUARIOS -->
              <div class="col-xxl-4 col-xl-12">
                <div class="card info-card customers-card">
                  <div class="card-body">
                    <h5 class="card-title">Usuarios <span>| frecuentes</span></h5>

                    <div class="d-flex align-items-center">
                      <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                        <i class="bi bi-people"></i>
                      </div>
                      <div class="ps-3">
                        <h6>1244</h6>
                        <span class="text-danger small pt-1 fw-bold">12%</span> <span class="text-muted small pt-2 ps-1">incremento</span>
                      </div>
                    </div>
                  </div>
                </div>

              </div>

          </div>

        </div>
    </section>

  </main><!-- End #main -->