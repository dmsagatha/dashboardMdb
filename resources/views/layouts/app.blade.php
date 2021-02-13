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
  </head>
  <body>
    <header>
      @include('layouts.includes.templates._header')
    </header>

    <div class="container-fluid">
      <div class="row">
        <div class="col-2 sidebar" id="sideLateral">
          <ul class="list-group list-group-flush">
            <li class="list-group-item active" aria-current="true">Dashboard</li>
            <li class="list-group-item">Inicio</li>
            <li class="list-group-item">Usuarios</li>
            <li class="list-group-item">Contacto</li>
            <li class="list-group-item">
              <a href="#" class="nav-link dropdown-toggle text-light pl-4" id="navbarDropdown" role="button" data-mdb-toggle="dropdown" aria-expanded="false">Configuraciones</a>
              <ul class="dropdown-menu w-100" aria-labelledby="navbarDropdown">
                <li><a class="dropdown-item text-light pl-4 p-2" href="#">Action</a></li>
                <li><a class="dropdown-item text-light pl-4 p-2" href="#">Another action</a></li>
                <li><hr class="dropdown-divider" /></li>
                <li>
                  <a class="dropdown-item text-light pl-4 p-2" href="#">Something else here</a>
                </li>
              </ul>
            </li>
            <li class="list-group-item">Inicio</li>
            <li class="list-group-item">Usuarios</li>
            <li class="list-group-item">Contacto</li>
            <li class="list-group-item">Configuraciones</li>
            <li class="list-group-item">Inicio</li>
            <li class="list-group-item">Usuarios</li>
            <li class="list-group-item">Contacto</li>
            <li class="list-group-item">configuraciones</li>
            <li class="list-group-item">Inicio</li>
            <li class="list-group-item">Usuarios</li>
            <li class="list-group-item">Contacto</li>
            <li class="list-group-item">Configuraciones</li>
          </ul>
        </div>

        <div class="col-10 main-content mt-5 my-container">
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
        </div>
      </div>
    </div>

    {{-- <main class="mt-5">
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
    </main> --}}

    @include('layouts.includes.templates._footer')

    <!-- JavaScript -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <script>
      var menuBtn = document.querySelector("#menuBtn")
      var sideLateral = document.querySelector("#sideLateral")
      var container = document.querySelector(".my-container")
      menuBtn.addEventListener("click", () => {
        sideLateral.classList.toggle("active-nav")
        container.classList.toggle("active-cont")
      })
    </script>
  </body>
</html>