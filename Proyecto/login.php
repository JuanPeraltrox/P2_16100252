<?php

  session_start();

  include 'bd.php';

//recibe los datos y los almacena en las variables



//ejecuta la consulta
//$resultado= mysqli_query($conexion);
/*  if (isset($_SESSION['id_usuario'])) {
    header('Location: login.php');
  }
  require 'bd.php';

  if (!empty($_POST['user']) && !empty($_POST['pass'])) {
    $records = $conn->prepare('SELECT idUsuario, user, pass FROM datos_usuario WHERE user = :user');
    $records->bindParam(':user', $_POST['user']);
    $records->execute();
    $results = $records->fetch(PDO::FETCH_ASSOC);

    $message = '';

    if (!empty($results) > 0 && password_verify($_POST['pass'], $results['pass'])) {
      $_SESSION['id_usuario'] = $results['idusuario'];
      header("Location:login.php");
    } else {
      $message = 'Las credenciales no son correctas';
    }
  }*/

?>
  <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Proyecto</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" 
    integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <script src="js/jquery-1.12.13.min.js" charset="="utf-8></script>
   <link rel="stylesheet" href="EdLogin.css">
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
      
       
          <form  action="index.php"method="POST">
            <input type="text" id="user" class="fadeIn second" name="user" placeholder="Usuario">
            <input type="password" id="pass" class="fadeIn third" name="pass" placeholder="Contraseña">
            <input type="submit" name="login" id="login"  class="fadeIn fourth" value="Entrar">
          
            <span id="result"></span>
          </form>
      
          <div id="formFooter">
            <a class="underlineHover" href="singup.php">¿No está registrado?</a>
          </div>
      
        </div>
      </div>


</body>
</html>
<script>

/*$(document).ready(function(){
  $('#login').click(function(){
    var user=('#login').val(); 
var pass=('#password').val();
if($.trim(user).length>0 &&$strim(pass).length >0){
  $.ajax({
    url:"bd.php",
    method:"post",
    data:{user:user,pass:pass},
    cache: "false",
    beforeSend:function(){
    $('#login').val("conectando....");
    },
    sucess:function(data){
      $('#login').val("login");
      if(data=="1")
      {
        $(location).attr('href', 'index.php');
      }
      else{
        $("$result").html("<div class='alert alert-dismissible alert-danger'><button type='button' class='close' data-dismiss='alert'>&times;</button> <strong> ¡Error!</strong> las crendeciales son incorrectas. </div>");
      }
    }
  });
  };
  });
});/*


*/</script>/*