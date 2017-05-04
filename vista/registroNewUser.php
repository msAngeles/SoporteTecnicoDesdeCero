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
            $(document).ready(function() {
                $().ajaxStart(function() {
                    $('#loading').show();
                    $('#result').hide();
                }).ajaxStop(function() {
                    $('#loading').hide();
                    $('#result').fadeIn('slow');
                });
                $('#form, #fat, #fo3').submit(function() {
                    $.ajax({
                        type: 'POST',
                        url: $(this).attr('action'),
                        data: $(this).serialize(),
                        success: function(data) {
                            $('#result').html(data);
                            alert("El usuario ha sido registrado exitosamente!");
                            location.reload(true);
                        }

                    })

                    return false;
                });

            })

        </script>
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



        <!--Inicia formulario Registro-->
        <div class="container">
            <div class="form-group centered-form">
                <div class="col-xs-12 col-sm-8 col-sm-offset-2 col-md-offset-2">
                    <h3>¡Bienvenid@! Registra tus datos</h3>
                    <form id="fo3" name="fo3" action="../operacion/registrarUsuario.php" method="post">
                        <div class="form-group">
                            <input type="text" name="usuario" id="usuario" class="form-control input-lg" placeholder="Usuario" required autofocus maxlength="15" pattern="[a-zA-Z a-zA-Z]*" title="solo puedes introducir letras">
                        </div>
                        <div class="form-group">
                            <input type="email" name="correo" class="form-control input-lg" placeholder="micorreo@ejemplo.com" required autofocus maxlength="50">
                        </div>
                        <div class="row">
                            <div class="col-xs-6 col-sm-6 col-md-6">
                                <div class="form-group">
                                    <input type="password" name="contra" id="pass" class="form-control input-lg" placeholder="contraseña" required autofocus maxlength="16">
                                </div>
                            </div>
                            <div class="col-xs-6 col-sm-6 col-md-6">
                                <div class="form-group">
                                    <input type="password" name="recontra" id="repass" class="form-control input-lg" placeholder="Confirmar contraseña" required autofocus maxlength="16">
                                </div>
                            </div>
                        </div>
                        <input type="submit" value="Registrar" class="btn btn-primary  btn-block input-lg">
                    </form>
                </div>
            </div>
        </div>

        <!--Termina formulario Registro-->


        <script src="../js/validarPass.js"></script>

        <script src="../js/validarUsuario.js"></script>
    </body>

    </html>
