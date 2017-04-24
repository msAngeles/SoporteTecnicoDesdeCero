<?php
	session_start(); 
    include 'conexion.php';

	$usuario=$_POST['usuario'];
	$password=$_POST['contra'];
    

	$log = mysql_query("SELECT * from usuario where nombUsuario='$usuario' and contra='$password'"); 
    
	if (mysql_num_rows($log)>0) {
		$row = mysql_fetch_array($log);
              $_SESSION["usuario"] = $row['nombUsuario'];
              $_SESSION["tipoUsuario"] = $row['tipo'];
        
        if($row['tipo']=="admin"){
            echo '<script> window.location="../vista/indexAdmin.php"; </script>';
        }else if($row['tipo']=="user"){
            echo '<script> window.location="../vista/indexUser.php"; </script>';
        }
		
    }else{
				
		echo '<script> alert("Usuario no registrado");</script>';
		echo '<script> window.location="../vista/login.php"; </script>';
	}
		
?>
