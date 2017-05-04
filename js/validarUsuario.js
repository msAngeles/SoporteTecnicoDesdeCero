var usuario = document.getElementById("usuario");
var tmp=0;

function validarUsuario(){
    <?php 
    include('conexion.php');
    $cont=0;
    $res=mysql_query("select * from usuario where nombUsuario='miriam'");
   
       while($row=mysql_fetch_array($res)){
           if($row['nombUsuario']==usuario){
               $cont=1;
           }else{
               $cont=0;
           }
       }        
    
    ?>
        tmp="<?php echo($cont);?>";
    
  if(tmp==1) {
    alert("el usuario ya existe");
  } else {
    
  }
}

validarUsuario;

