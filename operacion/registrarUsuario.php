<?php
session_start(); 
$var_inputUsuario=$_POST['usuario'];
$var_inputCorreo=$_POST['correo'];
$var_inputContra=$_POST['contra'];
//recontra
	

	//conexion a la BD
	include("conexion.php");

    

    $query="INSERT INTO usuario(idUsuario, nombUsuario,email,contra,tipo) VALUES (null,'$var_inputUsuario','$var_inputCorreo','$var_inputContra','user')";
	
	mysql_query($query);
        mysql_close();    
        echo '<script> alert("El usuario se ha registrado exitosamente"); </script>';
    
    
    
	if($_SESSION['tipoUsuario']=="admin"){
            echo '<script> window.location="vista/indexAdmin.php"; </script>';
        }else{
            echo '<script> window.location="vista/indexUser.php"; </script>';
        }
		
	mysql_close();
    
?>
