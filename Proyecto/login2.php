<?php

  session_start();

  if (isset($_SESSION['user'])) {
    header('Location: index.php');
  }

?>
<!doctype html>
<head>
<meta charset="utf-8"> 
<title>login</title>
<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" media="screen" title="no title" charset="utf-8">
<script src="js/jquery-1.12.3.min.js" charset="utf-8"> </script>
<scrip src="bootstrap/js/bootstrap.min.js" charset="utf-8"></script>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-md-offset-3">
                <form method="post">
                    <h1><p class="text-center">login </p></h1>
                    <div class="form-group">
                        <label for="">usuario o email</label>
                        <input type="text" name="user" id="user" class="form-control">
                        
                    </div>
                    <div class="form-group">
                        <label for="">contraseña</label>
                        <input type="password" name="pass" id="pass" class="form-control">
                        
                    </div>
                    <div class="form-group">
                        
                        <input type="button" name="login" id="login" class="btn btn-success">
                        
                    </div>
                    <span id="result"></span>
                </form>
            </div>
        </div>
    </div>
</body>
</html>