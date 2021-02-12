
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="icon" href="{{ asset('images/favicon.ico') }}">

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

    <div id="SideNavID" class="sideNavClose mt-5">
      <a class="nav-link" href=""><i class="fa mr-2 fa-home"></i>Inicio</a>
      <a class="nav-link" href=""><i class="fa mr-2 fa-home"></i>Inicio</a>
      <a class="nav-link" href=""><i class="fa mr-2 fa-home"></i>Inicio</a>
      <a class="nav-link" href=""><i class="fa mr-2 fa-home"></i>Inicio</a>
      <a class="nav-link" href=""><i class="fa mr-2 fa-home"></i>Inicio</a>
    </div>

    <div id="ContentOverlayID" class="ContentOverlayClose"></div>

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

    @include('layouts.includes.templates._footer')

    <!-- JavaScript -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="{{ asset('js/app.js') }}" defer></script>

    <script type="text/javascript">
      $('#NavMenuBar').click(function() {
        let SideNavID = $('#SideNavID');
        let ContentOverlayID = $('#ContentOverlayID');

        if (SideNavID.hasClass('sideNavClose')) {
          SideNavID.removeClass('sideNavClose')
          SideNavID.addClass('sideNavOpen')

          ContentOverlayID.removeClass('ContentOverlayClose')
          ContentOverlayID.addClass('ContentOverlay')
        } else {
          SideNavID.removeClass('sideNavOpen')
          SideNavID.addClass('sideNavClose')

          ContentOverlayID.removeClass('ContentOverlay')
          ContentOverlayID.addClass('ContentOverlayClose')
        }
      });

      $('#ContentOverlayID').click(function() {
        let SideNavID = $('#SideNavID');
        let ContentOverlayID = $('#ContentOverlayID');

        if (SideNavID.hasClass('sideNavClose')) {
          SideNavID.removeClass('sideNavClose')
          SideNavID.addClass('sideNavOpen')

          ContentOverlayID.removeClass('ContentOverlayClose')
          ContentOverlayID.addClass('ContentOverlay')
        } else {
          SideNavID.removeClass('sideNavOpen')
          SideNavID.addClass('sideNavClose')

          ContentOverlayID.removeClass('ContentOverlay')
          ContentOverlayID.addClass('ContentOverlayClose')
        }
      });
    </script>
  </body>
</html>