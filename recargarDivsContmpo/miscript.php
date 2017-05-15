<?php
//$mensajes=array("0", "Mi primer mensaje", "2do mensaje", "un tercer mensaje", "cuarto Mensaje", "5to mensaje");
//$nro=$_POST['variable'];


        include("../operacion/conexion.php");
        $query="select count(*) from usuario";

        $fila=mysql_query($query);
        while($fila_recorre=mysql_fetch_array($fila)) {
            $mensajes[0]=$fila_recorre[0];
        }
	
	
	//echo '<script> window.location="../vista/indexAdmin.php"; </script>';
	
	mysql_close();
echo $mensajes[0];
?>
