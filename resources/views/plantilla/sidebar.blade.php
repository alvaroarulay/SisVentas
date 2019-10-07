<div class="app-sidebar__overlay" data-toggle="sidebar"></div>
    <aside class="app-sidebar">
      <div class="app-sidebar__user"><img class="app-sidebar__user-avatar" src="https://s3.amazonaws.com/uifaces/faces/twitter/jsa/48.jpg" alt="User Image">
        <div>
          <p class="app-sidebar__user-name">{{ Auth::user()->usuario }} </p>
        </div>
      </div>
      <ul class="app-menu">
        <li @click="menu=0"><a class="app-menu__item" href="#><i class="app-menu__icon fa fa-dashboard"></i><span class="app-menu__label">Escritorio</span></a></li>
        <li @click="menu=1"><a class="app-menu__item" href="#"><i class="icon fa fa-wrench"></i><span class="app-menu__label">&nbsp;&nbsp;&nbsp;Mantenimiento</span></a></li>
        <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-archive"></i><span class="app-menu__label">Almacen</span><i class="treeview-indicator fa fa-angle-right"></i></a>
          <ul class="treeview-menu">
            <li @click="menu=2"><a class="treeview-item" href="#"><i class="icon fa fa-circle-o"></i> Categorias</a></li>
            <li @click="menu=3"><a class="treeview-item" href="#"><i class="icon fa fa-circle-o"></i> Articulos</a></li>
          </ul>
        </li>
        <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-shopping-cart"></i><span class="app-menu__label">Compras</span><i class="treeview-indicator fa fa-angle-right"></i></a>
          <ul class="treeview-menu">
            <li @click="menu=4"><a class="treeview-item" href="#"><i class="icon fa fa-circle-o"></i> Ingresos</a></li>
            <li @click="menu=5"><a class="treeview-item" href="#"><i class="icon fa fa-circle-o"></i> Provedores</a></li>
          </ul>
        </li>
        <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-money"></i><span class="app-menu__label">Ventas</span><i class="treeview-indicator fa fa-angle-right"></i></a>
          <ul class="treeview-menu">
            <li @click="menu=6"><a class="treeview-item" href="#"><i class="icon fa fa-circle-o"></i> Ventas</a></li>
            <li @click="menu=7"><a class="treeview-item" href="#"><i class="icon fa fa-circle-o"></i> Clientes</a></li>
          </ul>
        </li>
        <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-sign-in"></i><span class="app-menu__label">Acceso</span><i class="treeview-indicator fa fa-angle-right"></i></a>
          <ul class="treeview-menu">
            <li @click="menu=8"><a class="treeview-item" href="#"><i class="icon fa fa-circle-o"></i> Usuarios</a></li>
            <li @click="menu=9"><a class="treeview-item" href="#"><i class="icon fa fa-circle-o"></i> Roles</a></li>
          </ul>
        </li>
        <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-bar-chart"></i><span class="app-menu__label">Reportes</span><i class="treeview-indicator fa fa-angle-right"></i></a>
          <ul class="treeview-menu">
            <li @click="menu=10"><a class="treeview-item" href="#"><i class="icon fa fa-circle-o"></i> Reporte de Ingresos</a></li>
            <li @click="menu=11"><a class="treeview-item" href="#"><i class="icon fa fa-circle-o"></i> Reporte de Ventas</a></li>
          </ul>
        </li>
        <li @click="menu=12"><a class="app-menu__item" href="#"><i class="app-menu__icon fa fa-file-pdf-o"></i><span class="app-menu__label">Ayuda </span></a></li>
        </li>
        <li @click="menu=12"><a class="app-menu__item" href="#"><i class="app-menu__icon fa fa-info"></i><span class="app-menu__label"> Acerca de...</span></a></li>
        </li>
       </ul>
    </aside>