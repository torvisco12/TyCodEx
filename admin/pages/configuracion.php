<?php
// Modo mantenimiento: activa o desactiva
$modo_mantenimiento = true; // Cambia a false para habilitar la página

if ($modo_mantenimiento) {
?>
<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
<title>Sitio en mantenimiento</title>
<link rel="stylesheet" href="../css/bootstrap.css" />
<style>
  body { display:flex; align-items:center; justify-content:center; height:100vh; background:#f8f9fa; margin:0; }
  .mensaje { text-align:center; padding:20px; background:#fff; box-shadow:0 0 10px rgba(0,0,0,0.1); max-width:400px; margin:auto; }
  h1 { font-size:2em; margin-bottom:10px; }
</style>
</head>
<body>
  <div class="mensaje">
    <h1>Sitio en mantenimiento</h1>
    <p>Estamos trabajando en mejoras. Vuelve pronto.</p>
    <img src="../assets/img/logo2.jpg" alt="logo" width="150"/>
    <a href="dashboard.php" class="btn btn-primary mt-3">Volver</a>
  </div>
</body>
</html>
<?php
  exit; // Detiene la carga del resto del código
}
?>
<!-- Aquí inicia tu código normal si NO está en modo mantenimiento -->
<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
<title>Configuración</title>
<link rel="stylesheet" href="../css/bootstrap.css" />
<link rel="stylesheet" href="../css/style.css" />
<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" crossorigin="anonymous"/>
</head>
<body>
<main class="d-flex" style="min-height:100vh;">
  <!-- Sidebar -->
  <?php include "component/sidebar.php"; ?>
  <!-- Contenido principal -->
  <div class="container-fluid p-4">
    <h2>Configuración de la Cuenta</h2>
    <div class="row g-4">
      <!-- Opciones -->
      <div class="col-md-4">
        <div class="list-group">
          <a href="#perfil" class="list-group-item list-group-item-action" data-target="#perfil">Perfil</a>
          <a href="#cambiar-contraseña" class="list-group-item list-group-item-action" data-target="#cambiar-contraseña">Cambiar Contraseña</a>
          <a href="#preferencias" class="list-group-item list-group-item-action" data-target="#preferencias">Preferencias</a>
        </div>
      </div>
      <!-- Secciones -->
      <div class="col-md-8">
        <div id="perfil" class="d-none">
          <h4>Editar Perfil</h4>
          <form>
            <div class="mb-3">
              <label class="form-label">Nombre</label>
              <input type="text" class="form-control" placeholder="Tu nombre"/>
            </div>
            <div class="mb-3">
              <label class="form-label">Correo electrónico</label>
              <input type="email" class="form-control" placeholder="correo@ejemplo.com"/>
            </div>
            <button class="btn btn-primary">Guardar cambios</button>
          </form>
        </div>
        <div id="cambiar-contraseña" class="d-none">
          <h4>Cambiar Contraseña</h4>
          <form>
            <div class="mb-3">
              <label class="form-label">Contraseña actual</label>
              <input type="password" class="form-control"/>
            </div>
            <div class="mb-3">
              <label class="form-label">Nueva contraseña</label>
              <input type="password" class="form-control"/>
            </div>
            <button class="btn btn-primary">Actualizar contraseña</button>
          </form>
        </div>
        <div id="preferencias" class="d-none">
          <h4>Preferencias</h4>
          <form>
            <div class="form-check mb-2">
              <input class="form-check-input" type="checkbox" id="modoOscuro"/>
              <label class="form-check-label" for="modoOscuro">Modo oscuro</label>
            </div>
            <div class="mb-2">
              <label class="form-label">Idioma</label>
              <select class="form-select">
                <option selected>Selecciona un idioma</option>
                <option>Español</option>
                <option>Inglés</option>
                <option>Francés</option>
              </select>
            </div>
            <button class="btn btn-primary" type="submit">Guardar preferencias</button>
          </form>
        </div>
      </div>
    </div>
  </div>
</main>
<!-- Script para mostrar/ocultar secciones -->
<script>
  document.querySelectorAll('.list-group a').forEach(link => {
    link.addEventListener('click', e => {
      e.preventDefault();
      document.querySelectorAll('div[id]').forEach(d => d.classList.add('d-none'));
      const target = link.getAttribute('href');
      if(target && target.startsWith('#')){
        document.querySelector(target).classList.remove('d-none');
      }
    });
  });
</script>
<script src="../js/bootstrap.bundle.js"></script>
</body>
</html>