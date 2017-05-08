 <!--Inicia Menu-->
    <nav class="navbar navbar-inverse">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
                <a class="navbar-brand" href="#">Soporte Tecnico</a>
            </div>
            <div class="collapse navbar-collapse" id="myNavbar">
                <ul class="nav navbar-nav">
                    <li class="active"><a href="index.php">Inicio</a></li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">ABC Usuarios <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="../vista/registroNewUser.php">Agregar usuario</a></li>
                            <li><a href="#">Eliminar usuario</a></li>
                            <li><a href="#">Cambiar usuario</a></li>

                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">ABC Administradores <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="../vista/registroAdmin.php">Agregar administrador</a></li>
                            <li><a href="#">Eliminar administrador</a></li>
                            <li><a href="#">Cambiar administrador</a></li>

                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><?php
                         echo $_SESSION['usuario'];   
                        ?>
                                <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="#">Mi cuenta</a></li>
                            <li><a href="../operacion/logout.php">Salir</a></li>

                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>