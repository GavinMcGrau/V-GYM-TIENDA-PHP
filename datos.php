<?php

include "connection.php";
$usr=$_POST['usr'];
$contrasenya=$_POST['contrasenya1'];
$correo=$_POST['correo'];
session_start();



if(!$con){
    die("Sin conexion".msqli_connect_error);
}else{

    mysqli_set_charset($con,"utf8");
}

$sql ="INSERT INTO `usuario`(`nombre`,`contrasenya`,`correo`) VALUES ('".$usr."','".$contrasenya."','".$correo."')";
$consulta=mysqli_query($con,$sql);

if(!$consulta){

    ?>
    <!DOCTYPE html>
<html lang="en" class="bodyLogin" id="bodyLogin">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="styles/styles.css">
</head>

<body >


<video autoplay muted loop id="backVideo">
    
            <source src="/src/videoplayback (1) (1).mp4 " type="video/mp4">
  </video>
    <div class=miau>
    

        <div class="mal" id="mal">Este correo ya esta registrado
            <div class="imagenWrong" id="imagenWrong"></div>

            <button onclick="window.location.href='/prueba.php'" id="volver" class="volver">Volver</button>
 
        </div>


    </div>



</body>

</html>

<?php
 
}else{
	
    header('Location: index.php');
}

?>






 

