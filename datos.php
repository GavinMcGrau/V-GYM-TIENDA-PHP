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
    die(" Error en el insert");
 
}else{
	
    header('Location: index.html');
}








 

