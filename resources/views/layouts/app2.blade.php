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
      * {
        margin: 0;
        padding: 0;
        text-decoration: mone;
      }
      /* .sidebar {
        position: fixed;
        left: -240px;
        width: 240px;
        height: 100vh;
        background: #1e1e1e;
        transition: all .5s ease;
      } */
      .sidebar {
        position: fixed;
        height: 100vh;
        width: 0;
        top: 70px;
        background: #1e1e1e;
        transition: all .5s ease;
        overflow: hidden;
        z-index: 1050;      /* Capa por encima */
        -webkit-box-shadow: 0 2px 5px 0 rgba(0,0,0,.16),0 2px 10px 0 rgba(0,0,0,.12);
                box-shadow: 0 2px 5px 0 rgba(0,0,0,.16),0 2px 10px 0 rgba(0,0,0,.12);
      }
      .sidebar.active {
        width: 300px;
      }
      .sidebar header {
        color: white;
        font-size: 28px;
        line-height: 70px;
        text-align: center;
        background: #1b1b1b;
        user-select: none;
        font-family: 'Montserrat', sans-serif;
      }
      .sidebar a {
        display: block;
        color: white;
        height: 50px;
        width: 100%;
        line-height: 50px;
        padding-left: 30px;
        border-bottom: 1px solid rgba(255, 255, 255, .1);
        border-top: 1px solid black;
        border-left: 5px solid transparent;
        box-sizing: border-box;
        transition: all .5s ease;
        font-family: 'Open Sans', sans-serif;
      }
      .sidebar a:hover, .sidebar a.active {
        border-left: 5px solid #b93632;
        color: #b93632;
      }
      .sidebar a i {
        font-size: 23px;
        margin-right: 16px;
      }
      .sidebar a span {
        letter-spacing: 1px;
        text-transform: uppercase;
      }
      #check {
        display: none;
      }
      label #btn, label #cancel {
        position: absolute;   /* Se super ponen */
        cursor: pointer;
        background: #262626;
        height: 45px;
        width: 45px;
        text-align: center;
        line-height: 45px;
        color: white;
        font-size: 29px;
        border-radius: 5px;
        margin: 15px 30px;
        border: 1px solid #262626;
        transition: all .5s ease;
      }
      label #cancel {
        opacity: 0;
        visibility: hidden;
      }
      #check:checked ~ label #btn {
        margin-left: 245px;
        opacity: 0;
        visibility: hidden;
      }
      #check:checked ~ label #cancel {
        margin-left: 245px;
        opacity: 1;
        visibility: visible;
      }
      #check:checked ~ .sidebar{
        left: 0;
      }

      /* https://www.youtube.com/watch?v=c5kWKnESUjY&feature=emb_logo
      https://www.codingnepalweb.com/2020/04/responsive-sidebar-menu-html-css.html */

      /* https://www.youtube.com/watch?v=DvpSKoCyN5Q - 5' */
      /* .toggle {
        position: absolute;
        top: 0;
        left: 60px;
        width: 60px;
        height: 60px;
        background: #330748;
        cursor: pointer;
      }
      .toggle:hover {
        background: #ea1d63;
      } 
      .toggle:before {
        content: '\f0c9';
        font-family: 'Font Awesome 5 Free';
        font-weight: 900;
        font-size: 2rem;
        width: 100%;
        height: 100%;
        line-height: 60px;
        text-align: center;
        color: #fff;
      }
      .toggle:hover:before {
        content: '\f00d';
      } */
      .toggle {
        display: flex;
        align-items: center;
        padding-top: .3rem;
        padding-bottom: .3rem;
        margin-right: 1rem;
        font-size: 1.25rem;
        text-decoration: none;
        white-space: nowrap;
        color: #fff;
        cursor: pointer;
      }
      .toggle:hover, .toggle:focus {
        color: #fff;
      } 
      .toggle:before {
        content: '\f0c9';
        font-family: 'Font Awesome 5 Free';
        font-weight: 900;
        font-size: 2rem;
      }
      .toggle:hover:before {
        content: '\f00d';
      }

      /* .navbar-brand {
        cursor: pointer;
      }
      .navbar-brand:before {
        content: '\f0c9';
        font-family: 'Font Awesome 5 Free';
        font-weight: 900;
        font-size: 2rem;
      }
      .navbar-brand:hover:before {
        content: '\f00d';
      } */


      /* =================================
        Capa por encima de toda la página
      ==================================== */
      .overlay {
        display: none;
        position: fixed;
        width: 100vw;
        height: 100vh;
        background: rgba(0, 0, 0, 0.7);
        z-index: 998;
        opacity: 0;
        transition: all 0.5s ease-in-out;
      }

      .overlay.active {
        display: block;
        opacity: 1;
      }


      /* https://codepen.io/jeffersonlam/pen/waxxeR */
      .sidenav-active .toggle  {
        background-color: rgba(0,0,0,0.3);
        position: fixed;
        top: 0;
        bottom: 0;
        left: 0;
        right: 0;
        height: 100vh;
        z-index: 5000;
        transition: background-color .3s, transform 0.3s;
      }
      /* c. Prevent body scroll */
      .noscroll {
        position: relative;
        overflow: hidden;
      }
    </style>
  </head>
  <body class="preload">
    <header>
      @include('layouts.includes.templates._header')
    </header>
    
    <input type="checkbox" id="check">
    <label for="check">
      <i class="fas fa-bars" id="btn"></i>
      <i class="fas fa-times" id="cancel"></i>
    </label>

    <div class="sidebar">
      <header>Mi Menú</header>
      <a href="#" class="active"><i class="fas fa-qrcode"></i><span>Dashboard</span></a>
      <a href="#"><i class="fas fa-link"></i><span>Inicio</span></a>
      <a href="#"><i class="fas fa-stream"></i><span>Usuarios</span></a>
      <a href="#"><i class="fas fa-calendar"></i><span>Productos</span></a>
      <a href="#"><i class="far fa-question-circle"></i><span>Pedidos</span></a>
      <a href="#"><i class="fas fa-sliders-h"></i><span>Facturas</span></a>
      <a href="#"><i class="far fa-envelope"></i><span>Configuraciones</span></a>
    </div>

    <main class="main-content mt-5">
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

    <div class="overlay"></div>

    @include('layouts.includes.templates._footer')

    <!-- JavaScript -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <script>
      function toggleMenu() {
        let navigation = document.querySelector('.sidebar');
        let toggle = document.querySelector('.toggle');

        navigation.classList.toggle('active');
        toggle.classList.toggle('active');
      }
    </script>
  </body>
</html>