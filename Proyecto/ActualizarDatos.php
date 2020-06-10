<?php
include 'bd.php';

//recibe los datos y los almacena en las variables
$id = $_POST["id"];
$nombre= $_POST["nombre"];
$email= $_POST["email"];
$user= $_POST["user"];
$pass= $_POST["pass"];
$actualizar= "UPDATE datos_usuario SET nombre='$nombre' ,email='$email', user ='$user', pass= '$pass'
where idUsuario='$id'";
$resultado= mysqli_query($conexion,$actualizar);

if(!$resultado){
     echo"<script> alert('Error al actualizar los datos);
     window.history.go(-1);
   ";
} else{
    echo "<script>
     alert('Usuario actualizado exitosamente');
     window.location='editartabla.php'
  
    
    </script> ";
    
}
?>