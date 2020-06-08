<?php

  session_start();

  if (isset($_SESSION['id'])) {
    header('Location: /php-login');
  }
  require 'db.php';

  if (!empty($_POST['l_ogin']) && !empty($_POST['p_assword'])) {
    $records = $conn->prepare('SELECT idUsuario, l_ogin, p_assword FROM datos_usuario WHERE l_ogin = :l_ogin');
    $records->bindParam(':l_ogin', $_POST['l_ogin']);
    $records->execute();
    $results = $records->fetch(PDO::FETCH_ASSOC);

    $message = '';

    if (count($results) > 0 && password_verify($_POST['p_assword'], $results['p_assword'])) {
      $_SESSION['id'] = $results['idUsuario'];
      header("Location: /php-login");
    } else {
      $message = 'Las credenciales no son correctas';
    }
  }
  <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Proyecto</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" 
    integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
   <link rel="stylesheet" href="EdLogin.css">
</head>
<body>
<?php require 'partials/header.php' ?>

    <?php if(!empty($message)): ?>
      <p> <?= $message ?></p>
    <?php endif; ?>
    <!---<header > Proyecto</header> -->
    <div class="wrapper fadeInDown">
        <div id="formContent">
          
          <div class="fadeIn first">
            <img src="./Imagenes/Logo.png" id="icon" alt="User Icon" />
          </div>
      
       
          <form>
            <input type="text" id="login" class="fadeIn second" name="login" placeholder="Usuario">
            <input type="password" id="password" class="fadeIn third" name="login" placeholder="Contraseña">
            <input type="submit" class="fadeIn fourth" value="Entrar">
          </form>
      
          <div id="formFooter">
            <a class="underlineHover" href="#">¿No está registrado?</a>
          </div>
      
        </div>
      </div>


</body>
</html>
?>  
