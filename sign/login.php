<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
    <link rel="stylesheet" href="../Css/styles.css">
    <title>Login</title>
</head>
<body>
<?php
  
  include "../header.php"
  
  ?>
<div class="inicio">
  <h1 class="welcome">Bienvenido, Inicia Sesion!</h1>

	<form action="login.php" method="post" class="formulario">
    <input type="text" name="email" placeholder="Introduce tu correo">

    <input type="text" name="password" placeholder="Introduce tu contrasena">

    <input type="submit" value="Registrarse">


  </form>
  </div>

</body>
</html>