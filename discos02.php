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
    <!--Aqui se muestra la pagina si el usuario si ha iniciado sesion-->
<?php if(!empty($user)): ?>
    <nav>
        <div class="desktop">
            <div class="logo">
                <a href="index.php"><img class="imglogo" src="img/PCeroLogo.png" alt=""></a></div>
            <div class="primary">
                <a href="index.php">Inicio</a>
                <a href="componentes.php">Componentes</a>
                <a href="videos.php">Videos</a>
            </div>
            <div class="secondary">
            <div class="carrito">
                <a href="#" class='btn-carrito'>Carrito</a>
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
    
    <main>


    <div class="texto1">
        <h1>Almacenamiento</h1>
        <p>El disco duro es uno de los componentes más importante en cualquier computadora, ello debido a que permite grabar un gran volumen de información. Además, contiene el sistema operativo que permite que el computador funcione. Entonces, la importancia del disco duro radica en mantener los archivos almacenados para luego utilizarlos en el momento que lo desees.</p>
    </div>
       <?php
       $response = json_decode(file_get_contents('http://localhost/ProyectoPCeroAvanze/api/productos/api-productos.php?categoria=disco&&nivel=1'),true);
        if($response['statuscode']==200){
            foreach($response['items'] as $item){
                include('layout/items.php');
            }

        }else{
            echo $response['response'];
        }
       ?>

<div class="siguiente">
        <a href="fuente01.php">
            <button class="cssbuttons-io-button"> Siguiente
                <div class="icon">
                   <svg height="24" width="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="M0 0h24v24H0z" fill="none"></path><path d="M16.172 11l-5.364-5.364 1.414-1.414L20 12l-7.778 7.778-1.414-1.414L16.172 13H4v-2z" fill="currentColor"></path></svg>
                 </div>
            </button>
        </a>
       </div>
    </main>

 

   

     <!--Aqui se muestra la pagina si el usuario no ha iniciado sesion-->
    <?php else: ?>
        <nav>
        <div class="desktop">
            <div class="logo">
                <a href="index.php"><img class="imglogo" src="img/PCeroLogo.png" alt=""></a></div>
            <div class="primary">
                <a href="index.php">Inicio</a>
                <a href="componentes.php">Componentes</a>
                <a href="videossinlogin.php">Videos</a>
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

    <main>
        
    <div class="texto1">
        <h1>Almacenamiento</h1>
        <p>El disco duro es uno de los componentes más importante en cualquier computadora, ello debido a que permite grabar un gran volumen de información. Además, contiene el sistema operativo que permite que el computador funcione. Entonces, la importancia del disco duro radica en mantener los archivos almacenados para luego utilizarlos en el momento que lo desees.</p>
    </div>
       <?php
       $response = json_decode(file_get_contents('http://localhost/ProyectoPCeroAvanze/api/productos/api-productos.php?categoria=disco&&nivel=1'),true);
        if($response['statuscode']==200){
            foreach($response['items'] as $item){
                include('layout/items.php');
            }

        }else{
            echo $response['response'];
        }
       ?>

       <div class="siguiente">
        <a href="fuente01.php">
            <button class="cssbuttons-io-button"> Siguiente
                <div class="icon">
                   <svg height="24" width="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="M0 0h24v24H0z" fill="none"></path><path d="M16.172 11l-5.364-5.364 1.414-1.414L20 12l-7.778 7.778-1.414-1.414L16.172 13H4v-2z" fill="currentColor"></path></svg>
                 </div>
            </button>
        </a>
       </div>
    </main>

    <?php endif; ?>
    <?php
         include "footer.php"
    
     ?>
    <script src="js/script.js"></script>
</body>
</html>