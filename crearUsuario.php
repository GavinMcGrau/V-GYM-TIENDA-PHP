<?php

echo "<!DOCTYPE html >
<html class='pruebaphp'>
<head>
<title>PHP</title>
<link rel='stylesheet' href='styles/styles.css'>
</head>
<body >



<div class=miau>
<div class='tituloLogin'>Crear Usuario</div>

 <form method='post'  class='login' id='login' action='./datos.php'>

 <div class='enlaceRegister' id='enlaceRegister' ><a class='loginDirect' id='loginDirect' href='/prueba.php'>Log In</a></div>
<input name='usr' class='usr inputs' placeholder='usuario' type='text' tabindex='1' required autofocus>    
 
 <input name='correo' class='correo inputs' placeholder='correo' type='mail' tabindex='1' required autofocus>
 <input name='contrasenya1' class='contrasenya1 inputs' placeholder='contrasenya' type='password' tabindex='1' required autofocus>
  
 <button class='enviarLogin' name='submit ' type='submit ' id='contact-submit ' data-submit='...Enviant '>Enviar</button>
 
 </form>

 
</div>



</body>
</html> ";


?>