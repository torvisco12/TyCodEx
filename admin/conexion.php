<?php 
try {
    $con = new PDO("mysql:host=localhost;dbname=portal", "root", "");
    $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // Conexión exitosa
} catch(PDOException $e) {
    echo "Conexión Fallida: " . $e->getMessage();
}
?>