<?php

  require 'bd.php';

  $message = '';

  if (!empty($_POST['user']) && !empty($_POST['pass'])){ //&&!empty($_POST['email']) &&!empty($_POST['nom'])) {
    $sql = "INSERT INTO datos_usuario (user, pass)  VALUES (:user, :pass,)";
    /*, email, nombre):email,:nom)"*/
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':user', $_POST['user']);
    /*$stmt->bindParam(':nom', $_POST['nom']  );/*
   /* $stmt->bindParam(':email', $_POST['email'] ); */
 
    $password = password_hash($_POST['pass'], PASSWORD_BCRYPT);
    $stmt->bindParam(':pass', $password);

    if ($stmt->execute()) {
      $message = 'Cuenta creada exitosamente';
    } else {
      $message = 'Hubo un problema creando tu cuenta';
    }
  }

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Proyecto</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" 
    integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="EdLogin.css">
<script src="validad.js">  </script>
</head>
<body>
<?php if(!empty($message)): ?>
      <p> <?= $message ?></p>
    <?php endif; ?>
    <!---<header > Proyecto</header> -->
    <div class="wrapper fadeInDown">
        <div id="formContent">
          
          <div class="fadeIn first">
            <img src="./Imagenes/Logo.png" id="icon" alt="User Icon" />
          </div>
      
       
          <form action=" registrar.php" method="POST" onsubmit="return validar();">
            <input type="text" id="Nombre" class="fadeIn second" name="nombre" placeholder="Ingrese su nombre" required>
            <input type="email" id="Email" class="fadeIn second" name="email" placeholder="Ingrese su E-mail" required>
           <input type="text" id="user" class="fadeIn second" name="user" placeholder="Usuario" required>
            <input type="password" id="pass" class="fadeIn third" name="pass" placeholder="Contraseña" required>
            <input type="submit" class="fadeIn fourth" value="Entrar">
          </form>
          <div id="formFooter">
            <a class="underlineHover" href="login.php"> o iniciar sesion</a>
          </div>
      
       
        </div>
        
      </div>


</body>
</html>