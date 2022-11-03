<?php
require '../config/config.php';
$message = '';


if(!empty($_POST['name']) && !empty($_POST['email']) && !empty($_POST['password'])) {

    $sql = "INSERT INTO usuarios (name, email, password) VALUES (:name, :email, :password)";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':name',$_POST['name']);
    
    $stmt->bindParam(':email',$_POST['email']);
    $password = password_hash($_POST['password'], PASSWORD_BCRYPT);
    $stmt->bindParam(':password',$password);

    if($stmt->execute()){
        $message = 'Successfully created new user';
    }else{
        $message = 'Sorry there must have been an issue creating your account ';
    }

}
?>

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
<nav>
        <div class="desktop">
            <div class="logo">
                <a href="index.html"><img class="imglogo" src="../img/PCeroLogo.png" alt=""></a></div>
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

    <?php if(!empty($message)):?>
    <p> <?= $message ?></p>
    <?php endif; ?>
  <h1 class="welcome">Bienvenido, Registrate!</h1>

	<form action="register.php" method="post" class="formulario">

    <input type="text" name="name" placeholder="Introduce tu nombre completo">

    <input type="text" name="email" placeholder="Introduce tu correo">

    <input type="password" name="password" placeholder="Introduce tu contraseña">

    <input type="password" name="rpassword" placeholder="Introduce tu contraseña de nuevo">

    <input type="submit" value="Registrarse">


  </form>
  </div>
  <?php
  include "../footer.php"
    
    ?>
    

</body>
</html>