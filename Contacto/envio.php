<?php
// Incluye la conexión PDO
include('../admin/conexion.php');

// Verifica que la conexión PDO existe y funciona
if (!$con) {
    die("No se pudo establecer la conexión");
}

// Obtén los datos del formulario
$nombre = $_POST['contactName'];
$email = $_POST['contactEmail'];
$asunto = $_POST['contactSubject'];
$mensaje = $_POST['contactMessage'];

// Inserta en la base de datos
try {
    $sql = "INSERT INTO mensajes_contacto (nombre, email, asunto, mensaje) VALUES (?, ?, ?, ?)";
    $stmt = $con->prepare($sql);
    $stmt->execute([$nombre, $email, $asunto, $mensaje]);
    // En lugar de redireccionar, simplemente establecemos una variable para mostrar el modal
    $mostrar_modal = true;
} catch (PDOException $e) {
    echo "Error en la consulta: " . $e->getMessage();
    $mostrar_modal = false;
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8" />
<title>Mensaje enviado</title>
<!-- Bootstrap CSS para el modal -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<!-- Aquí podrías poner contenido adicional si lo deseas -->

<!-- Modal de Gracias -->
<div class="modal fade" id="graciasModal" tabindex="-1" aria-labelledby="graciasLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="graciasLabel">¡Gracias!</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Cerrar"></button>
      </div>
      <div class="modal-body text-center">
        <p>Tu mensaje ha sido enviado correctamente.</p>
        <a href="../index.php" class="btn btn-primary">Volver al inicio</a>
      </div>
    </div>
  </div>
</div>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

<script>
<?php if (isset($mostrar_modal) && $mostrar_modal): ?>
  var myModal = new bootstrap.Modal(document.getElementById('graciasModal'), {});
  window.onload = function() {
    myModal.show();
  };
<?php endif; ?>
</script>

</body>
</html>