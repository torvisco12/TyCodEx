<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Iniciar Sesión</title>
    <link rel="icon" href="../assets/img/logo.png" type="image/png" />
    <link rel="stylesheet" href="css/bootstrap.css" />
    <link rel="stylesheet" href="./css/Styles.css" />
    <!-- Font Awesome para iconos -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
    <style>
    /* Puedes agregar estilos adicionales aquí si quieres */
    </style>
</head>
<body>
   <!-- ADD: Back button icon -->
   <a href="../index.php" class="back-button" id="backButton">
        <i class="fas fa-chevron-left"></i>
  </a>
    <!-- END ADD -->
  
  <main class="bg-sign-in d-flex justify-content-center align-items-center">
      <div class="form-sign-in bg-white mt-2 h-auto mb-2 text-center pt-2 pe-4 ps-4 d-flex flex-column">
        <h1 class="E-classe text-start ms-3 ps-1">TyCodEx</h1>
        <div>
          <h2 class="sign-in text-uppercase">Iniciar Sesión</h2>
          <p>Ingresa tus credenciales para acceder a tu cuenta</p>
        </div>
        <?php
          if(isset($_GET['error'])){
            if($_GET['error'] == "please enter your email or password"){
              echo '<div class="alert alert-danger" role="alert">
            Por favor, ingresa tu email o contraseña
          </div>';
            }
            elseif($_GET['error'] == "email or password not found"){
              echo '<div class="alert alert-danger" role="alert">
              Email o contraseña no encontrados
          </div>';
            }
          }    
        ?>
        <form method="POST" action="login.php">
          <div class="mb-3 mt-3 text-start">
            <label for="email">Email:</label>
            <input
              type="email"
              class="form-control"
              id="email"
              placeholder="Ingresa tu email"
              name="email"
              value="<?php if(isset($_COOKIE['email'])) {echo $_COOKIE['email'];} ?>"
            />
          </div>
          <div class="mb-3 text-start">
            <label for="pwd">Contraseña:</label>
            <input
              type="password"
              class="form-control"
              id="pwd"
              placeholder="Ingresa tu contraseña"
              name="pass"
              value="<?php if(isset($_COOKIE['password'])) {echo $_COOKIE['password'];} ?>"
              autocomplete="on"
            />
          </div>
          <div class="mb-3 form-check d-flex gap-2">
            <input type="checkbox" class="form-check-input" id="exampleCheck1" name="check" />
            <label class="form-check-label" for="exampleCheck1">Recuérdame</label>
          </div>
          <button type="submit" name="submit" class="btn text-white w-100 text-uppercase">Iniciar Sesión</button>
          <p class="mt-4">¿Olvidaste tu contraseña? <a href="resetpass.php">Restablecer contraseña</a></p>
        </form>
        <button href="" class="btn-register btn btn-success mb-3">Crear Cuenta</button>
      </div>
  </main>
  <div class="bg"></div>
  
  <!-- Sección de registro -->
  <div class="register d-flex justify-content-center align-items-center">
    <div class="sign-up bg-white mt-2 h-auto mb-2 text-center pt-4 pb-3 pe-4 ps-4 d-flex flex-column">
      <div>
        <h2 class="sign-in text-uppercase">Regístrate</h2>
      </div>
      <form method="POST" id="signup" action="createaccout.php">
        <div class="mb-3 mt-3 text-start">
          <label class="label-signup" for="username">Nombre de usuario: <span class="valid"></span></label>
          <input type="text" class="form-control" id="username" placeholder="Ingresa tu usuario" name="username" />
        </div>
        <div class="mb-3 text-start">
          <label class="label-signup" for="email">Email: <span class="valid"></span></label>
          <input type="email" class="form-control" id="Email" placeholder="Ingresa tu email" name="email" />
        </div>
        <div class="mb-3 text-start">
          <label class="label-signup" for="pwd">Crear Contraseña: <span class="valid"></span></label>
          <input type="password" class="form-control" id="Pwd" placeholder="Ingresa contraseña" name="pass" autocomplete="on" />
        </div>
        <div class="mb-3 text-start">
          <label class="label-signup" for="conPwd">Confirmar Contraseña: <span class="valid"></span></label>
          <input type="password" class="form-control" id="conPwd" placeholder="Confirma tu contraseña" name="conPass" autocomplete="on" />
        </div>
        <button type="submit" name="submit" class="btn text-white w-100 text-uppercase">Registrarse</button>
        <p class="mt-4">¿Ya tienes cuenta? <a href="index.php">Inicia Sesión</a></p>
      </form>
    </div>
  </div>

  <script src="/js/bootstrap.bundle.js"></script>
  <script src="./js/validation.js"></script>
  <script>
    // Funcionalidad para el botón atrás
    document.getElementById('backBtn').addEventListener('click', function(e) {
      e.preventDefault();
      history.back();
    });
  </script>
</body>
</html>