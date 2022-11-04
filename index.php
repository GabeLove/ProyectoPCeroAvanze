<?php
    session_start();

    require 'config/config.php';
    $user = null;
    if(isset($_SESSION['user_id'])){
        $records = $conn->prepare('SELECT id, name, email,password FROM usuarios WHERE id=:id');
        $records->bindParam(':id', $_SESSION['user_id']);
        $records->execute();
        $results = $records->fetch(PDO::FETCH_ASSOC);

        

        if(count($results) >0 ){
            $user =$results;
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
    <link rel="stylesheet" href="Css/styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <title>PCero</title>
</head>
<body>
<!--Aqui se muestra la pagina si el usuario si ha iniciado sesion-->
<?php if(!empty($user)): ?>
   
    <nav>
        <div class="desktop">
            <div class="logo">
                <a href="index.php"><img class="imglogo" src="img/PCeroLogo.png" alt=""></a></div>
            <div class="primary">
                <a href="index.php">Inicio</a>
                <a href="#
                ">Componentes</a>
                <a href="#">Videos</a>
            </div>
            <div class="secondary">
                
                <a href="#">
                     <span class="material-symbols-outlined">
                    shopping_cart</span>
                   
                </a>
                
                <p>Bienvenido. <?= $user['name']; ?></p>
                <a href="sign/salir.php">Cerrar sesión</a>
                
            </div>
        </div>
    </nav>
    <section>
        
        <h1 class="title">Elige la opcion mas adecuada para ti</h1>
        <div class="container">

            <div class="card">
                <img src="img/estudiante1.jpg" alt="">
                <h4>Estudiante básico</h4>
                <p>La computadora ideal para estudiantes de nivel basico y medio superior.</p>
                <a href="#">Elegir</a>
            </div>

             <div class="card">
                <img src="img/estudiante2.jpg" alt="">
                <h4>Profesional</h4>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit.</p>
                <a href="#">Elegir</a>
            </div>

            <div class="card">
                <img src="img/gamer2.jpg" alt="">
                <h4>Gamer</h4>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit.</p>
                <a href="#">Elegir</a>
            </div>
        </div>
        
         
         </section>
   <?php
         include "footer.php"
    
     ?>

<!--Aqui se muestra la pagina si el usuario no ha iniciado sesion-->
    <?php else: ?>
<nav>
        <div class="desktop">
            <div class="logo">
                <a href="index.php"><img class="imglogo" src="img/PCeroLogo.png" alt=""></a></div>
            <div class="primary">
                <a href="index.php">Inicio</a>
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
                <a href="sign/register.php" class="registro">
                    Regístrate
                </a>
            </div>
        </div>
    </nav>
    <section>
        
        <h1 class="title">Elige la opcion mas adecuada para ti</h1>
        <div class="container">

            <div class="card">
                <img src="img/estudiante1.jpg" alt="">
                <h4>Estudiante básico</h4>
                <p>La computadora ideal para estudiantes de nivel basico y medio superior.</p>
                <a href="#">Elegir</a>
            </div>

             <div class="card">
                <img src="img/estudiante2.jpg" alt="">
                <h4>Profesional</h4>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit.</p>
                <a href="#">Elegir</a>
            </div>

            <div class="card">
                <img src="img/gamer2.jpg" alt="">
                <h4>Gamer</h4>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit.</p>
                <a href="#">Elegir</a>
            </div>
        </div>
        
         
         </section>
   <?php
         include "footer.php"
    
     ?>
    <?php endif; ?>
</body>
</html>