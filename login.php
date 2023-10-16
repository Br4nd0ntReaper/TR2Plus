<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/estilos.css">
  <title>Login</title>
</head>
<body>
  <div class="contenedor">
    <!-- <div class="imagen"> -->
      <img src="imagenes/miku.jpg" alt="Vocaloid">
    <!-- </div>  -->
    <div class="formulario">
      <form action="loginlocal.php" method="POST">
        <h2>Iniciar sesión</h2>
        <div class="email">
          <label>Correo Electronico</label>
          <input type="email" name="Correo" id="email" placeholder="Ingrese su correo" required>
        </div>    
        <div class="pass">
          <label>Contraseña</label>
          <input type="password" minlength="8" name="Clave" id="pass" placeholder="Ingrese su clave" required>
        </div>    

        <div class="btn">
          <input type="submit" value="Iniciar Sesión" id="boton" name="btn_login">
        </div>
        <div class="btn">
          ¿No tienes una cuenta? <a href="register.html">Regístrate</a> ahora.
        </div>
        <div class="media-options">
          <?php require ('auth.php')?>
          <a href="<?php echo $client->createAuthUrl() ?>" class="field google" style="text-decoration: none;">
            <img src="imagenes/logoogle.png" class="google-img">
            <span>Iniciar sesión con Google</span>
          </a>
        </div>
        <br>
        <div class="media-options">
          <a href="./signingmicrosoft.php" class="field microsoft" style="text-decoration: none;">
            <img src="imagenes/logomicrosoft.png" class="microsoft-img">
            <span>Iniciar sesión con Microsoft</span>
          </a>
        </div>  
      </form> 
    </div>  
  </div>
  <script src="validar.js"></script>
</body>
</html>