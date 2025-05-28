<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Contact Messages</title>
    <link rel="stylesheet" href="../css/bootstrap.css" />
    <link rel="stylesheet" href="../css/style.css" />
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
        integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
</head>
<body class="bg-content">
    <main class="dashboard d-flex">
        <!-- sidebar -->
        <?php include "component/sidebar.php"; ?>
        <!-- contenido -->
        <div class="container-fluid px-4">
            <?php include "component/header.php"; ?>
            <!-- encabezado y botón -->
            <div class="student-list-header d-flex justify-content-between align-items-center py-2">
                <div class="title h6 fw-bold">Mensajes de Contacto</div>
                <!-- Puedes agregar botones si quieres -->
                <div class="btn-add d-flex gap-3 align-items-center">
                    <div class="short">
                        <i class="far fa-sort"></i>
                    </div>
                </div>
            </div>
            <!-- tabla de mensajes -->
            <div class="table table-responsive">
                <table class="table table-striped table-borderless">
                    <thead>
                        <tr class="py-3">
                            <th>Nombre</th>
                            <th>Email</th>
                            <th>Asunto</th>
                            <th>Mensaje</th>
                            <th>Fecha</th>
                            <th class="opacity-0">Ver</th> <!-- si quieres agregar acciones -->
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        include 'conexion.php'; // Asumiendo que tu conexión PDO está allí
                        $requete = "SELECT * FROM mensajes_contacto ORDER BY fecha DESC"; // ordenados por fecha
                        $result = $con->query($requete);
                        foreach ($result as $msg):
                        ?>
                            <tr>
                                <td><?php echo htmlspecialchars($msg['nombre']); ?></td>
                                <td><?php echo htmlspecialchars($msg['email']); ?></td>
                                <td><?php echo htmlspecialchars($msg['asunto']); ?></td>
                                <td><?php echo htmlspecialchars($msg['mensaje']); ?></td>
                                <td><?php echo htmlspecialchars($msg['fecha']); ?></td>
                                <td>
                                    <!-- Botón para eliminar -->
                                    <form action="eliminar_mensaje.php" method="POST" style="display:inline-block;">
                                        <input type="hidden" name="id" value="<?php echo $msg['id']; ?>">
                                        <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('¿Estás seguro de eliminar este mensaje?');">
                                            <i class="far fa-trash-alt"></i>
                                        </button>
                                    </form>
                                </td>
                                <td><i class="fal fa-eye"></i></td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
            <!-- fin tabla -->
        </div>
    </main>
    <script src="/js/bootstrap.bundle.js"></script>
    <script src="../js/script.js"></script>
</body>
</html>