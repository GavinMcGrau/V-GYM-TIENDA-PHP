<?php
  session_start();
  include "plantillaHtmlAdmin.php";
  if($correo == null || $rolUsuario != "admin"){
      header("Location: paginaUsuario.php");
    }
  include "connection.php";
  
  
  
  $correoUsuario = $_POST['correoUsuario'];
  $nombreUsuario=$_POST['nombreUsuario'];
  $imagenUsuario = $_POST['imagenUsuario'];
  $contrasenyaUsuario=password_hash($_POST['contrasenyaUsuario'], PASSWORD_DEFAULT);
  $edadUsuario=$_POST['edadUsuario'];
  $pesoUsuario=$_POST['pesoUsuario'];
  $alturaUsuario=$_POST['alturaUsuario'];
    
  if($imagenUsuario != ""){
  
     
      $sqlChangeAvatar="UPDATE usuario SET nombre='$nombreUsuario', contrasenya='$contrasenyaUsuario',correo='$correoUsuario',imagen='$imagenUsuario',edad='$edadUsuario',peso='$pesoUsuario',altura='$alturaUsuario' where correo= '$correoUsuario'";
      $sqlquery=mysqli_query($con,$sqlChangeAvatar);
  }else{
      $sqlChangeAvatar="UPDATE usuario SET nombre='$nombreUsuario', contrasenya='$contrasenyaUsuario',correo='$correoUsuario',edad='$edadUsuario',peso='$pesoUsuario',altura='$alturaUsuario' where id= '$correoUsuario'";
  $sqlquery=mysqli_query($con,$sqlChangeAvatar);
  }
  
  
  header('location:adminUsuario.php');
  
  
  
  
  
  ?>


