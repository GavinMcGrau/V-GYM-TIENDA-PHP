<?php

include "connection.php";
$usr=$_POST['usr'];
$contrasenya=password_hash($_POST['contrasenya1'], PASSWORD_DEFAULT);
$correo=$_POST['correo'];
session_start();



if(!$con){
    die("Sin conexion".msqli_connect_error);
}else{

    mysqli_set_charset($con,"utf8");
}

$comprovarCorreo="SELECT COUNT(*) as contar, correo FROM usuario where correo = '$correo'";
$saberComprovar=mysqli_query($con,$comprovarCorreo);
$obtenerComprovar = mysqli_fetch_array($saberComprovar);


if($obtenerComprovar['contar']> 0){

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
    
$sql ="INSERT INTO `usuario`(`nombre`,`contrasenya`,`correo`,`imagen`) VALUES ('".$usr."','".$contrasenya."','".$correo."','https://www.computerhope.com/jargon/g/guest-user.jpg')";
$consulta=mysqli_query($con,$sql);
	
    header('Location: index.php');
}

?>






 

