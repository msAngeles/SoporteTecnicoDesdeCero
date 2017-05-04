<?php
	include('conexion.php');
	$id= $_GET['id'];


$query="DELETE FROM usuario WHERE idUsuario='$id'";
	
	mysql_query($query);
        mysql_close();

echo '<script> alert("El usuario ha sido eliminado exitosamente"); window.location="../vista/bajaUser.php"; </script>';
?>