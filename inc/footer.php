<!-- Vincula Google Fonts y Font Awesome en <head> -->
<link href="https://fonts.googleapis.com/css2?family=Work+Sans:wght@400;600&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

<!-- Footer completo -->
<footer style="background-color: #222; color: #fff; padding: 40px 20px; font-family: 'Work Sans', sans-serif; text-align: center;">
  <div style="max-width: 1200px; margin: 0 auto;">
    <!-- Derechos -->
    <p style="margin-bottom: 10px;">&copy; 2025 TyCodEx. Todos los derechos reservados.</p>
    
    <!-- Enlaces útiles -->
    <nav style="margin-bottom: 20px;">
      <a href="#" style="margin: 0 10px; color: #fff; text-decoration: none; font-weight: 600;">Inicio</a>
      <a href="#" style="margin: 0 10px; color: #fff; text-decoration: none; font-weight: 600;">Acerca de</a>
      <a href="#contacto" style="margin: 0 10px; color: #fff; text-decoration: none; font-weight: 600;">Contacto</a>
    </nav>
    
    <!-- Datos de contacto con links funcionales -->
    <div style="margin-bottom: 15px;">
      <a href="tel:+51946858168" style="color:#fff; margin: 5px 10px; display:inline-block;"><i class="fas fa-phone"></i> +51 946 858 168</a><br>
      <a href="mailto:contacto@tycodex.com" style="color:#fff; margin: 5px 10px; display:inline-block;"><i class="fas fa-envelope"></i> contacto@tycodex.com</a><br>
      <p style="margin: 5px 10px;"><i class="fas fa-map-marker-alt"></i> Av. Principal 123, Lima, Perú</p>
    </div>
    
    <!-- Redes sociales -->
    <div style="display: flex; justify-content: center; gap: 20px; font-size: 24px; flex-wrap: wrap;">
      <a href="https://wa.me/51946858168" target="_blank" aria-label="WhatsApp" style="color:#25D366; transition: 0.3s; transform: scale(1);">
        <i class="fab fa-whatsapp"></i>
      </a>
      <a href="https://facebook.com/tupagina" target="_blank" aria-label="Facebook" style="color:#4267B2; transition: 0.3s; transform: scale(1);">
        <i class="fab fa-facebook"></i>
      </a>
      <a href="https://linkedin.com/in/tuperfil" target="_blank" aria-label="LinkedIn" style="color:#0e76a8; transition: 0.3s; transform: scale(1);">
        <i class="fab fa-linkedin"></i>
      </a>
      <a href="https://github.com/tuusuario" target="_blank" rel="noopener" aria-label="GitHub" style="color:#fff; transition: 0.3s; transform: scale(1);">
        <i class="fab fa-github"></i>
      </a>
    </div>
  </div>
</footer>

<!-- Estilos para efectos en redes sociales -->
<style>
  footer a:hover {
    color: #ffd700;
    transform: scale(1.3);
  }
  /* Responsive en pantallas menores a 600 px */
  @media(max-width: 600px){
    footer nav {
      display: flex;
      flex-direction: column;
      align-items: center;
    }
    footer nav a {
      margin: 8px 0;
    }
    footer div[style*="display: flex;"] {
      gap: 15px;
    }
  }
</style>

    