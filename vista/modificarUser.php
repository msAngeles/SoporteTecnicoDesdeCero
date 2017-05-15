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
