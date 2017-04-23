<?php
	session_start(); 
    include 'conexion.php';

	$usuario=$_POST['usuario'];
	$password=$_POST['contra'];
    echo "<script> alert('$usuario');</script>";
    echo "<script> alert('$password);</script>";

	$log = mysql_query("SELECT nombUsuario from usuario where nombUsuario='$usuario' and contra='$password'"); 
    
	if (mysql_num_rows($log)>0) {
		$row = mysql_fetch_array($log);
              $_SESSION["usuario"] = $row['nombUsuario'];
		echo '<script> window.location="../index.php"; </script>';
        echo '<script> alert("hola")</script>';
                //echo $row['AES_DECRYPT(pass,nombUsuario)'];
                
	}
	else{
				
		echo '<script> alert("Usuario o contraseña incorrectos.");</script>';
		echo '<script> window.location="../vista/login.php"; </script>';
	}
		
?>
