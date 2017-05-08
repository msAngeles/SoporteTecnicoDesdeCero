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
                                <li ><a href="../vista/registroNewUser.php">Agregar usuario</a></li>
                                <li><a href="../vista/bajaUser.php">Eliminar usuario</a></li>
                                <li class="active"><a href="../vista/modificarUser.php">Cambiar usuario</a></li>

                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">ABC Administradores <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="../vista/registroAdmin.php">Agregar administrador</a></li>
                                <li><a href="../vista/bajaAdmin.php">Eliminar administrador</a></li>
                                <li><a href="../vista/modificarAdmin.php">Cambiar administrador</a></li>

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
            $id= $_GET['id'];
            $query="select * from usuario where idUsuario='$id'";

            $fila=mysql_query($query);
	       
        while($fila_recorre=mysql_fetch_array($fila)) { 
                ?>

            <!--Inicia formulario Registro-->
            <div class="container">
                <div class="form-group centered-form">
                    <div class="col-xs-12 col-sm-8 col-sm-offset-2 col-md-offset-2">
                        <h3>Editar datos de usuario</h3>
                        <form role="form" action="../operacion/cambiarUser.php" method="post">
                            <div class="form-group">
                                <input type="text" name="id" class="form-control input-sm sr-only" value="<?php echo $fila_recorre['idUsuario'];?>" readonly>
                            </div>
                            <div class="form-group">
                                <label>usuario</label> <input type="text" name="usuario" class="form-control input-sm" value="<?php echo $fila_recorre['nombUsuario'];?>" required autofocus maxlength="15" pattern="[a-zA-Z a-zA-Z]*" title="solo puedes introducir letras">
                            </div>


                            <div class="form-group">
                                <label>Contraseña</label>
                                <div class="form-group">
                                    <input type="password" name="contra" class="form-control input-sm" placeholder="contraseña" required autofocus maxlength="16" value="<?php echo $fila_recorre['contra']; ?>">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12 col-xs-12 col-sm-6">
                                    <input type="submit" value="editar" class="btn btn-primary  btn-block input-lg">
                                </div>

                            </div>
                        </form>

                    </div>
                </div>
            </div>
            <!--Termina formulario Registro-->
            <?php
        } 
        ?>

    </body>

    </html>
