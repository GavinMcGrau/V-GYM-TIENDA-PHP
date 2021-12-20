<?php 
session_start();
include "connection.php";
$correo=$_SESSION['correo'];   


$foto=file_get_contents($_FILES['foto']['tmp_name']);

$fotoFinal='data:image/;base64,'.base64_encode($foto);

$sqlChangeAvatar="UPDATE usuario SET imagen='$fotoFinal' where correo= '$correo'";
$sqlquery=mysqli_query($con,$sqlChangeAvatar);




header('location: configUsuario.php');


?>

<img src="<?php echo $fotoFinal ?>" alt="">