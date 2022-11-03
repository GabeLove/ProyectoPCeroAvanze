<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
    <link rel="stylesheet" href="../Css/styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <title>Login</title>
</head>
<body>
<nav>
        <div class="desktop">
            <div class="logo">
                <a href="index.php"><img class="imglogo" src="../img/PCeroLogo.png" alt=""></a></div>
            <div class="primary">
                <a href="../index.php">Inicio</a>
                <a href="#
                ">Componentes</a>
                <a href="#">Videos</a>
            </div>
            <div class="secondary">
                
                <a href="#">
                     <span class="material-symbols-outlined">
                    shopping_cart</span>
                   
                </a>
                
                <a href="login.php">Iniciar Sesion</a>
                <a href="register.php" class="registro">
                    Regístrate
                </a>
            </div>
        </div>
    </nav>
<div class="inicio">
  <h1 class="welcome">Bienvenido, Inicia Sesion!</h1>

	<form action="login.php" method="post" class="formulario">
    <input type="text" name="email" placeholder="Introduce tu correo">

    <input type="text" name="password" placeholder="Introduce tu contrasena">

    <input type="submit" value="Registrarse">


  </form>
  </div>
  <?php
  include "../footer.php"
    
    ?>
    
</body>
</html>