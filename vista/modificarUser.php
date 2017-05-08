<?php
    SESSION_START();
    if(!ISSET($_SESSION['usuario'])) {
        echo '<script> window.location="../index.php"; </script>';
    }
?>


    <!DOCTYPE html>

    <html lang="es">

    <head>
        <title>Soporte Tecnico</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="../css/bootstrap.min.css">
        <script src="../js/jquery.min.js"></script>
        <script src="../js/bootstrap.min.js"></script>
       
    </head>

    <body>
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
                        <li class="active"><a href="../vista/indexAdmin.php">Inicio</a></li>
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                        <li class="dropdown active">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">ABC Usuarios <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li class="active"><a href="../vista/registroNewUser.php">Agregar usuario</a></li>
                                <li><a href="../vista/bajaUser.php">Eliminar usuario</a></li>
                                <li><a href="../vista/modificarUser.php">Cambiar usuario</a></li>

                            </ul>
                        </li>
                        <li class="dropdown active">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">ABC Administradores <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="../vista/registroAdmin.php">Agregar administrador</a></li>
                                <li class="active"><a href="../vista/bajaAdmin.php">Eliminar administrador</a></li>
                                <li ><a href="../vista/modificarAdmin.php">Cambiar administrador</a></li>

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



        <!--Inicia datos-->

        <?php

            include("../operacion/conexion.php");
            $query="select * from usuario where tipo='user'";

            $fila=mysql_query($query);
	
        ?>
            <table class='table'>
                <tr>
                    <td>usuario</td>
                    <td>email</td>
                    <td>opcion</td>
                </tr>

                <?php
            while($fila_recorre=mysql_fetch_array($fila)) { 
                ?>
                    <tr>
                        <td>
                            <?php echo $fila_recorre['nombUsuario'];?>
                        </td>
                        <td>
                            <?php echo $fila_recorre['email']; ?>
                        </td>

                        <td>
                            <a class="myButton" href="../vista/edicionUsuario.php?id=<?php echo $fila_recorre['idUsuario']?>">Editar</a>
                        </td>
                    </tr>

                    <?php
        } 
        ?>
            </table>

            <!--Termina datos-->


    </body>

    </html>
