<div id="sideNav" class="sidebar-fixed position-fixed unique-color">
  <div class="text-center">
    <a class="logo-wrapper waves-effect" href="#">
      <img src="{{ asset('img/carita-feliz.gif') }}" class="img-fluid" alt="" style="width: 50%;">
    </a>
  </div>

  <ul class="list-group list-group-flush">
    <li class="list-group-item list-group-item-action">Lista 1</li>
    <li class="list-group-item list-group-item-action">Lista 2</li>
    <li class="list-group-item list-group-item-action">Lista 3</li>
    <li class="list-group-item list-group-item-action">Lista 4</li>
    <li class="list-group-item list-group-item-action">Lista 5</li>
  </ul>

  <div class="list-group list-group-flush">
    <a href="#" class="list-group-item active waves-effect">
      <i class="fas fa-chart-pie mr-3"></i>Panel de Control
    </a>
    <a href="#" class="list-group-item list-group-item-action waves-effect">
      <i class="fas fa-user mr-3"></i>Perfil
    </a>

    <div class="sidebar-dropdown">
      <div class="sidebar-dropdown">
        <a 
          href="#" 
          class="list-group-item list-group-item-action waves-effect collapsed" 
          data-toggle="collapse" 
          data-target="#reports" 
          aria-expanded="false">
          <i class="fas fa-file-import green-text mr-3"></i>Reportes
        </a>
      </div>
      <div class="collapse" id="reports" data-parent="#sideNav">
        <a class="list-group-item list-group-item-action waves-effect" href="#">
          <i class="fas fa-desktop mr-2 ml-3"></i>Areas
        </a>
      </div>
    </div><!-- sidebar-dropdown reports -->

    <div class="sidebar-dropdown">
      <div class="sidebar-dropdown">
        <a 
          href="#" 
          class="list-group-item list-group-item-action waves-effect collapsed" 
          data-toggle="collapse" 
          data-target="#imports" 
          aria-expanded="false">
          <i class="fas fa-flist-ul text-danger mr-3"></i>Importaciones
        </a>
      </div>
      <div class="collapse" id="imports" data-parent="#sideNav">
        <a class="list-group-item list-group-item-action waves-effect" href="#">
          <i class="fas fa-desktop mr-2 ml-3"></i>Areas
        </a>
      </div>
    </div><!-- sidebar-dropdown imports -->
  </div>
</div>

<a href="#!" class="close sideNav-overlay"></a>