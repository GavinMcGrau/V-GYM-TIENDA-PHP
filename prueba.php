<!DOCTYPE html >
<html class='pruebaphp'>
<head>
<link rel="shortcut icon" href="https://www.creativefabrica.com/wp-content/uploads/2019/02/Monogram-BE-Logo-Design-by-Greenlines-Studios.jpg">
<title>Login</title>
<link rel='stylesheet' href='styles/styles.css'>
</head>
<body >


<div class=miau>
<div class='tituloLogin'>Log In</div>

<video autoplay muted loop id="backVideo">
    <source src="/src/videoplayback (1) (1).mp4 " type="video/mp4">
  </video>

 <form method='post'  class='login' id='login' action='./login.php'>
 <div class="enlaceRegister" id="enlaceRegister" ><a class="loginDirect" id="loginDirect" href="/crearUsuario.php">Sing In</a></div>

<input name='correo' class='usr inputs' placeholder='Correo' type='email' tabindex='1' required autofocus>


<input name='contrasenya' class='contrasenya inputs' placeholder='contrasenya' type='password' tabindex='1' required autofocus>
 
 
     <button class='enviarLogin' name='submit ' type='submit ' id='contact-submit ' data-submit='...Enviant '>Enviar</button>
 
 </form>

 
</div>

<!--     <div class='mal' id='mal' style='width: 500px;height: 500px; background-color: black;position: absolute;margin-bottom: 20%;opacity: 0;'></div>
 -->
</body>
</html>