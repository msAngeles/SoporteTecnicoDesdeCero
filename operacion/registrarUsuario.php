<?php

$var_inputUsuario=$_POST['usuario'];
$var_inputCorreo=$_POST['correo'];
$var_inputContra=$_POST['contra'];
//recontra
	

	//conexion a la BD
	include("conexion.php");

    
	$query="INSERT INTO usuario(idUsuario, nombUsuario,email,contra,tipo) VALUES (null,'$var_inputUsuario','$var_inputCorreo','$var_inputContra','user')";
	
	mysql_query($query);
	
	echo '<script> window.location="../vista/login.php"; </script>';
	
	mysql_close();
		
	

?>