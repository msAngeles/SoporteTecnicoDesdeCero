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