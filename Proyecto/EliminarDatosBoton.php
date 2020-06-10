<?php
include 'bd.php';

//recibe los datos y los almacena en las variables
$id = $_GET['id'];

$eliminar  = "DELETE from  datos_usuario where idUsuario='$id'";
$resultado= mysqli_query($conexion,$eliminar);

if(!$resultado){
     echo"<script> alert('Error al borrar los datos);
     window.history.go(-1);
   ";
} else{
    echo "<script>
     alert('Usuario eliminado exitosamente');
     window.location='editartabla.php'
  
    
    </script> ";
    header("location: editartabla.php");
    
}
?>