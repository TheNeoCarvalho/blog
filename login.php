<?php
  include('./config/config.php');
?>
<!DOCTYPE html>
<html lang="pt-BR">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title><?= SITE_NAME ?></title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom fonts for this template -->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href='https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>

  <!-- Custom styles for this template -->
  <link href="css/clean-blog.min.css" rel="stylesheet">
  <link href="css/login.css" rel="stylesheet">

</head>

<body>
<div class="container">
	<div class="login-container">
            <div id="output"></div>
            <div class="avatar">
              <img src="https://api.adorable.io/avatars/25/"> 
            </div>
            <div class="form-box">
                <form action="" method="">
                    <input name="user" type="text" placeholder="Login">
                    <input type="password" name="pass" placeholder="Senha">
                    <button class="btn btn-info btn-block login" type="submit">Entrar</button>
                </form>
            </div>
        </div>
</div>
<javascritp src="./js/login.js"></javascritp>
</body>

</html>
