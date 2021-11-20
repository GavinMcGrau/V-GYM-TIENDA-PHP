<?php  
session_start();
include "connection.php";

 
$id=$_POST["id"];
$checko=$_POST["checo"];



if($checko == "si"){
   
 $sqlCheck="UPDATE actividades SET hecha='no' WHERE id = '$id'";
 $consultas=mysqli_query($con,$sqlCheck);

}elseif($checko == "no"){

    $sqlCheck="UPDATE actividades SET hecha ='si' WHERE id = '$id'";
    $consultas=mysqli_query($con,$sqlCheck);
}

 echo $checko;


 
?>