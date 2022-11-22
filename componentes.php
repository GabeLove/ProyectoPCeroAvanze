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


    
    <section class="listarcomponentes">
        <h1>Componentes</h1>       

        <ul>
            
            <li><a href="#idcpu1"><Button id="boton1" onclick="mostrarcpu();" onclick="noocultarcpu();">Procesadores</Button></a></li>
            <li><a href="#idmadre1"><Button id="boton1" onclick="mostrarmadre();">Tarjetas Madre</Button></a></li>
            <li><a href="#idram1"><Button id="boton1" onclick="mostrarram();">Memoria RAM</Button></a></li>
            <li><a href="#iddisco1"><Button id="boton1" onclick="mostrardisco();">Almacenamiento</Button></a></li>
            <li><a href="#idfuente1"><Button id="boton1" onclick="mostrarfuente();">Fuentes de poder</Button></a></li>
            <li><a href="#idvideo1"><Button id="boton1" onclick="mostrarvideo();">Tarjetas de video</Button></a></li>
            <li><a href="#idtodos1"><Button id="boton1" onclick="mostrartodos();">Todos</Button></a></li>
        </ul>

<!--Procesadores-->

<div id="idcpu1">
        
        <div class="texto1" >
            <h1>Procesadores</h1>
        </div>
           <?php
           $response = json_decode(file_get_contents('http://localhost/ProyectoPCeroAvanze/api/productos/api-productos.php?categoria=procesador&&nivel=1'),true);
            if($response['statuscode']==200){
                foreach($response['items'] as $item){
                    include('layout/items.php');
                }
    
            }else{
                echo $response['response'];
            }
            $response = json_decode(file_get_contents('http://localhost/ProyectoPCeroAvanze/api/productos/api-productos.php?categoria=procesador&&nivel=2'),true);
            if($response['statuscode']==200){
                foreach($response['items'] as $item){
                    include('layout/items.php');
                }
    
            }else{
                echo $response['response'];
            }
            $response = json_decode(file_get_contents('http://localhost/ProyectoPCeroAvanze/api/productos/api-productos.php?categoria=procesador&&nivel=3'),true);
            if($response['statuscode']==200){
                foreach($response['items'] as $item){
                    include('layout/items.php');
                }
    
            }else{
                echo $response['response'];
            }
           ?>
    
        </div>

<!--Tarjea Madre-->
    <div id="idmadre1">
        
        <div class="texto1" >
            <h1>Tarjetas Madre</h1>
        </div>
           <?php
           $response = json_decode(file_get_contents('http://localhost/ProyectoPCeroAvanze/api/productos/api-productos.php?categoria=tarjetamadre&&nivel=1'),true);
            if($response['statuscode']==200){
                foreach($response['items'] as $item){
                    include('layout/items.php');
                }
    
            }else{
                echo $response['response'];
            }
            $response = json_decode(file_get_contents('http://localhost/ProyectoPCeroAvanze/api/productos/api-productos.php?categoria=tarjetamadre&&nivel=2'),true);
            if($response['statuscode']==200){
                foreach($response['items'] as $item){
                    include('layout/items.php');
                }
    
            }else{
                echo $response['response'];
            }
            $response = json_decode(file_get_contents('http://localhost/ProyectoPCeroAvanze/api/productos/api-productos.php?categoria=tarjetamadre&&nivel=3'),true);
            if($response['statuscode']==200){
                foreach($response['items'] as $item){
                    include('layout/items.php');
                }
    
            }else{
                echo $response['response'];
            }
           ?>
    
        </div>

     <!--Discos-->
        <div id="iddisco1">
        
        <div class="texto1" >
            <h1>Almacenamiento</h1>
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
            $response = json_decode(file_get_contents('http://localhost/ProyectoPCeroAvanze/api/productos/api-productos.php?categoria=disco&&nivel=2'),true);
            if($response['statuscode']==200){
                foreach($response['items'] as $item){
                    include('layout/items.php');
                }
    
            }else{
                echo $response['response'];
            }
            $response = json_decode(file_get_contents('http://localhost/ProyectoPCeroAvanze/api/productos/api-productos.php?categoria=disco&&nivel=3'),true);
            if($response['statuscode']==200){
                foreach($response['items'] as $item){
                    include('layout/items.php');
                }
    
            }else{
                echo $response['response'];
            }
           ?>
    
        </div>

        <!--Fuentes-->
        <div id="idfuente1">
        
        <div class="texto1" >
            <h1>Fuentes de poder</h1>
        </div>
           <?php
           $response = json_decode(file_get_contents('http://localhost/ProyectoPCeroAvanze/api/productos/api-productos.php?categoria=fuente&&nivel=1'),true);
            if($response['statuscode']==200){
                foreach($response['items'] as $item){
                    include('layout/items.php');
                }
    
            }else{
                echo $response['response'];
            }
            $response = json_decode(file_get_contents('http://localhost/ProyectoPCeroAvanze/api/productos/api-productos.php?categoria=fuente&&nivel=2'),true);
            if($response['statuscode']==200){
                foreach($response['items'] as $item){
                    include('layout/items.php');
                }
    
            }else{
                echo $response['response'];
            }
            $response = json_decode(file_get_contents('http://localhost/ProyectoPCeroAvanze/api/productos/api-productos.php?categoria=fuente&&nivel=3'),true);
            if($response['statuscode']==200){
                foreach($response['items'] as $item){
                    include('layout/items.php');
                }
    
            }else{
                echo $response['response'];
            }
           ?>
    
        </div>
