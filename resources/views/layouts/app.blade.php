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
    <link href="{{ asset('css/styles.css') }}" rel="stylesheet">

    <style>
      .sideNav {
        height: 100vh;
        width: 0;
        position: fixed;
        z-index: 10;
        top: 40px;
        left: 0;
        background-color: rgb(46, 218, 195);
        overflow-x: hidden;
        padding-top: 60px;
        transition: 0.5s;
      }

      .sideNav a {
        padding: 8px 8px 8px 32px;
        text-decoration: none;
        font-size: 25px;
        color: #000000;
        font-family: "Segoe UI", Tahoma, Geneva, Verdana, sans-serif;
        display: block;
        transition: 0.3s;
      }
      .sidenav a:hover {
        color: #f1f1f1;
      }
      .sideNav .closeBtn {
        position: absolute;
        top: 0;
        right: 25px;
        font-size: 36px;
        margin-left: 50px;
      }
      button {
        padding: 15px;
        background-color: rgb(0, 27, 145);
        color: rgb(255, 255, 255);
        font-size: 20px;
        border: none;
        border-radius: 2%;
      }
      .main-content {
        transition: 0.5s;
      }
    </style>
  </head>
  <body>
    <header>
      @include('layouts.includes.templates._header')
    </header>
    
    <nav class="sideNav">
      <a href="#" class="closeBtn">&times;</a>
      <a href="#">Login</a>
      <a href="#">Register</a>
      <a href="#">Home</a>
      <a href="#">About Us</a>
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

    <script>
      let openBtn = document.querySelector(".openSideNav");
      openBtn.addEventListener("click", () => {
        showNav();
      });

      let closeBtn = document.querySelector(".closeBtn");
        closeBtn.addEventListener("click", () => {
          hideNav();
      });

      function showNav() {
        document.querySelector(".sideNav").style.width = "300px";
        document.querySelector('.main-content').style.marginLeft = "300px";
      }

      function hideNav() {
        document.querySelector(".sideNav").style.width = "0";
        document.querySelector('.main-content').style.marginLeft = "0px";
      }
    </script>
  </body>
</html>