<?php
include ("bd.php");
$usuarios = "SELECT * from datos_usuario";
?>

<!DOCTYPE html>
<html lang="es" > 
    <head>
    <meta charset="UTF-8" >
    <title> Editar datos</title>
    <meta name= "viewport" content="width=device-width, user-scalable=no, initial-scale=1.0,
    maximum-scale=1.0, minumun-scale=1.0">
    <link rel="stylesheet" href="datagrid.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" 
    integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <script src="js/jquery-1.12.13.min.js" charset="="utf-8></script>
    </head>
<body > 
    <p  class="table__title2" >Datos del usuario </p>
    <div class="container-table container-table--edit">
    <div class="table__title table__title--edit">  </div>    
    <div class="table__header"> Nombre </div>
    <div class="table__header"> Email </div>
    <div class="table__header"> Usuario </div>
    <div class="table__header"> Password </div>
    <div class="table__header"> Operacion  </div>
    <?php $resultado= mysqli_query($conexion,$usuarios);
    while($row= mysqli_fetch_assoc($resultado)){ ?>
     <div class="table__item"> <?php echo $row["nombre"]; ?> </div>
     <div class="table__item"><?php echo $row["email"]; ?>  </div>
     <div class="table__item"><?php echo $row["user"]; ?>  </div>
     <div class="table__item"><?php echo $row["pass"]; ?>  </div>
     <div class="table__item">
        | <a href="actualizar.php?id=<?php echo $row["idUsuario"];?>" class="table__item__link"> Editar </a> ||
         <a href="EliminarDatosBoton.php?id=<?php echo $row["idUsuario"];?>" class="table__item__link__eliminar">Eliminar </a>|
        </div>
    <?php } ?>
    </div>
    <div id="formFooter">
            <a class="underlineHover" href="logout.php"> cerrar sesion</a>
            <a class="underlineHover" href="datosgrid.php"> Pantalla Principal</a>

          </div>
          <script src="confirmacion.js"> </script>
</body>

</html>

