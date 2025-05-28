<?php include("inc/header.php"); ?>
<div class="content">
    <!-- Buscador -->
    <div class="container my-4">
        <div class="search-bar-modern d-flex" style="gap: 10px; align-items: center; margin-bottom: 20px;">
            <input 
                type="text" 
                id="searchInput" 
                placeholder="Buscar en la página..." 
                style="padding: 10px 15px; border-radius: 30px; border: 1px solid #ccc; width: 250px; font-size: 16px;"
            >
            <button 
                onclick="buscarEnPagina()" 
                style="padding: 10px 20px; border: none; border-radius: 30px; background-color: #007BFF; color: white; font-size: 16px; cursor: pointer;"
            >
                Buscar
            </button>
        </div>
    </div>

    <!-- Sección principal promocional -->
    <div id="inicio" class="section active container mb-5">
        <!-- Banner de bienvenida -->
        <div class="container-fluid bg-primary text-white text-center py-5 mb-4">
            <h1 class="display-4">Bienvenido a TyCodEx</h1>
            <p class="lead">Desarrollo Web, Software y Apps a tu Medida</p>
            <a href="#inicio" class="btn btn-light btn-lg"><i class="fas fa-arrow-down"></i> Explora Nuestros Servicios</a>
        </div>

        <!-- Sección de transformación y promoción -->
        <section class="py-5 bg-light text-center">
            <h1 class="h2 mb-3">Transforma tu Negocio con Nosotros</h1>
            <p class="lead mb-4">Creamos soluciones digitales innovadoras, personalizadas y de alta calidad para impulsar tu proyecto, </p>
            <p class="lead mb-4">potenciar tu presencia en línea y automatizar tus procesos.</p>
        </section>

        <!-- Servicios destacados -->
        <div class="row text-center mb-4">
            <div class="col">
                <h2><i class="fas fa-rocket"></i> Nuestros Servicios</h2>
                <p>Soluciones personalizadas para tu negocio digital</p>
            </div>
        </div>
        <!-- Tarjetas de servicios -->
        <div class="row mb-4">
            <div class="col-md-4 mb-4">
                <div class="card feature-card text-center p-3 shadow-sm h-100 position-relative">
                    <span class="coming-soon-badge bg-warning position-absolute top-0 end-0 m-2 rounded px-2 py-1 text-dark">¡Novedad!</span>
                    <div class="feature-icon mb-3 text-primary">
                        <i class="fas fa-globe fa-3x"></i>
                    </div>
                    <h5 class="card-title">Páginas Web a Medida</h5>
                    <p class="card-text">Desarrollamos sitios responsivos y optimizados que potenciarán tu presencia digital y atraerán más clientes.</p>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card feature-card text-center p-3 shadow-sm h-100 position-relative">
                    <span class="coming-soon-badge bg-warning position-absolute top-0 end-0 m-2 rounded px-2 py-1 text-dark">¡Novedad!</span>
                    <div class="feature-icon mb-3 text-success">
                        <i class="fas fa-code fa-3x"></i>
                    </div>
                    <h5 class="card-title">Aplicaciones y Software</h5>
                    <p class="card-text">Creamos soluciones tecnológicas personalizadas para automatizar procesos y mejorar tu productividad.</p>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card feature-card text-center p-3 shadow-sm h-100 position-relative">
                    <span class="coming-soon-badge bg-warning position-absolute top-0 end-0 m-2 rounded px-2 py-1 text-dark">¡Novedad!</span>
                    <div class="feature-icon mb-3 text-info">
                        <i class="fas fa-users fa-3x"></i>
                    </div>
                    <h5 class="card-title">Soluciones a Medida</h5>
                    <p class="card-text">Desde plataformas web hasta apps móviles, adaptamos cada proyecto a tus necesidades y objetivos.</p>
                </div>
            </div>
        </div>

        <!-- CTA -->
        <div class="text-center my-4">
            <a href="https://wa.me/51946858168?text=Hola,%20quiero%20una%20cotizacion%20para%20mi%20empresa%20por%20favor%20contacteme%20con%20un%20asesor." 
                class="btn btn-primary btn-lg"><i class="fab fa-whatsapp"></i> Solicita tu Cotización</a>
        </div>
    </div>

    <!-- Secciones adicionales -->
    <?php include("Tips/tips.php"); ?>
    <?php include("Trabajos/trabajos.php"); ?>
    <?php include("Recursos/Recursos.php"); ?>
    <?php include("Comunidad/comunidad.php"); ?>
    <?php include("Nosotros/nosotros.php"); ?>
    <?php include("Contacto/contact.php"); ?>

    <!-- Botón flotante WhatsApp -->
    <a href="https://wa.me/51946858168" class="whatsapp-float" target="_blank" style="
        position: fixed; bottom: 20px; right: 20px; background:#25D366; color:#fff; border-radius:50%; width:60px; height:60px; display:flex; align-items:center; justify-content:center; font-size:2em; z-index:1000;">
        <i class="fab fa-whatsapp"></i>
    </a>

    <!-- Footer -->
    <?php include("inc/footer.php"); ?>
</div>
<!-- Scripts -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="js/script.js"></script>


