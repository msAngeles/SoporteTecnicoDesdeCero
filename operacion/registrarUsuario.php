<?php

$var_inputUsuario=$_POST['usuario'];
$var_inputNombre=$_POST['correo'];
$var_inputApp=$_POST['contra'];

	

	//conexion a la BD
	include("conexion.php");

    
	$query="INSERT INTO usuario(idUsuario, nombUsuario,email,contra) VALUES (null,'$var_inputUsuario','$var_inputNombre','$var_inputApp')";
	
	mysql_query($query);
	
	echo '<script> window.location="../vista/login.php"; </script>';
	
	mysql_close();
		
	

?>