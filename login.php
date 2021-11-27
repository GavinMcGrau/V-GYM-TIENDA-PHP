
<?php
include "connection.php";

session_start();
setlocale(LC_ALL,"spanish");


$correo=$_POST['correo'];
$contrasenya2=$_POST['contrasenya'];
$_SESSION['correo']=$_POST['correo'];
$_SESSION['contrasenya']=$_POST['contrasenya'];

$sql1 = "SELECT COUNT(*) as contar from usuario where correo='$correo' and contrasenya='$contrasenya2' and rol='admin'";
$consultas1=mysqli_query($con,$sql1);
$array1 = mysqli_fetch_array($consultas1);

 $sql2 = "SELECT COUNT(*) as contarUser from usuario where correo='$correo' and contrasenya='$contrasenya2'";
$consultas=mysqli_query($con,$sql2);
$array = mysqli_fetch_array($consultas);

if($array1 ['contar']>0 ){
  header('Location: paginaAdmin.php');


   

//Operaciones a realizar

}elseif ($array ['contarUser']>0 ){
   

  header('Location: paginaUsuario.php');


         
                   ?> 




<?php
}else{?>
 
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
    

        <div class="mal" id="mal">Los datos son incorrectos
            <div class="imagenWrong" id="imagenWrong"></div>

            <button onclick="window.location.href='/prueba.php'" id="volver" class="volver">Volver</button>
 
        </div>


    </div>



</body>

</html>

<?php
}
?>


