<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portal</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="icon" href="assets/img/logo.png" type="image/png">
    <link rel="stylesheet" href="./css/styles.css">
</head>
<body>
    <div class="wrapper">
        <!-- Header (replacing sidebar) -->
        <nav id="main-header" class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
            <div class="container-fluid">
            <a href="#" class="navbar-brand">
            <img src="./assets/img/logo.png" alt="Logo" style="height: 30px; margin-right: 20px;">
            TyCodEx
        </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a href="javascript:void(0)" data-section="inicio" class="nav-link active">
                                <i class="fas fa-home"></i> Inicio
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="javascript:void(0)" data-section="tips" class="nav-link">
                                <i class="fas fa-lightbulb"></i> Tips de Desarrollo
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="javascript:void(0)" data-section="proyectos" class="nav-link">
                                <i class="fas fa-project-diagram"></i> Trabajos Realizados
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="javascript:void(0)" data-section="recursos" class="nav-link">
                                <i class="fas fa-book"></i> Recursos
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="javascript:void(0)" data-section="comunidad" class="nav-link">
                                <i class="fas fa-users"></i> Comunidad
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="javascript:void(0)" data-section="nosotros" class="nav-link">
                                <i class="fas fa-building"></i> Nosotros
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="javascript:void(0)" data-section="contactos" class="nav-link">
                                <i class="fas fa-envelope"></i> Contactos
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="./admin/" data-section="#" class="nav-link">
                                <i class="fas fa-user"></i> Perfil
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
