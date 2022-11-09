<!DOCTYPE html>
<html lang="en">
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
                
                     
                   
                </a>
                
                <a href="sign/login.php">Iniciar Sesion</a>
                <a href="sign/register.php" class="registro">
                    Regístrate
                </a>
            </div>
        </div>
    </nav>
    
    <main>
        <div class="componentes">
            <ul>
                <li><a href="#">Procesador</a></li>
                <li><a href="#">Memoria RAM</a></li>
                <li><a href="#">Almacenamiento</a></li>
                <li><a href="#">Tarjema Madre</a></li>
                <li><a href="#">Tarjeta de video</a></li>
                <li><a href="#">Fuente de poder</a></li>

            </ul>
        </div>
    <div class="texto1">
        <h1>Discos duros o de estados solido</h1>
    </div>
       <?php
       $response = json_decode(file_get_contents('http://localhost/ProyectoPCeroAvanze/api/productos/api-productos.php?categoria=2'),true);
        if($response['statuscode']==200){
            foreach($response['items'] as $item){
                include('layout/items.php');
            }

        }else{
            echo $response['response'];
        }
       ?>
    </main>

    <script src="js/script.js"></script>

   <?php
         include "footer.php"
    
     ?>
</body>
</html>