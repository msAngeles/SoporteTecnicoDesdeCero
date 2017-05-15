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

        <!-- <script language="javascript">
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

                        }
                    })

                    return false;
                });
            })

        </script>-->

       <?php
        include('../js/mensajes.js');
        ?>
        
        
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
        <?php
        include('menuAdmin.php');
        //include('menuAdmin2.php');
        ?>



            <!--      <div class="col-sm-2 col-md-2 col-sm-offset-8 sidebar-offcanvas" id="sidebar">
            <div class="panel panel-primary">
                
                <div class="panel-heading" style="font-size:20px;">Avisos</div>
                <div class="panel-body">
                    <p>...</p>
                </div>

               
                <table class="table">
                    ...
                </table>
            </div>
        </div>
      -->
            <!--
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-3 col-md-2 sidebar">
                    <ul class="nav nav-sidebar">
                        <li class="active"><a href="#">Overview <span class="sr-only">(current)</span></a></li>
                        <li><a href="#">Reports</a></li>
                        <li><a href="#">Analytics</a></li>
                        <li><a href="#">Export</a></li>
                    </ul>


                </div>

            </div>
        </div>-->
            <!-- termina menu de servicios -->


    </body>

    </html>
