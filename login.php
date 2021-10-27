
<?php
include "connection.php";
session_start();

$usr=$_POST['usr'];
$contrasenya2=$_POST['contrasenya'];
/* $_SESSION['usr']=$_POST['usr'];
$_SESSION['contrasenya2']=$_POST['contrasenya']; */


$sql2 = "SELECT COUNT(*) as contar from usuario where nombre='$usr' and contrasenya='$contrasenya2'";
/* $sql2 = "SELECT nombre,contrasenya from usuario where nombre='".$usr."' && contrasenya='".$contrasenya2."'";*/

$consultas=mysqli_query($con,$sql2);
$array = mysqli_fetch_array($consultas);

if($array ['contar']>0 ){?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="styles/styles.css">
</head>


<body>
    <div id="barra" class="barra" >
        <div id="imagenPerfil" class="imagenPerfil" style="background-image: url(/images/perfil/random.jpg);"> 
            <div id="cambioImagen" class="cambioImagen"  onclick="window.location=`imagenesPerfil.php`"></div>
            </div>
        <div id="nombre" class="nombre">Bienvenido <?php echo $usr;?></div>
    
    </div>
    <div id="lateral" class="lateral">
       <div class="anyadirActividad">
 </div>
    </div>



    
    <div id="contenido" class="contenido">
    
        <div id="bienvenida" class="bienvenida">Estos son tus objetivos <?php echo $usr;?></div>
    
        <div class="productos" id="productos">
        <div class="Lunes wrapper">
        <div class="one wrapperSon">One</div>
    <div class="two wrapperSon">Two</div>
    <div class="three wrapperSon">Three</div>
    <div class="four wrapperSon">Four</div>
    <div class="five wrapperSon">Five</div>
    <div class="six wrapperSon">six</div>
    <div class="seven wrapperSon">Seven</div>
    <div class="eigth wrapperSon">eigth</div>
    <div class="nine wrapperSon">Nine</div>
</div>
<br>
<div class="Martes wrapper">

<div class="one wrapperSon">One</div>
    <div class="two wrapperSon">Two</div>
    <div class="three wrapperSon">Three</div>
    <div class="four wrapperSon">Four</div>
    <div class="five wrapperSon">Five</div>
    <div class="six wrapperSon">six</div>
    <div class="seven wrapperSon">Seven</div>
    <div class="eigth wrapperSon">eigth</div>
    <div class="nine wrapperSon">Nine</div>
</div>
<br>
<div class="Miercoles wrapper">

<div class="one wrapperSon">One</div>
    <div class="two wrapperSon">Two</div>
    <div class="three wrapperSon">Three</div>
    <div class="four wrapperSon">Four</div>
    <div class="five wrapperSon">Five</div>
    <div class="six wrapperSon">six</div>
    <div class="seven wrapperSon">Seven</div>
    <div class="eigth wrapperSon">eigth</div>
    <div class="nine wrapperSon">Nine</div>
</div>
<br>
<div class="jueves wrapper">

<div class="one wrapperSon">One</div>
    <div class="two wrapperSon">Two</div>
    <div class="three wrapperSon">Three</div>
    <div class="four wrapperSon">Four</div>
    <div class="five wrapperSon">Five</div>
    <div class="six wrapperSon">six</div>
    <div class="seven wrapperSon">Seven</div>
    <div class="eigth wrapperSon">eigth</div>
    <div class="nine wrapperSon">Nine</div>
</div>
<br>
<div class="viernes wrapper">
<div class="one wrapperSon">One</div>
    <div class="two wrapperSon">Two</div>
    <div class="three wrapperSon">Three</div>
    <div class="four wrapperSon">Four</div>
    <div class="five wrapperSon">Five</div>
    <div class="six wrapperSon">six</div>
    <div class="seven wrapperSon">Seven</div>
    <div class="eigth wrapperSon">eigth</div>
    <div class="nine wrapperSon">Nine</div>
</div>
<br>
<div class="Sabado wrapper">

<div class="one wrapperSon">One</div>
    <div class="two wrapperSon">Two</div>
    <div class="three wrapperSon">Three</div>
    <div class="four wrapperSon">Four</div>
    <div class="five wrapperSon">Five</div>
    <div class="six wrapperSon">six</div>
    <div class="seven wrapperSon">Seven</div>
    <div class="eigth wrapperSon">eigth</div>
    <div class="nine wrapperSon">Nine</div>
</div>
<br>
<div class="domingo wrapper">

<div class="one wrapperSon">One</div>
    <div class="two wrapperSon">Two</div>
    <div class="three wrapperSon">Three</div>
    <div class="four wrapperSon">Four</div>
    <div class="five wrapperSon">Five</div>
    <div class="six wrapperSon">six</div>
    <div class="seven wrapperSon">Seven</div>
    <div class="eigth wrapperSon">eigth</div>
    <div class="nine wrapperSon">Nine</div>
</div>
        </div>
    </div>
    
    
    </body>

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
