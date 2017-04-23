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
    <style>
        /* Remove the navbar's default margin-bottom and rounded borders */
        
        .navbar {
            margin-bottom: 0;
            border-radius: 0;
        }
        /* Add a gray background color and some padding to the footer */
        
        footer {
            background-color: #f2f2f2;
            padding: 25px;
        }
        
        .carousel-inner img {
            width: 100%;
            /* Set width to 100% */
            margin: auto;
            min-height: 100px;
        }
        /* Hide the carousel text when the screen is less than 600 pixels wide */
        
        @media (max-width: 600px) {
            .carousel-caption {
                display: none;
            }
        }

    </style>
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
                    <li class="active"><a href="index.php">Inicio</a></li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">ABC Usuarios <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="../">Agregar usuario</a></li>
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
    <!--Termina Menu-->
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner" role="listbox">
            <div class="item active">
                <img src="../img/img1.jpg" alt="Image">
                <div class="carousel-caption">

                </div>
            </div>

            <div class="item">
                <img src="../img/img4.jpg" alt="Image">
                <div class="carousel-caption">

                </div>
            </div>
        </div>

        <!-- Left and right controls -->
        <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
   

</body>

</html>
