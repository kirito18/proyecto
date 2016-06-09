
   

   
   
   <nav class="navbar navbar-default">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            
            <ul class="nav navbar-nav">
            
            <li><a class="navbar-brand" href="/">&nbsp;&nbsp;Sistema de Gestión Academica PIOXII</a></li>
            </ul>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="app-navbar-collapse">
                <!-- Left Side Of Navbar -->
                <ul class="nav navbar-nav">
                    
                </ul>

                <!-- Right Side Of Navbar -->
                <ul class="nav navbar-nav navbar-right">
                    <!-- Authentication Links -->
                   @if (Auth::guest())
                        <li><a href="{{ url('/login') }}">Acceso</a></li>
                        
                    @else
                        <ul class="nav navbar-nav">
                        
                        <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Usuarios <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                       <li class="active"><a href="{{route('admin.users.index')}}">Usuarios<span class="sr-only">(current)</span></a></li>
                        <li><a href="{{route('admin.users.create')}}">Registrar Nuevo Usuario</a></li>
                    </ul>
                {{--ADD ROUTE PARA REDIRECCIONAR--}}
                

                <li> <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Malla Curricular<span class="caret"></span></a>
                    
                
                <ul class="dropdown-menu">
                        <li><a href="#">Crear</a></li>
                        <li><a href="#">Modificar</a></li>
                        <li><a href="#">Eliminar</a></li>
                        
                        
                    </ul>
                </li>

                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Lista interna <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="#">Crear</a></li>
                        <li><a href="#">Eliminar</a></li>
                        <li><a href="#">Actualizar</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="#">Titulos Docentes</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="#">Datos Docentes</a></li>
                    </ul>
                </li>
            </ul>
                       
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>
                            
                            <ul class="dropdown-menu" role="menu">
                               
                                <li><a href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i>Salir</a></li>
                                
                            </ul>
                            
                        </li>
                    @endif
                </ul>
            </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>