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
                    <li class=""><a href="#">Inicio</a></li>
                    <li><a href="#">Acerca de</a></li>
                    <li><a href="#">Contacto</a></li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="../login.php"><span class="glyphicon glyphicon-log-in"></span> Iniciar sesion</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <!--Termina Menu-->



    <!--Inicia formulario Registro-->
    <div class="container">
        <div class="form-group centered-form">
            <div class="col-xs-12 col-sm-8 col-md-offset-4 col-sm-offset-2 col-md-offset-2">
                <h3>Bienvenido</h3>
                <form role="form" action="" method="post">
                    <div class="form-group">
                        <input type="text" name="Usuario" class="form-control input-sm" placeholder="Usuario" required autofocus maxlength="15" pattern="[a-zA-Z a-zA-Z]*" title="solo puedes introducir letras">
                    </div>
                    <div class="form-group">
                        <input type="email" name="email" id="email" class="form-control input-sm" placeholder="micorreo@ejemplo.com" required autofocus maxlength="50">
                    </div>
                    <div class="row">
                        <div class="col-xs-6 col-sm-6 col-md-6">
                            <div class="form-group">
                                <input type="password" name="contraseña" class="form-control input-sm" placeholder="contraseña" required autofocus maxlength="16">
                            </div>
                        </div>
                        <div class="col-xs-6 col-sm-6 col-md-6">
                            <div class="form-group">
                                <input type="password" name="repassword" class="form-control input-sm" placeholder="Confirmar contraseña" required autofocus maxlength="16">
                            </div>
                        </div>
                    </div>
                    <input type="submit" value="Registrar" class="btn btn-primary  btn-block">
                </form>
            </div>
        </div>
    </div>
    <!--Termina formulario Registro-->


</body>

</html>
