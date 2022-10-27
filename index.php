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
    <title>Menu Vertical Resposivo</title>
</head>
<body>
  <?php
  
  include "header.php"
  
  ?>
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
    
</body>
</html>