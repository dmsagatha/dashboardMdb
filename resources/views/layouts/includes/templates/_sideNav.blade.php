<div class="sidebar-fixed position-fixed unique-color" id="sideNav">
  <nav class="sidebar-container">
  	<div class="text-center">
  	  <a class="logo-wrapper waves-effect" href="#">
  	    <img src="{{ asset('img/carita-feliz.gif') }}" class="img-fluid" alt="" style="width: 50%;">
  	  </a>
  	</div>

    <div class="list-group list-group-flush">
      <a href="#" class="list-group-item list-group-item-action active" aria-current="true"><i class="fab fa-android sidebar-icon"></i>Enlace 1</a>
      <a href="#" class="list-group-item list-group-item-action"><i class="fas fa-camera sidebar-icon"></i>Enlace 2</a>

      <div class="sidebar-dropdown">
        <a href="#" class="list-group-item list-group-item-action">
          <i class="fas fa-file-import text-success sidebar-icon"></i>Menú 1
          <i class="fas fa-chevron-down sidebar-icon sidebar-dropdown-icon"></i>
        </a>

        <div class="sidebar-dropdown-collapse">
  	      <div class="sidebar-dropdown-content">
            <a class="list-group-item list-group-item-action" href="#">&nbsp; &nbsp; Areas</a>
            <a class="list-group-item list-group-item-action" href="#">&nbsp; &nbsp; Categorías</a>
            <a class="list-group-item list-group-item-action" href="#">&nbsp; &nbsp; Productos</a>
          </div>
        </div>
      </div>

      <a href="#" class="list-group-item list-group-item-action"><i class="fas fa-code sidebar-icon"></i>Enlace 3</a>
      <a href="#" class="list-group-item list-group-item-action"><i class="fab fa-linux sidebar-icon"></i>Enlace 4</a>

      <div class="sidebar-dropdown">
        <a href="#" class="list-group-item list-group-item-action">
          <i class="fas fa-file-import text-success sidebar-icon"></i>Menú 2
          <i class="fas fa-chevron-down sidebar-icon sidebar-dropdown-icon"></i>
        </a>

        <div class="sidebar-dropdown-collapse">
  	      <div class="sidebar-dropdown-content">
            <a class="list-group-item list-group-item-action" href="#">&nbsp; &nbsp; Pedidos</a>
            <a class="list-group-item list-group-item-action" href="#">&nbsp; &nbsp; Facturas</a>
            <a class="list-group-item list-group-item-action" href="#">&nbsp; &nbsp; Cuentas de Cobro</a>
          </div>
        </div>
      </div>

      <a href="#" class="list-group-item list-group-item-action"><i class="fas fa-tasks sidebar-icon"></i>Enlace 5</a>
    </div>
  </nav>
</div>

<a href="#!" class="close sideNav-overlay"></a>