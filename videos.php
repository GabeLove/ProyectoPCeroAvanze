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
                <a href="videos.php">Videos</a>
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
    

    <div class="menuvideos">
        <h1>Videos que te enseñaran como debes colocar cada componente de la computadora</h1>
        <h2 class="titulovideo">Lo primero es el procesador</h2>
        <p class="subtitulovideo">El primer paso, debemos colocar el procesador en la tarjeta madre.</p>
        <iframe width="560" height="315" src="https://www.youtube.com/embed/lR2V2SMh4-Y" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        
        <h2 class="titulovideo">Como colocar la memoria RAM</h2>
        <p class="subtitulovideo">Despues de haber colocado correctamente el procesador en la tarjeta madre lo que sigue es colocar la memoria RAM, ya sea una o varias.</p>    
        <iframe width="560" height="315" src="https://www.youtube.com/embed/pLx8gq3E_k4" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>                

        <h2 class="titulovideo">La tarjeta madre en el gabinete</h2>
        <p class="subtitulovideo">El siguiente paso sera colocar la tarjeta madre con el procesador y la memoria RAM ya colocados en el gabinete.</p>                
        <iframe width="560" height="315" src="https://www.youtube.com/embed/f2kia_8LifY" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>    

        <h2 class="titulovideo">Almacenamiento</h2>
        <p class="subtitulovideo">Para colocar el almacenamiento debemos saber de que tipo es nuestro disco, si es de tipo SSD normal o mecanico como los que se muestran en las imagenes, debemos seguir los pasos del siguiente video.</p>                    
        <img src="img/disco01.png" style="width: 350px;" alt="">
        <img src="img/discomecanico.png" style="height: 230px;" alt=""> <br>
        <iframe width="560" height="315" src="https://www.youtube.com/embed/qhRFcAD_ceg" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

        <p class="subtitulovideo">Si tu disco es un M.2, como el que se ve en la siguiente imagen, su instalación es diferente, en el siguiente video se muestra como se debe colocar ya que este va en la tarjeta madre y no necesita de un conector.</p>                    
        <img src="img/disco04.png" style="width: 350px;" alt=""> <br>
        <iframe width="560" height="315" src="https://www.youtube.com/embed/-UJl1-41Whc" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    
        <h2 class="titulovideo">Fuente de poder</h2>
        <p class="subtitulovideo">Para colocar el almacenamiento debemos saber de que tipo es nuestro disco, si es de tipo SSD normal o mecanico como los que se muestran en las imagenes, debemos seguir los pasos del siguiente video.</p>                    
        <iframe width="560" height="315" src="https://www.youtube.com/embed/LYi3qNiHKvQ" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

        <h2 class="titulovideo">Tarjeta de video</h2>
        <p class="subtitulovideo">Si en tu ensamble decidiste añadirle una tarjeta de video, aunque si no decidiste incluirla no pasara nada ya que sin esta puedes usar la computadora con normalidad.</p>                       
        <iframe width="560" height="315" src="https://www.youtube.com/embed/T4tzxi9fIBI" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    


        <h2 class="titulovideo">Que hacer despues de que ya hayamos instalado bien todos los componentes</h2>
        <p class="subtitulovideo">Si en tu ensamble decidiste añadirle una tarjeta de video, aunque si no decidiste incluirla no pasara nada ya que sin esta puedes usar la computadora con normalidad.</p>   
        <iframe width="560" height="315" src="https://www.youtube.com/embed/P-gMAuc5KxM" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

            <p class="subtitulovideo">Si seguiste todos los pasos de los videos correctamente tu computadora debera iniciar correctamente ya para que la puedas usar para tus actividades.</p>   
    </div>
   <?php
         include "footer.php"
    
     ?>

<!--Aqui se muestra la pagina si el usuario no ha iniciado sesion-->
    <?php else: ?>
       

   <?php
         include "footer.php"
    
     ?>
    <?php endif; ?>

    <script src="js/script.js"></script>
</body>
</html>