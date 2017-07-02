<div class="navbar-default sidebar" role="navigation">
    <div class="sidebar-nav navbar-collapse slimscrollsidebar">
        <ul class="nav" id="side-menu">
            <li class="sidebar-search hidden-sm hidden-md hidden-lg">
                <!-- input-group -->
                <div class="input-group custom-search-form">
                    <input type="text" class="form-control" placeholder="Search..."> <span class="input-group-btn">
            <button class="btn btn-default" type="button"> <i class="fa fa-search"></i> </button>
            </span> </div>
                <!-- /input-group -->
            </li>
            <li class="active">
                <a href="#" class="waves-effect ">
                    <i class="fa fa-file-text-o"></i>
                    <span class="hide-menu"> Secretaria ADM
                    <span class="fa arrow"></span>
                </a>
                <ul class="nav nav-second-level">
                    <li> <a href="{{ url('sad-documentos/create') }}"> Nuevo</a> </li>
                    <li> <a href="{{ url('sad-documentos/busqueda') }}">Busqueda</a> </li>
                    <li> <a href="{{ url('sad-documentos/grid') }}">Grilla</a> </li>
                </ul>
            </li>
            <li>
                <a href="#" class="waves-effect">
                    <i class="fa fa-tags"></i>
                    <span class="hide-menu"> Oficinas
                    <span class="fa arrow"></span>
                </a>
                <ul class="nav nav-second-level">
                    <li> <a href="{{ url('oficinas/create') }}"> Nueva</a> </li>
                    <li> <a href="{{ url('oficinas') }}">Busqueda</a> </li>
                </ul>
            </li>
            <li>
                <a href="#" class="waves-effect ">
                    <i class="fa fa-file-archive-o "></i>
                    <span class="hide-menu"> Tipo de documento
                    <span class="fa arrow"></span>
                </a>
                <ul class="nav nav-second-level">
                    <li> <a href="{{ url('tipos/create') }}"> Nuevo</a> </li>
                    <li> <a href="{{ url('tipos') }}">Busqueda</a> </li>
                </ul>
            </li>
            <li>
                <a href="#" class="waves-effect ">
                    <i class="fa fa-users "></i>
                    <span class="hide-menu">Usuarios
                    <span class="fa arrow"></span>
                </a>
                <ul class="nav nav-second-level">
                    <li> <a href="{{ url('usuarios/registrar') }}"> Nuevo</a> </li>
                    <li> <a href="{{ url('usuarios/registrar') }}">Roles</a> </li>
                </ul>
            </li>
        </ul>
    </div>
</div>