<!--RAM-->
<div id="idram1">
        
        <div class="texto1" >
            <h1>Memoria RAM</h1>
        </div>
           <?php
           $response = json_decode(file_get_contents('http://localhost/ProyectoPCeroAvanze/api/productos/api-productos.php?categoria=ram&&nivel=1'),true);
            if($response['statuscode']==200){
                foreach($response['items'] as $item){
                    include('layout/items.php');
                }
    
            }else{
                echo $response['response'];
            }
            $response = json_decode(file_get_contents('http://localhost/ProyectoPCeroAvanze/api/productos/api-productos.php?categoria=ram&&nivel=2'),true);
            if($response['statuscode']==200){
                foreach($response['items'] as $item){
                    include('layout/items.php');
                }
    
            }else{
                echo $response['response'];
            }
            $response = json_decode(file_get_contents('http://localhost/ProyectoPCeroAvanze/api/productos/api-productos.php?categoria=ram&&nivel=3'),true);
            if($response['statuscode']==200){
                foreach($response['items'] as $item){
                    include('layout/items.php');
                }
    
            }else{
                echo $response['response'];
            }
           ?>
    
        </div>

        <!--Tarjetas de video-->
        <div id="idvideo1">
        
        <div class="texto1" >
            <h1>Tarjetas de video</h1>
        </div>
           <?php
           $response = json_decode(file_get_contents('http://localhost/ProyectoPCeroAvanze/api/productos/api-productos.php?categoria=video&&nivel=1'),true);
            if($response['statuscode']==200){
                foreach($response['items'] as $item){
                    include('layout/items.php');
                }
    
            }else{
                echo $response['response'];
            }
            $response = json_decode(file_get_contents('http://localhost/ProyectoPCeroAvanze/api/productos/api-productos.php?categoria=video&&nivel=2'),true);
            if($response['statuscode']==200){
                foreach($response['items'] as $item){
                    include('layout/items.php');
                }
    
            }else{
                echo $response['response'];
            }
            $response = json_decode(file_get_contents('http://localhost/ProyectoPCeroAvanze/api/productos/api-productos.php?categoria=video&&nivel=3'),true);
            if($response['statuscode']==200){
                foreach($response['items'] as $item){
                    include('layout/items.php');
                }
    
            }else{
                echo $response['response'];
            }
           ?>
    
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

    <section class="listarcomponentes">
        <h1>Componentes</h1>       

        <ul>
            
            <li><a href="#idcpu1"><Button id="boton1" onclick="mostrarcpu();" onclick="noocultarcpu();">Procesadores</Button></a></li>
            <li><a href="#idmadre1"><Button id="boton1" onclick="mostrarmadre();">Tarjetas Madre</Button></a></li>
            <li><a href="#idram1"><Button id="boton1" onclick="mostrarram();">Memoria RAM</Button></a></li>
            <li><a href="#iddisco1"><Button id="boton1" onclick="mostrardisco();">Almacenamiento</Button></a></li>
            <li><a href="#idfuente1"><Button id="boton1" onclick="mostrarfuente();">Fuentes de poder</Button></a></li>
            <li><a href="#idvideo1"><Button id="boton1" onclick="mostrarvideo();">Tarjetas de video</Button></a></li>
            <li><a href="#idtodos1"><Button id="boton1" onclick="mostrartodos();">Todos</Button></a></li>
        </ul>

<!--Procesadores-->

