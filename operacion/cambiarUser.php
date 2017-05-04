<?php
$varid=$_POST['id'];
$varusuario=$_POST['usuario'];
$varcontra=$_POST['contra'];

//conexion a la BD
	include("conexion.php");
	$query="UPDATE usuario SET nombUsuario='$varusuario',contra='$varcontra' WHERE idUsuario='$varid'";
	 
	mysql_query($query);
	echo '<script>alert("Usuario modificado");
 window.location="../vista/modificarUser.php"; </script>';
	
	mysql_close();
		
	

?>