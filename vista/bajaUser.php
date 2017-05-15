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
        <script language="javascript">
            function recargar() {
                $("#recargado").fadeOut(function() {
                    $.post("../recargarDivsContmpo/miscript.php", {}, function(data) {
                        $("#recargado").html(data).fadeIn();
                    });
                });
            }

            timer = setInterval("recargar()", 0);

        </script>
        <?php
        include('../js/mensajes.js');
        ?>

    </head>

    <body>
        <?php
        include('menuAdmin.php');
        //include('menuAdmin2.php');
        ?>




            <!--Inicia datos-->

            <?php

            include("../operacion/conexion.php");
            $query="select * from usuario where tipo='user'";

            $fila=mysql_query($query);
	
        ?>
                <div class="container-fluid">
                    <h3>Eliminar usuarios</h3>

                    <table class='table'>
                        <tr>
                            <td>usuario</td>
                            <td>nombre</td>
                            <td>Dar de baja</td>
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
                                    <a id="fo3" class="myButton" title="Eliminar toda esta línea" href="../operacion/eliminarUser.php?id=<?php echo $fila_recorre['idUsuario']?>">Eliminar</a>
                                </td>
                            </tr>

                            <?php
        } 
        ?>
                    </table>


                </div>
                <!--Termina datos-->


    </body>

    </html>
