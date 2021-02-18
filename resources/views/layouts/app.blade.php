<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="icon" href="{{ asset('img/favicon.ico') }}">

    <title>{{ config('app.name', 'Laravel') }}</title>
    
    <!-- Google Fonts Roboto --><!-- Font Awesome -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" />

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <style>
      .container-for-admin {
        background-color: rgb(255, 255, 255) !important;
      }

      .container {
        margin-top: 4rem;
      }

      .nav-link:hover {
        color:white !important;
      }

      .bg-footer {
        background-color: #0288D1;
      }

      .unique-color {
        background-color: #3f729b !important;
      }

      .sidebar-fixed {
        position: fixed;
        height: 100vh;
        width: 80%;
        max-width: 300px;
        left: -300px;
        top: 0;
        background: linear-gradient(to right, #673AB7, #5E35B1);
        z-index: 1050;      /* Capa por encima */
        background-color: #fff;
        -webkit-transition: all 0.3s ease;
                transition: all 0.3s ease;
        -webkit-box-shadow: 0 2px 5px 0 rgba(0,0,0,.16),0 2px 10px 0 rgba(0,0,0,.12);
                box-shadow: 0 2px 5px 0 rgba(0,0,0,.16),0 2px 10px 0 rgba(0,0,0,.12);
      }

      /* https://www.youtube.com/watch?v=DvpSKoCyN5Q - 5' */
      /* https://akzhy.com/blog/sidenav-using-pure-css */
      /* ====================================
        Botón para desplegar el Menú lateral
      ======================================= */
      .toggle {
        display: flex;
        align-items: center;
        padding-top: .3rem;
        padding-bottom: .3rem;
        margin-right: 1rem;
        font-size: 2rem;
        text-decoration: none;
        white-space: nowrap;
        color: #fff;
        cursor: pointer;
      }

      .toggle:hover, .toggle:focus {
        color: rgb(236, 225, 225);
      }

      /* =================================
        Abrir/cerrar el navegador lateral
        Capa por encima de toda la página
      ==================================== */
      .sideNav-overlay {
        position: fixed;
        width: 100vw;
        height: 100vh;
        background: rgba(0, 0, 0, 0.7);
        left: 100%;
        top: 0;
        z-index: 998;
        cursor: default;
      }

      .sidebar-fixed:target {
        left: 0;
      }

      .sidebar-fixed:target+.sideNav-overlay {
        left: 0;
      }
    </style>
  </head>
  <body class="grey lighten-3">
    <div class="container-for-admin">
      <header>
        @include('layouts.includes.templates._header')
      </header>
      
      <div id="sideNav" class="sidebar-fixed position-fixed unique-color">
        <div class="text-center">
          <a class="logo-wrapper waves-effect" href="#">
            <img src="{{ asset('img/carita-feliz.gif') }}" class="img-fluid" alt="" style="width: 25%;">
          </a>
        </div>

        <ul class="list-group list-group-flush">
          <li class="list-group-item">Cras justo odio</li>
          <li class="list-group-item">Dapibus ac facilisis in</li>
          <li class="list-group-item">Morbi leo risus</li>
          <li class="list-group-item">Porta ac consectetur ac</li>
          <li class="list-group-item">Vestibulum at eros</li>
        </ul>
      </div>

      <a href="#!" class="close sideNav-overlay"></a>

      <main>
        <div class="container">
          <div class="row mb-4">
            <div class="col-md-6">
              <img src="https://mdbootstrap.com/img/Photos/Slides/img%20(15).jpg" class="img-fluid shadow-5 rounded" alt="">
            </div>
            <div class="col-md-6">
              <h1>Esta es la primera página</h1>
              <hr>
              <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorem nesciunt aperiam assumenda dolores expedita autem veritatis distinctio vitae, dignissimos optio vel, quidem corrupti corporis aspernatur a. Excepturi dolore itaque illo.
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorem nesciunt aperiam assumenda dolores expedita autem veritatis distinctio vitae, dignissimos optio vel, quidem corrupti corporis aspernatur a. Excepturi dolore itaque illo.
              </p>
            </div>
          </div>
      
          <div class="row mb-4">
            <div class="col-lg-4 col-md-12">
              <div class="card">
                <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
                  <img
                    src="https://mdbootstrap.com/img/new/standard/nature/111.jpg"
                    class="img-fluid"
                  />
                  <a href="#!">
                    <div class="mask" style="background-color: rgba(251, 251, 251, 0.15)"></div>
                  </a>
                </div>
                <div class="card-body">
                  <h5 class="card-title">Card title</h5>
                  <p class="card-text">
                    Some quick example text to build on the card title and make up the bulk of the
                    card's content.
                  </p>
                  <a href="#!" class="btn btn-primary">Button</a>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-6">
              <div class="card">
                <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
                  <img
                    src="https://mdbootstrap.com/img/new/standard/nature/112.jpg"
                    class="img-fluid"
                  />
                  <a href="#!">
                    <div class="mask" style="background-color: rgba(251, 251, 251, 0.15)"></div>
                  </a>
                </div>
                <div class="card-body">
                  <h5 class="card-title">Card title</h5>
                  <p class="card-text">
                    Some quick example text to build on the card title and make up the bulk of the
                    card's content.
                  </p>
                  <a href="#!" class="btn btn-primary">Button</a>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-6">
              <div class="card">
                <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
                  <img
                    src="https://mdbootstrap.com/img/new/standard/nature/113.jpg"
                    class="img-fluid"
                  />
                  <a href="#!">
                    <div class="mask" style="background-color: rgba(251, 251, 251, 0.15)"></div>
                  </a>
                </div>
                <div class="card-body">
                  <h5 class="card-title">Card title</h5>
                  <p class="card-text">
                    Some quick example text to build on the card title and make up the bulk of the
                    card's content.
                  </p>
                  <a href="#!" class="btn btn-primary">Button</a>
                </div>
              </div>
            </div>
          </div>
        </div><!-- Container -->
      </main>
    </div>

    @include('layouts.includes.templates._footer')

    <!-- JavaScript -->
    <script src="{{ asset('js/app.js') }}" defer></script>
  </body>
</html>