<div id="idcpu1">
        
        <div class="texto1" >
            <h1>Procesadores</h1>
        </div>
           <?php
           $response = json_decode(file_get_contents('http://localhost/ProyectoPCeroAvanze/api/productos/api-productos.php?categoria=procesador&&nivel=1'),true);
            if($response['statuscode']==200){
                foreach($response['items'] as $item){
                    include('layout/items.php');
                }
    
            }else{
                echo $response['response'];
            }
            $response = json_decode(file_get_contents('http://localhost/ProyectoPCeroAvanze/api/productos/api-productos.php?categoria=procesador&&nivel=2'),true);
            if($response['statuscode']==200){
                foreach($response['items'] as $item){
                    include('layout/items.php');
                }
    
            }else{
                echo $response['response'];
            }
            $response = json_decode(file_get_contents('http://localhost/ProyectoPCeroAvanze/api/productos/api-productos.php?categoria=procesador&&nivel=3'),true);
            if($response['statuscode']==200){
                foreach($response['items'] as $item){
                    include('layout/items.php');
                }
    
            }else{
                echo $response['response'];
            }
           ?>
    
        </div>

<!--Tarjea Madre-->
    <div id="idmadre1">
        
        <div class="texto1" >
            <h1>Tarjetas Madre</h1>
        </div>
           <?php
           $response = json_decode(file_get_contents('http://localhost/ProyectoPCeroAvanze/api/productos/api-productos.php?categoria=tarjetamadre&&nivel=1'),true);
            if($response['statuscode']==200){
                foreach($response['items'] as $item){
                    include('layout/items.php');
                }
    
            }else{
                echo $response['response'];
            }
            $response = json_decode(file_get_contents('http://localhost/ProyectoPCeroAvanze/api/productos/api-productos.php?categoria=tarjetamadre&&nivel=2'),true);
            if($response['statuscode']==200){
                foreach($response['items'] as $item){
                    include('layout/items.php');
                }
    
            }else{
                echo $response['response'];
            }
            $response = json_decode(file_get_contents('http://localhost/ProyectoPCeroAvanze/api/productos/api-productos.php?categoria=tarjetamadre&&nivel=3'),true);
            if($response['statuscode']==200){
                foreach($response['items'] as $item){
                    include('layout/items.php');
                }
    
            }else{
                echo $response['response'];
            }
           ?>
    
        </div>

     <!--Discos-->
        <div id="iddisco1">
        
        <div class="texto1" >
            <h1>Almacenamiento</h1>
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
            $response = json_decode(file_get_contents('http://localhost/ProyectoPCeroAvanze/api/productos/api-productos.php?categoria=disco&&nivel=2'),true);
            if($response['statuscode']==200){
                foreach($response['items'] as $item){
                    include('layout/items.php');
                }
    
            }else{
                echo $response['response'];
            }
            $response = json_decode(file_get_contents('http://localhost/ProyectoPCeroAvanze/api/productos/api-productos.php?categoria=disco&&nivel=3'),true);
            if($response['statuscode']==200){
                foreach($response['items'] as $item){
                    include('layout/items.php');
                }
    
            }else{
                echo $response['response'];
            }
           ?>
    
        </div>

        <!--Fuentes-->
        <div id="idfuente1">
        
        <div class="texto1" >
            <h1>Fuentes de poder</h1>
        </div>
           <?php
           $response = json_decode(file_get_contents('http://localhost/ProyectoPCeroAvanze/api/productos/api-productos.php?categoria=fuente&&nivel=1'),true);
            if($response['statuscode']==200){
                foreach($response['items'] as $item){
                    include('layout/items.php');
                }
    
            }else{
                echo $response['response'];
            }
            $response = json_decode(file_get_contents('http://localhost/ProyectoPCeroAvanze/api/productos/api-productos.php?categoria=fuente&&nivel=2'),true);
            if($response['statuscode']==200){
                foreach($response['items'] as $item){
                    include('layout/items.php');
                }
    
            }else{
                echo $response['response'];
            }
            $response = json_decode(file_get_contents('http://localhost/ProyectoPCeroAvanze/api/productos/api-productos.php?categoria=fuente&&nivel=3'),true);
            if($response['statuscode']==200){
                foreach($response['items'] as $item){
                    include('layout/items.php');
                }
    
            }else{
                echo $response['response'];
            }
           ?>
    
        </div>
