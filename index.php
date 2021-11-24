<!DOCTYPE html>
<html lang="en">
    <head>
     <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/styles.css">
    <title>Document</title>
</head>
<?php 

session_start();

if($_SESSION != NULL){
header('location:paginaUsuario.php');
}

?>



<body>

    <a class="nombreFit" id="nombre">BreakEnds</a>

    <div class="content">

        <a href="prueba.php" class="loginPage">
            <h3 class="loginPageText">Log In</h3>
        </a>

        <!-- background https://www.youtube.com/watch?v=4-zjQvTDnbw    https://es.savefrom.net/1-youtube-video-downloader-15.html-->


        <video autoplay muted loop id="backVideo">
    <source src="/src/videoplayback (1) (1).mp4 " type="video/mp4">
  </video>
        <a class=" crearPage " href="crearUsuario.php">
            <h3 class="crearPageText">Sing Up</h3>
        </a>


    </div>

</body>

</html>