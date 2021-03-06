<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>LOGIN</title>
<link rel="stylesheet" href="public/css/default.css"> 
<link rel="stylesheet" href="public/css/estilos.css">
<link rel="stylesheet" href="public/css/styles.css">
   
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
  <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900'>
  <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=HP Simplified Hans:400,100,300,500,700,900'>
  <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Montserrat:400,700'>
  <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css'>        

</head>
<body>  
<div class="container">
    <br><br><br><br>
    </div>
  <!-- partial:index.partial.html -->
  <div class="form">
      <div class="container">
       <div class="info">
         <h1>INICIAR SESION</h1>
       </div>
      </div>
       <div class="thumbnail"><img src="public/images/logo.png" /></div>
       <!---->
    <form class="register-form" action="controllers/login.php" method="post">
    <input type="hidden" name="action" value="login">
    <!---->
      <input type="text" placeholder="Nombre de usuario" name="usuarioN" id="usuarioN"/>
      <input type="text" placeholder="correo@ejemplo.com" name="correoN" id="correoN"/> 
      <input type="password" placeholder="Contraseña" name="contraseñaN" id="contraseñaN"/>
      <button type="submit" name="crear" onclick="validarform()">CREAR</button>
      <p class="message">¿Ya tienes cuenta? <a href="#">Iniciar sesión</a></p>
    </form>
    <form class="login-form" action="public/validar.php" method="post" name="formlogin" id="formlogin">
      <input type="text" placeholder="Nombre de usuario" name="usuario" id="usuario" />
      <input type="password" placeholder="Contraseña" name="contraseña" id="contraseña"/>
      <button type="submit" name="entrar" >INICIAR</button>
      <p class="message">¿No tienes una cuenta? <a href="#">Crear cuenta</a></p>    
    </form>
  </div>
    <!-- partial -->
  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
  <script src="public/js/script.js"></script>
  <script src="public/js/validarform.js"></script>

</body>
</html>