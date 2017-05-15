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
        <?php
        include('../js/mensajes.js');
        ?>

    </head>

    <body>
        <!--Inicia Menu-->
        <?php
        include('menuAdmin.php');
        //include('menuAdmin2.php');
        ?>

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
