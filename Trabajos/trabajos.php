<!-- Proyectos Section -->
<div id="proyectos" class="section">
  <div class="section-header">
    <h2><i class="fas fa-project-diagram"></i> Trabajos Realizados</h2>
  </div>
  
  <div class="row">
    <div class="col-md-4 mb-4">
      <div class="card">
        <div class="card-img-top bg-light text-center py-4">
          <i class="fas fa-shopping-cart fa-3x text-primary"></i>
        </div>
        <div class="card-body">
          <h5 class="card-title">E-Commerce Platform</h5>
          <p class="card-text">Plataforma de comercio electrónico con integración de pagos y gestión de inventario.</p>
          <a href="javascript:void(0)" class="btn btn-outline-primary btn-sm disabled">Ver detalles</a>
        </div>
        <div class="card-footer text-muted">
          <i class="fas fa-clock"></i> Próximamente
        </div>
      </div>
    </div>

    <div class="col-md-4 mb-4">
      <div class="card">
        <div class="card-img-top bg-light text-center py-4">
          <i class="fas fa-chart-line fa-3x text-primary"></i>
        </div>
        <div class="card-body">
          <h5 class="card-title">Dashboard Analytics</h5>
          <p class="card-text">Dashboard para visualización de datos con gráficos interactivos y reportes.</p>
          <a href="javascript:void(0)" class="btn btn-outline-primary btn-sm disabled">Ver detalles</a>
        </div>
        <div class="card-footer text-muted">
          <i class="fas fa-clock"></i> Próximamente
        </div>
      </div>
    </div>

    <div class="col-md-4 mb-4">
      <div class="card">
        <div class="card-img-top bg-light text-center py-4">
          <i class="fas fa-mobile-alt fa-3x text-primary"></i>
        </div>
        <div class="card-body">
          <h5 class="card-title">Aplicación Móvil</h5>
          <p class="card-text">App híbrida para iOS y Android con sincronización en tiempo real.</p>
          <a href="javascript:void(0)" class="btn btn-outline-primary btn-sm disabled">Ver detalles</a>
        </div>
        <div class="card-footer text-muted">
          <i class="fas fa-clock"></i> Próximamente
        </div>
      </div>
    </div>

    <div class="col-md-4 mb-4">
      <div class="card">
        <div class="card-img-top bg-light text-center py-4">
          <i class="fab fa-html5 fa-3x text-primary"></i>
        </div>
        <div class="card-body">
          <h5 class="card-title">Trabajos Sencillos en HTML</h5>
          <p class="card-text">Animaciones y codigos con CSS,JS y HTML.</p>
          <a href="javascript:void(0)" class="btn btn-outline-primary btn-sm" onclick="mostrarBotones(this)">Ver detalles</a>
          <div class="extra-buttons mt-3 d-none">
            <a href="./Animaciones" class="btn btn-success btn-sm me-2" target="_blank">Animacion-Logo</a>
            <a href="./Animaciones/san-valentin.html" class="btn btn-info btn-sm" target="_blank">Animacion-San Valentin</a>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="row mt-4">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header">
          <i class="fas fa-plus me-2"></i> Añadir Nuevo Proyecto
        </div>
        <div class="card-body text-center py-4">
          <i class="fas fa-folder-plus fa-3x mb-3 text-muted"></i>
          <p>Añade tus trabajos realizados para mostrar tu portafolio profesional</p>
          <button class="btn btn-primary disabled">
            <i class="fas fa-plus-circle me-2"></i> Nuevo Proyecto
          </button>
          <p class="text-muted small mt-2">Esta función estará disponible próximamente.</p>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Script para mostrar/ocultar botones -->
<script>
function mostrarBotones(boton) {
  const contenedor = boton.nextElementSibling;
  const visible = !contenedor.classList.contains('d-none');

  contenedor.classList.toggle('d-none');
  boton.textContent = visible ? 'Ver detalles' : 'Ocultar detalles';
}
</script>