<!--RAM-->
<div id="idram1">
        
        <div class="texto1" >
            <h1>Memoria RAM</h1>
        </div>
           <?php
           $response = json_decode(file_get_contents('http://localhost/ProyectoPCeroAvanze/api/productos/api-productos.php?categoria=ram&&nivel=1'),true);
            if($response['statuscode']==200){
                foreach($response['items'] as $item){
                    include('layout/items.php');
                }
    
            }else{
                echo $response['response'];
            }
            $response = json_decode(file_get_contents('http://localhost/ProyectoPCeroAvanze/api/productos/api-productos.php?categoria=ram&&nivel=2'),true);
            if($response['statuscode']==200){
                foreach($response['items'] as $item){
                    include('layout/items.php');
                }
    
            }else{
                echo $response['response'];
            }
            $response = json_decode(file_get_contents('http://localhost/ProyectoPCeroAvanze/api/productos/api-productos.php?categoria=ram&&nivel=3'),true);
            if($response['statuscode']==200){
                foreach($response['items'] as $item){
                    include('layout/items.php');
                }
    
            }else{
                echo $response['response'];
            }
           ?>
    
        </div>

        <!--Tarjetas de video-->
        <div id="idvideo1">
        
        <div class="texto1" >
            <h1>Tarjetas de video</h1>
        </div>
           <?php
           $response = json_decode(file_get_contents('http://localhost/ProyectoPCeroAvanze/api/productos/api-productos.php?categoria=video&&nivel=1'),true);
            if($response['statuscode']==200){
                foreach($response['items'] as $item){
                    include('layout/items.php');
                }
    
            }else{
                echo $response['response'];
            }
            $response = json_decode(file_get_contents('http://localhost/ProyectoPCeroAvanze/api/productos/api-productos.php?categoria=video&&nivel=2'),true);
            if($response['statuscode']==200){
                foreach($response['items'] as $item){
                    include('layout/items.php');
                }
    
            }else{
                echo $response['response'];
            }
            $response = json_decode(file_get_contents('http://localhost/ProyectoPCeroAvanze/api/productos/api-productos.php?categoria=video&&nivel=3'),true);
            if($response['statuscode']==200){
                foreach($response['items'] as $item){
                    include('layout/items.php');
                }
    
            }else{
                echo $response['response'];
            }
           ?>
    
        </div>
        
       
        
         
    </section>

    
   <?php
         include "footer.php"
    
     ?>
    <?php endif; ?>

    <script src="js/script.js"></script>
    <script>
        function mostrarcpu(){
            document.getElementById('idcpu1').style.display='block';
            document.getElementById('idmadre1').style.display='none';
            document.getElementById('idram1').style.display='none';
            document.getElementById('iddisco1').style.display='none';
            document.getElementById('idfuente1').style.display='none';
            document.getElementById('idvideo1').style.display='none';
        }
        function mostrarmadre(){
            document.getElementById('idcpu1').style.display='none';
            document.getElementById('idmadre1').style.display='block';
            document.getElementById('idram1').style.display='none';
            document.getElementById('iddisco1').style.display='none';
            document.getElementById('idfuente1').style.display='none';
            document.getElementById('idvideo1').style.display='none';
        }
        function mostrarram(){
            document.getElementById('idcpu1').style.display='none';
            document.getElementById('idmadre1').style.display='none';
            document.getElementById('idram1').style.display='block';
            document.getElementById('iddisco1').style.display='none';
            document.getElementById('idfuente1').style.display='none';
            document.getElementById('idvideo1').style.display='none';
        }
        function mostrardisco(){
            document.getElementById('idcpu1').style.display='none';
            document.getElementById('idmadre1').style.display='none';
            document.getElementById('idram1').style.display='none';
            document.getElementById('iddisco1').style.display='block';
            document.getElementById('idfuente1').style.display='none';
            document.getElementById('idvideo1').style.display='none'
        }
        function mostrarfuente(){
            document.getElementById('idcpu1').style.display='none';
            document.getElementById('idmadre1').style.display='none';
            document.getElementById('idram1').style.display='none';
            document.getElementById('iddisco1').style.display='none';
            document.getElementById('idfuente1').style.display='block';
            document.getElementById('idvideo1').style.display='none'
        }
        function mostrarvideo(){
            document.getElementById('idcpu1').style.display='none';
            document.getElementById('idmadre1').style.display='none';
            document.getElementById('idram1').style.display='none';
            document.getElementById('iddisco1').style.display='none';
            document.getElementById('idfuente1').style.display='none';
            document.getElementById('idvideo1').style.display='block';
        }
        function mostrartodos(){
            document.getElementById('idcpu1').style.display='block';
            document.getElementById('idmadre1').style.display='block';
            document.getElementById('idram1').style.display='block';
            document.getElementById('iddisco1').style.display='block';
            document.getElementById('idfuente1').style.display='block';
            document.getElementById('idvideo1').style.display='block';
        }


        function noocultartcpu(){
            document.getElementById('idcpu1').style.display='block';
            document.getElementById('idmadre1').style.display='none';
            document.getElementById('idram1').style.display='block';
            document.getElementById('iddisco1').style.display='block';
            document.getElementById('idfuente1').style.display='block';
            document.getElementById('idvideo1').style.display='block';
            
        }


    </script>

</body>
</html>