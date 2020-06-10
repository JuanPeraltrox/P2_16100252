<?php
session_start();
/*if(!isset($_SESSION["user"])){
    header("location: login.php");
}
echo'<h1 align=center> Bienvenido usuario'.$_SESSION["user"].'</h1>';
echo '<p align=center><a href=logout.php">Logout</a></p>';*/


include 'bd.php';

//recibe los datos y los almacena en las variables

$user= $_POST["user"];
$pass= $_POST["pass"];
//header("location:index.php");

//consulta 
$verificar_usuario= mysqli_query($conexion,"SELECT user, pass From datos_usuario Where user='$user'and pass='$pass'");
if(mysqli_num_rows($verificar_usuario)> 0)
{
  header("location: datosgrid.php");
    echo'<script> alert("Iniciando sesión");
    
    </script>
   ';
 exit; 
}
else
{ 
  echo'<script> alert("Ocurrió un problema al iniciar sesion");
  window.history.go(-1);
      </script>'; 
    
 exit;
}

//ejecuta la consulta
$resultado= mysqli_query($conexion,$verificar_usuario);

  
?>
