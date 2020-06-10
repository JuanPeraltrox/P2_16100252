<?php
include ("bd.php");
$id = $_GET["id"];
$usuarios = "SELECT * from datos_usuario Where idUsuario='$id'";

?>

<!DOCTYPE html>
<html lang="es" > 
    <head>
    <meta charset="UTF-8" >
    <title> Actualizar datos </title>
    <meta name= "viewport" content="width=device-width, user-scalable=no, initial-scale=1.0,
    maximum-scale=1.0, minumun-scale=1.0">
    <link rel="stylesheet" href="datagrid.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" 
    integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <script src="js/jquery-1.12.13.min.js" charset="="utf-8></script>
    </head>
<body > 
    
    <p  class="table__title2" >Datos del usuario </p>
    <form class="container-table container-table--edit" action="ActualizarDatos.php" method="post">
    <div class="table__title table__title--edit">  </div>    
   
    <div class="table__header"> Nombre </div>
    <div class="table__header"> Email </div>
    <div class="table__header"> Usuario </div>
    <div class="table__header"> Password </div>
    <div class="table__header"> Operacion  </div>
    <?php $resultado= mysqli_query($conexion,$usuarios);
    while($row= mysqli_fetch_assoc($resultado)){ ?>
       <input type="hidden" class="table__item" value=" <?php echo $row["idUsuario"]; ?>" name="id">
     <input type="text" class="table__item" value=" <?php echo $row["nombre"]; ?>" name="nombre">
     <input type="text" class="table__item" value=" <?php echo $row["email"]; ?>" name="email">
     <input type="text" class="table__item" value=" <?php echo $row["user"]; ?>" name="user">
     <input type="text" class="table__item" value=" <?php echo $row["pass"]; ?>" name="pass">
        <?php } ?>
        <input type="submit" value="Actualizar" class="container__submit container__submit--actualizar">
    </form>
    <div id="formFooter">
    <a class="underlineHover" href="editartabla.php"> Regresar</a>
            <a class="underlineHover" href="datosgrid.php"> Pantalla Principal</a>
            <a class="underlineHover" href="logout.php"> cerrar sesion</a>

          </div>
</body>

</html>

