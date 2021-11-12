<?php

$servidor="localhost";
$usuario="root";
$password="";
$bd="gym";

/* $servidor="localhost/marcgae556.mysql.db:3306";
$usuario="marcgae556";
$password="tempIlerna1";
$bd="usuarios"; */

$con=mysqli_connect($servidor,$usuario,$password,$bd);


if(!$con){
    die("Sin conexion".msqli_connect_error);
}else{

    mysqli_set_charset($con,"utf8");
}


?>