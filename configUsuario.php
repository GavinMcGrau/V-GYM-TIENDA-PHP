<?php

session_start();
include "connection.php";
include "plantillaHtml.php";
$correo = $_SESSION['correo'];

$sqlGetUserData= "SELECT imagen as foto, nombre as nom, edad as age, peso as pes, altura as alt FROM usuario WHERE correo = '$correo' ";
$consulta = mysqli_query($con,$sqlGetUserData);
$dataConsulta=mysqli_fetch_array($consulta);
$imagenUser =  $dataConsulta['foto'];
$nombreUser = $dataConsulta['nom'];
$edadUser = $dataConsulta['age'];
$pesoUser = $dataConsulta['pes'];
$alturaUser= $dataConsulta['alt'];




?>

<div class="datosUsuario">
    <div > <img class="imagenUser" src="<?php echo $imagenUser; ?>" alt=""></div>

</div>

<div class="contenedorCambioDatos"></div>

<div class="cambioAvatar">


    <h5>Para cambiar de avatar introduce la URL de la imagen</h5>
    <form action="cambioAvatar.php" class="formAvatar">
    <input type="text" class="formAvatar">
    </form>


</div>

</body>