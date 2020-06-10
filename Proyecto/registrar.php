<?php
include 'bd.php';

//recibe los datos y los almacena en las variables
$nombre= $_POST["nombre"];
$email= $_POST["email"];
$user= $_POST["user"];
$pass= $_POST["pass"];

//consulta para insertar
$insertar= "INSERT INTO datos_usuario(nombre,email,user,pass)  VALUES ('$nombre','$email','$user', '$pass')";
$verificar_usuario= mysqli_query($conexion,"SELECT * From datos_usuario Where user='$user'");
if(mysqli_num_rows($verificar_usuario)> 0)
{
    echo'<script> alert("el usuario ya está registrado");
    window.history.go(-1);
    </script>
   ';
 exit; 
}
$verificar_email= mysqli_query($conexion,"SELECT * From datos_usuario Where email='$email'");
if(mysqli_num_rows($verificar_email)> 0)
{
 echo'<script> alert("el email ya está registrado");
 window.history.go(-1);
  </script>
  
 ';
 exit; 
}
//ejecuta la consulta
$resultado= mysqli_query($conexion,$insertar);


if(!$resultado){
    echo'Error al registrarse';
} else{
    echo '<script>
     alert("Usuario registrado exitosamente");
    window.history.go(-1);
    header("location:.php");
    
    </script> ';
}
mysqli_close($conexion);
//header("location:login.php");
?>