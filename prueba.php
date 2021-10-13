<?php

echo "<!DOCTYPE html >
<html class='pruebaphp'>
<head>
<title>PHP</title>
<link rel='stylesheet' href='styles/styles.css'>
</head>
<body >



<div class=miau>
<div class='tituloLogin'>Login</div>

 <form method='post'  class='login' id='login' action='./login.php'>


<input name='usr' class='usr inputs' placeholder='usr' type='text' tabindex='1' required autofocus>


<input name='contrasenya' class='contrasenya inputs' placeholder='contrasenya' type='password' tabindex='1' required autofocus>
 
 
     <button class='enviarLogin' name='submit ' type='submit ' id='contact-submit ' data-submit='...Enviant '>Enviar</button>
 
 </form>

 
</div>

    <div class='mal' id='mal' style='width: 500px;height: 500px; background-color: black;position: absolute;margin-bottom: 20%;opacity: 0;'></div>

</body>
</html> ";


?>