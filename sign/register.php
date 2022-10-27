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
    <title>Registro de usuario</title>
</head>
<body>
    <?php
    include "../header.php"
    ?>
    <div class="inicio">
  <h1 class="welcome">Bienvenido, Registrate!</h1>

	<form action="login.php" method="post" class="formulario">

    <input type="text" name="name" placeholder="Introduce tu nombre completo">

    <input type="text" name="email" placeholder="Introduce tu correo">

    <input type="text" name="password" placeholder="Introduce tu contraseña">

    <input type="text" name="rpassword" placeholder="Introduce tu contraseña de nuevo">

    <input type="submit" value="Registrarse">


  </form>
  </div>
  <?php
  include "../footer.php"
    
    ?>
    

</body>
</html>