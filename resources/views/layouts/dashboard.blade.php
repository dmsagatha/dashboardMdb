
@extends('layouts.master')

@section('title', 'Dashboard')

@section('content')   
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
@endsection