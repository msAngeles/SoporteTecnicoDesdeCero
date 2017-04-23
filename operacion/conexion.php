<?php

	$host="localhost";
	$user="root";
	$pass="";
	$bd="bdti2";
	//conectandose a mysql
	mysql_connect("$host","$user","$pass") or die("No es posible conectarse a la BD");
	//conectandose a la bd
	mysql_select_db("$bd") or die ("La bd no existe");

?>

