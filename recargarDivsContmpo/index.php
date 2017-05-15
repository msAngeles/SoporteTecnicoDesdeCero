
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="description" content="Demo jquery para recargar texto sin recargar toda la pagina usando jquery" />
<meta name="keywords" content="jquery, ajax, recargar, texto" />
<title>Actualizar</title>
<script language="javascript" src="js/jquery-1.2.6.min.js"></script>
<script language="javascript">
function recargar(){    
	$("#recargado").fadeOut(function() {
		$.post("miscript.php", {  }, function(data){	
		$("#recargado").html(data).fadeIn();
		});			
	});
}

timer = setInterval("recargar()", 0);
</script>
<style type="text/css">
<!--
body,td,th {
	color: #333333;
}
#recargado {	
	margin:auto;
	padding:10px;	
	text-align:center;
	color:#990000;
	font-weight:bold;
}
#borde {
	width:400px;
	border:1px solid #CCCCCC;
	height:60px;
	margin:auto;
}
-->
</style></head>
<body>
<div id="borde">
	<div id="recargado">Mi texto sin recargar</div>
</div>
<p align="center">
	<a href="http://www.miguelmanchego.com/2009/recargar-texto-automaticamente-jquery-ajax/">Regresar al tutorial</a>
</p>
</body>
</html>
