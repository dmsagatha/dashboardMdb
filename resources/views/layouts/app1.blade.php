
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="icon" href="{{ asset('img/favicon.ico') }}">

    <title>{{ config('app.name', 'Laravel SideNav') }}</title>
    
    <!-- Google Fonts Roboto -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" />

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <style>
      .active-nav {
        margin-left: 0;
      }

      .active-cont {
        margin-left: 250px;
      }
    </style>
  </head>
  <body>
    <header>
      @include('layouts.includes.templates._header')
    </header>

    {{-- <nav id="sidebarNav" class="navbar navbar-expand d-flex flex-column align-items-start">
      <a href="#" class="navbar-brand text-light mt-5">
        <div class="display-5 font-weight-bold">SideNav</div>
      </a>
      <ul class="navbar-nav d-flex flex-column mt-5 w-100">
        <li class="nav-item w-100">
          <a href="#" class="nav-link text-light pl-4">Inicio</a>
        </li>
      </ul>
    </nav> --}}

    <div class="container-fluid my-container">
      <div class="row">
        <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
          <div class="position-sticky pt-3">
            <ul class="nav flex-column">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">
                  <span data-feather="home"></span>
                  Dashboard
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">
                  <span data-feather="file"></span>
                  Orders
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">
                  <span data-feather="shopping-cart"></span>
                  Products
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">
                  <span data-feather="users"></span>
                  Customers
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">
                  <span data-feather="bar-chart-2"></span>
                  Reports
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">
                  <span data-feather="layers"></span>
                  Integrations
                </a>
              </li>
            </ul>

            <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
              <span>Saved reports</span>
              <a class="link-secondary" href="#" aria-label="Add a new report">
                <span data-feather="plus-circle"></span>
              </a>
            </h6>
            <ul class="nav flex-column mb-2">
              <li class="nav-item">
                <a class="nav-link" href="#">
                  <span data-feather="file-text"></span>
                  Current month
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">
                  <span data-feather="file-text"></span>
                  Last quarter
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">
                  <span data-feather="file-text"></span>
                  Social engagement
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">
                  <span data-feather="file-text"></span>
                  Year-end sale
                </a>
              </li>
            </ul>
          </div>
        </nav>
        <main class="mt-5">
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
      </div>
    </div>

    @include('layouts.includes.templates._footer')

    <!-- JavaScript -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <script>
      var menuBtn = document.querySelector('#menu-btn')
      var sidebarMenu = document.querySelector('#sidebarMenu')
      var container = document.querySelector(".my-container")

      menuBtn.addEventListener('click', () => {
        sidebarMenu.classList.toggle('active-nav')
        container.classList.toggle("active-cont")
      })
    </script>
  </body>
</html>