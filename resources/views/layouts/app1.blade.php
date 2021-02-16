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
      .navbar-brand {
        font-family: 'Font Awesome 5 Free';
        font-weight: 700;
        font-size: 1.5rem;
        cursor: pointer;
      }
      
      .navbar-brand:before {
        content: "\f03a";
      }

      .main-content {
        transition: 0.5s;
      }

      .preload {
        transition: none !important;
      }
      
      .nav__links {
        position: fixed;
        top: 60px;
        left: 0;
        z-index: 2;
        height: 100vh;
        width: 250px;
        background: #ffffff;
        transform: translateX(-250px);
        transition: transform 0.3s;
      }

      .nav--open .nav__links {
        transform: translateX(0);
        box-shadow: 0 0 15px rgba(0, 0, 0, 0.2);
      }

      .nav__link {
        display: flex;
        align-items: center;
        color: #666666;
        font-weight: bold;
        font-size: 14px;
        text-decoration: none;
        padding: 12px 15px;
        background: transform 0.2s;
      }

      .nav__link > i {
        margin-right: 15px;
      }

      .nav__link--active {
        color: #009578;
      }

      .nav__link--active,
      .nav__link:hover {
        background: #eeeeee;
      }

      .overlay {
        position: fixed;  /* Parte superior del contenido de la página */
        top: 0;
        left: 0;
        width: 100vw;      /* Ancho completo o 100% */
        height: 100vh;     /* Altura completa o 100% */
        background-color: rgba(0,0,0,0.5); /* Fondo negro con opacidad */
        backdrop-filter: blur(2px);
        visibility: hidden;   /* Oculto por defecto */
        opacity: 0;
        z-index: 1; /* Orden de pila en caso de que esté usando un orden diferente para otros elementos */
        cursor: pointer; /* Puntero al pasar el mouse */
        /* transition: opacity 0.3s; */
        transition: all 0.5s ease-in-out;
      }

      .nav--open .overlay {
        visibility: visible;
        opacity: 1;
      }
    </style>
  </head>
  <body class="preload">
    <header>
      @include('layouts.includes.templates._header')
    </header>
    
    <nav class="nav">
      <div class="nav__links">
        <a href="#" class="nav__link">
          <i class="fa fa-user"></i>Dashboard
        </a>
        <a class="nav__link nav__link--active" href="#">
          <i class="fa fa-user"></i>Projects
        </a>
        <a class="nav__link" href="#">
          <i class="fa fa-user"></i>Security
        </a>
        <a class="nav__link" href="#">
          <i class="fa fa-user"></i>History
        </a>
        <a class="nav__link" href="#">
          <i class="fa fa-user"></i>Profile
        </a>
      </div>
      <div class="overlay"></div>
    </nav>

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

    @include('layouts.includes.templates._footer')

    <!-- JavaScript -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- https://www.youtube.com/watch?v=yH7gkUNwDJY -->
    <script>
      window.addEventListener("load", () => {
        document.body.classList.remove("preload");
      });
      
      document.addEventListener("DOMContentLoaded", () => {
        const nav = document.querySelector(".nav");

        document.querySelector("#btnNav").addEventListener("click", () => {
          nav.classList.add("nav--open");
        });

        document.querySelector(".overlay").addEventListener("click", () => {
          nav.classList.remove("nav--open");
        });
      });
    </script>
  </body>
</html>