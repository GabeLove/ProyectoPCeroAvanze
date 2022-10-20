<?php

include "../config/config.php";
error_reporting(0);
session_start();

if(isset($_SESSION["username"])){
	header("Location: index.php");
}

if(isset($_POST["submit"])){
	$nombre=$_POST["nombre"];
	$correo=$_POST["correo"];
	$contrasena=md5($_POST["contraseña"]);
	$rcontrasena=md5($_POST["rcontraseña"]);

	if($contrasena){

	}
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
    <link rel="stylesheet" href="../Css/styleslogin.css">
    <title>Login</title>
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
                
                <a href="sign/login.php">Iniciar Sesion</a>
                <a href="#" class="registro">
                    Regístrate
                </a>
            </div>
        </div>
    </nav>
	<section class="forms-section">
  <h1 class="section-title">Bienvenido!</h1>
  <div class="forms">
    <div class="form-wrapper is-active">
      <button type="button" class="switcher switcher-login">
	  Inicia Sesión
        <span class="underline"></span>
      </button>
      <form class="form form-login">
        <fieldset>
          
          <div class="input-block">
            <label for="login-email">Correo</label>
            <input id="login-email" type="email" required>
          </div>
          <div class="input-block">
            <label for="login-password">Contraseña</label>
            <input id="login-password" type="password" required>
          </div>
        </fieldset>
        <button type="submit" class="btn-login">Iniciar Sesión</button>
      </form>
    </div>
    <div class="form-wrapper">
      <button type="button" class="switcher switcher-signup">
        Registro
        <span class="underline"></span>
      </button>
      <form class="form form-signup">
        <fieldset>
          
          <div class="input-block">
            <label for="signup-email">Nombre</label>
            <input id="signup-name" type="text" required>
          </div>
		 
		  <div class="input-block">
            <label for="signup-email">Correo</label>
            <input id="signup-email" type="email" required>
          </div>
          <div class="input-block">
            <label for="signup-password">Contraseña</label>
            <input id="signup-password" type="password" required>
          </div>
          <div class="input-block">
            <label for="signup-password-confirm">Confirmar contraseña</label>
            <input id="signup-password-confirm" type="password" required>
          </div>
        </fieldset>
        <button type="submit" class="btn-signup">Continue</button>
      </form>
    </div>
  </div>
</section>

<script src="../js/script.js"></script>

</body>
</html>