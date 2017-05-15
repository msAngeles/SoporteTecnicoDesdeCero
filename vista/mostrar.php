<!DOCTYPE html>
<html>

<head>
   
    <meta http-equiv="refresh" content="3">

    <title>New HMTL document by NewJect</title>

</head>

<body>

    <div>
        <?php

	include("../operacion/conexion.php");

    

    $query="select count(*) from usuario";
	
	$fila=mysql_query($query);
       
    


while($fila_recorre=mysql_fetch_array($fila)) {
  
   $mensaje[0]=$fila_recorre[0];
    
}
    echo $mensaje[0];

 mysql_close();    
?>
    </div>

</body>

</html>
