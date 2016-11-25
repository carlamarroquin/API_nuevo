 <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu">
        <li class="active treeview">
          <a href="#">
            <i class="fa fa-dashboard"></i> <span>Servicios de A/C</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
          <li class="active"><a href="{{route('nueva.hoja')}}"><i class="fa fa-circle-o"></i>Servicios Prestados</a></li>
            <li class="active"><a href="{{route('nueva.hoja')}}"><i class="fa fa-circle-o"></i>Nueva Hoja de Servicio</a></li>
          </ul>
        </li>
        <li class="active treeview">
        <a href="#">
            <i class="fa fa-angle-left"></i> <span>Catálogos</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
               
            <li class="active"><a href="{{route('hojatecnicos')}}"><i class="fa fa-circle-o"></i>Nuevo Técnico</a></li>

            <li class="active"><a href="{{route('hojacliente')}}"><i class="fa fa-circle-o"></i>Nuevo Cliente</a></li>     
          </ul>
        </li>
        <li class="active treeview">
        <a href="#">
            <i class="fa fa-angle-left"></i> <span>Reportes</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
               
            <li class="active"><a href="#"><i class="fa fa-circle-o"></i>Ver Listado de Hojas de Servicios</a></li>

            <li class="active"><a href="#"><i class="fa fa-circle-o"></i>Ver Listado de Hojas por Cliente</a></li>     
          
            <li class="active"><a href="#"><i class="fa fa-circle-o"></i>Ver Listado de Hojas por Tecnico</a></li>

            <li class="active"><a href="#"><i class="fa fa-circle-o"></i>Ver Listado de Observaciones</a></li>
          </ul>
        </li>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>