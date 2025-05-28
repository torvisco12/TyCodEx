<?php
// Incluir la conexión
include 'conexion.php';

// Verificar que se recibe el ID por POST
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['id'])) {
    $id = intval($_POST['id']); // validar y convertir a entero
    
    try {
        $sql = "DELETE FROM mensajes_contacto WHERE id = ?";
        $stmt = $con->prepare($sql);
        $stmt->execute([$id]);
        // Opcional: agregar un mensaje de éxito, ajax, session, etc.
    } catch (PDOException $e) {
        die("Error eliminando el mensaje: " . $e->getMessage());
    }
} else {
    // No se recibió ID, redirige o muestra error
    die("ID no válido");
}

// Después de eliminar, redirecciona de vuelta a la lista
header("Location: mensajes.php");
exit;
?>