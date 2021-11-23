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

<body style="overflow:hidden;">
    
</body>

<div class="datosUsuario">
    <div > <img class="imagenUser" src="<?php echo $imagenUser; ?>" alt=""></div>
    <div class="datosUser">
     <h5>Nombre: <?php echo $nombreUser ?></h5>
    <h5>Peso: <?php echo $pesoUser ?> &nbsp&nbspAltura: <?php echo $alturaUser ?>&nbsp&nbsp  Edad: <?php echo $edadUser ?></h5>
   
    
    </div>
</div>

<div class="contenedorCambioDatos"></div>

<div class="cambioAvatar">


    
    <form method='POST' enctype="multipart/form-data"  action="cambioAvatar.php" class="formAvatar">
        <h5>Para cambiar de avatar sube tu imagen</h5>
    <div class="file-input">
        <input type="file" id="file" class="file" name="foto">
        <label for="file">Subir</label>
    </div>
    <button type="submit" class="botonBio" >Enviar
    </form>
</div>

<div class="cambioAvatar">
      <form method='POST' action="cambioBio.php" class="formNombre">
         <h5>nombre</h5>
    <input  ype='text' class="inputNombre" name="nombre" value="<?php echo $nombreUser ?>" >
    
   <div class="formEdad">
         <h5>Edad</h5>
    <input type='number' class="inputBio" name="edad" value="<?php echo $edadUser ?>">
    </div>

    <div class="formPeso">
         <h5>Peso</h5>
    <input type='number' class="inputBio" name="peso" value="<?php echo $pesoUser ?>" >
    </div>
     <div class="formAltura">
         <h5>Altura</h5>
    <input type='double' class="inputBio" name="altura" value="<?php echo $alturaUser ?>" >

    <button type="submit" class="botonBios" >Enviar
    </div>

    </form>

</div>

</body>