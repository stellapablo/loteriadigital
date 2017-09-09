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
                    <li> <a href="{{ url('sad-documento/create') }}"> Nuevo</a> </li>
                    <li> <a href="{{ url('sad-documento') }}">Documentos</a> </li>
                    <li> <a href="{{ url('sad-documento/generar-indice') }}">Generar Indice</a> </li>
                    <li> <a href="{{ url('sad-documento/busqueda') }}">Busqueda</a> </li>
                </ul>
            </li>
            <li class="active">
                <a href="#" class="waves-effect ">
                    <i class="fa fa-file-pdf-o"></i>
                    <span class="hide-menu"> Recursos Humanos</span>
                    <span class="fa arrow"></span>
                </a>
                <ul class="nav nav-second-level">
                    <li> <a href="{{ url('rrhh-documento/create') }}"> Nuevo</a> </li>
                    <li> <a href="{{ url('rrhh-documento') }}">Ultimos  Documentos</a> </li>
                    <li> <a href="{{ url('rrhh-documento') }}">Documentos por personal</a> </li>
                </ul>
            </li>

            <li>
                <a href="#" class="waves-effect">
                    <i class="fa fa-tags"></i>
                    <span class="hide-menu"> Ubicaciones
                    <span class="fa arrow"></span>
                </a>
                <ul class="nav nav-second-level">
                    <li> <a href="{{ url('ubicaciones/create') }}"> Nueva</a> </li>
                    <li> <a href="{{ url('ubicaciones') }}">Busqueda</a> </li>
                </ul>
            </li>
            <li>
                <a href="#" class="waves-effect ">
                    <i class="fa fa-file-archive-o "></i>
                    <span class="hide-menu"> Tipo de documentos
                    <span class="fa arrow"></span>
                </a>
                <ul class="nav nav-second-level">
                    <li> <a href="{{ url('tipo-documentos/create') }}"> Nuevo</a> </li>
                    <li> <a href="{{ url('tipo-documentos') }}">Busqueda</a> </li>
                </ul>
            </li>
            <li>
                <a href="#" class="waves-effect ">
                    <i class="fa fa-users "></i>
                    <span class="hide-menu">Personal
                    <span class="fa arrow"></span>
                </a>
                <ul class="nav nav-second-level">
                    <li> <a href="{{ url('personal/create') }}"> Nuevo</a> </li>
                    <li> <a href="{{ url('personal') }}">Registrados</a> </li>
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