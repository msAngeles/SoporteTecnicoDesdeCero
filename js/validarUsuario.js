var usuario = document.getElementById("usuario");
var tmp=0;

function validarUsuario(){
    <?php 
    include('conexion.php');
    $cont=0;
    $res=mysql_query("select * from usuario");
   
       while($row=mysql_fetch_array($res)){
           if($row['nombUsuario']==usuario){
               $cont=1;
           }
       }        
    
    ?>
        tmp="<?php echo($cont);>?";
    
  if(tmp==1) {
    usuario.setCustomValidity("Las contraseñas no coinciden");
  } else {
    
  }
}

usuario.onchange = validarUsuario;

