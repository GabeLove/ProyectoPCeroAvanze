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
                
            <div class="carrito">
                <a href="#" class='btn-carrito'><span class="material-symbols-outlined">
                    shopping_cart</span></a>
                <div id="carrito-container" >
                    <div id="tabla" >
                    </div>
                </div>
              </div>
                
                <p class="registro">Bienvenido. <?= $user['name']; ?></p>
                <a href="sign/salir.php" class="cerrarsesion">Cerrar sesión</a>
                
            </div>
        </div>
    </nav>
    <div class="banner1">
            <img  class="imgbanner"  src="img/banner/work.jpg" alt="">
            <h1 class="h1banner">BIENVENIDO A</h1>           
            <h2 class="h2banner">PCERO</h2>
            <h3 class="h3banner">Esta pagina fue creada para todo aquel que quiera elegir los componentes adecuados para una computadora de escritorio</h3>
            <a href="#seccion1">Explora la opciones</a>
    </div>

    <section id="seccion1">

        
        
        <h1 class="title">Elige la opcion mas adecuada para ti</h1>
        <p class="texto2">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Fuga officia distinctio officiis veritatis delectus ipsam iure obcaecati nulla itaque velit? Iure maxime laudantium dolore consequatur perspiciatis dolorem voluptate repellat nisi?</p>
        <div class="container">

            <div class="card">
                <img src="img/estudiante1.jpg" alt="">
                <h4>Estudiante básico</h4>
                <p>La computadora ideal para estudiantes de nivel basico y medio superior.</p>
                <a href="procesadores1.php">Elegir</a>
            </div>

             <div class="card">
                <img src="img/estudiante2.jpg" alt="">
                <h4>Profesional</h4>
                <p>Esta computadora es ideal para estudiantes de nivel superior o profresionales.</p>
                <a href="procesadores2.php">Elegir</a>
            </div>

            <div class="card">
                <img src="img/gamer2.jpg" alt="">
                <h4>Gamer</h4>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit.</p>
                <a href="procesadores3.php">Elegir</a>
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
            <div class="carrito">
                <a href="#" class='btn-carrito'><span class="material-symbols-outlined">
                    shopping_cart</span></a>
                <div id="carrito-container" >
                    <div id="tabla" >
                    </div>
                </div>
              </div>
                
                     
                   
                
                
                <a href="sign/login.php">Iniciar Sesion</a>
                <a href="sign/register.php" class="registro">
                    Regístrate
                </a>
            </div>
        </div>
    </nav> 
         <div class="avisologin1">
            <img  class="imgbanner"  src="img/banner/secretary.jpg" alt="">
            <h1 class="avisologin">Los videos solo estan disponibles para los usuarios registrados :(</h1>           
            <a href="sign/login.php" >Iniciar Sesión</a>
        </div>

   <?php
         include "footer.php"
    
     ?>
    <?php endif; ?>

    <script src="js/script.js"></script>
</body>
</html>