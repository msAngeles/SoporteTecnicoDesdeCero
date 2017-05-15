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
                <li class=""><a href="indexAdmin.php">Inicio</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <a href="#">
                    <div class="btn btn-primary navbar-brand" type="button">Messages
                        <span class="badge">   
                                 <div id="borde">
                                    <div id="recargado">0</div>
                                 </div>
                           </span>
                    </div>
                </a>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">ABC Usuarios <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="../vista/registroNewUser.php">Agregar <span class="pull-right hidden-xs showopacity glyphicon glyphicon-plus"></span></a>
                        </li>
                        <li>
                            <a href="../vista/bajaUser.php">Eliminar <span class="pull-right hidden-xs showopacity glyphicon glyphicon-remove"></span></a>
                        </li>
                        <li>
                            <a href="../vista/modificarUser.php">Cambiar <span  class="pull-right hidden-xs showopacity glyphicon glyphicon-pencil"></span></a>
                        </li>

                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">ABC Administradores <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="../vista/registroAdmin.php">Agregar <span class="pull-right hidden-xs showopacity glyphicon glyphicon-plus"></span></a></li>
                        <li><a href="../vista/bajaAdmin.php">Eliminar <span class="pull-right hidden-xs showopacity glyphicon glyphicon-remove"></span></a></li>
                        <li><a href="../vista/modificarAdmin.php">Cambiar <span  class="pull-right hidden-xs showopacity glyphicon glyphicon-pencil"></span></a></li>

                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                        <?php
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
<!--Termina Menu-->
