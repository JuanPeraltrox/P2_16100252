<?php

/*$server = 'localhost:3306';
$username = 'root';
$password = '';
$database = 'prusuario';

try {
  $conexion = new PDO("mysql:host=$server;dbname=$database;", $username, $password);
  echo" conexion exitosa";
} catch (PDOException $e) {
  die('Connection Failed: ' . $e->getMessage());
} */
$conexion= mysqli_connect("localhost","root","","prusuario");
/*if(!$conexion){
  echo 'Conexión no se pudo establecer';
}else{
  echo'conexion existosa';

}*/

/*$serverName = "PERALTROX"; //serverName\instanceName
$connectionInfo = array( "Database"=>"usuarios", "UID"=>"sa", "PWD"=>"julio798","CharacterSet"=> "UTF-8");
$conn = sqlsrv_connect($serverName, $connectionInfo);


if( $conn ) {
     echo "Conexión establecida.<br />";
}else{
     echo "Conexión no se pudo establecer.<br />";
     die( print_r( sqlsrv_errors(), true));
}*/

/*session_start();
$connect= mysqli_connect("localhost","root","","prusuario");

if(isset($_POST["user"]) && isset($_post["pass"])){
$user=mysqli_real_escape_string($connect,$_POST["user"]);
$pass=mysqli_real_escape_string($connect,$_POST["pass"]);
$sql ="SELECT user FROM prusuario.datosusuarios WHERE (user='$user' OR email= '$user') AND pass='$pass'";
$result=mysqli_query($connect,$sql);
$num_row= mysqli_num_rows($result);
if($num_row=="1"){
  $data= mysqli_fetch_array($result);
  $_SESSION["user"]=$data["user"];
  echo" 1";  }
 else{
  echo "error";
 }
}
else{
  echo"error";
}*/

?>