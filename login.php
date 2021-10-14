<?php
include "connection.php";
session_start();

$usr=$_POST['usr'];
$contrasenya2=$_POST['contrasenya'];
$_SESSION['usr']=$usr;
$_SESSION['contrasenya']=$contrasenya2;
/*
require 'connection.php';
session_start();


 $servidor="localhost";
$usuario="root";
$password="usbw";
$bd="usuarios";

$servidor="localhost/marcgae556.mysql.db:3306";
$usuario="marcgae556";
$password="tempIlerna1";
$bd="usuarios";

$con=mysqli_connect($servidor,$usuario,$password,$bd);

if(!$con){
    die("Sin conexion".msqli_connect_error);
}else{

    mysqli_set_charset($con,"utf8");
} */

/* echo $usr ;
echo $contrasenya2; */

$sql2 = "SELECT COUNT(*) as contar from usuario where nombre='$usr' and contrasenya='$contrasenya2'";
/* $sql2 = "SELECT nombre,contrasenya from usuario where nombre='".$usr."' && contrasenya='".$contrasenya2."'";*/

$consultas=mysqli_query($con,$sql2);
$array = mysqli_fetch_array($consultas);

if($array ['contar']>0 ){
 echo '<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="styles/styles.css">
</head>


<body>
<div id="barra" class="barra">
    <div id="nombre" class="nombre">'.$usr.'</div>

</div>
<div id="lateral" class="lateral">
    <div id="imagenPerfil" class="imagenPerfil" style="background-image: url(/images/perfil/random.jpg);"> 
    <div id="cambioImagen" class="cambioImagen"  onclick="window.location=`imagenesPerfil.php`"></div>
    </div>
</div>
<div id="contenido" class="contenido">

    <div id="bienvenida" class="bienvenida">Bienvenido '.$usr.'!</div>
</div>


</body>';
}else{
 
   echo '<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="styles/styles.css">
</head>

<body class="bodyLogin" id="bodyLogin" style:"background: linear-gradient(to top left, rgba(155, 32, 32, 0.74), rgba(15, 78, 151, 0.74));height: 40vh;
width: 350px;">



    <div class=miau>
        <div class="tituloLogin">Login</div>

        <div class="mal" id="mal">Los datos son incorrectos
            <div class="imagenWrong" id="imagenWrong"></div>

            <button onclick="window.location.href=`/prueba.php`" id="volver" class="volver">Volver</button>

        </div>


    </div>



</body>

</html>';
}


?>




<!-- /* if(!$consultas){

    die("Usuario o contraseña incorrectos");
}else{

      
    echo '<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="styles/styles.css">
</head>

<body>
    <div id="barra" class="barra">
        <div id="nombre" class="nombre">'.$usr.'</div>

    </div>
    <div id="lateral" class="lateral"></div>
    <div id="contenido" class="contenido">

        <div id="bienvenida" class="bienvenida">Bienvenido '.$usr.'!</div>
    </div>


</body>';
}
?> */ -->