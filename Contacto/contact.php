<!-- Contactos Section -->
<div id="contactos" class="section">
    <div class="section-header">
        <h2><i class="fas fa-envelope"></i> Contactos</h2>
    </div>
    
    <div class="row">
        <div class="col-lg-6 mb-4">
            <div class="contact-form-container">
                <h4 class="mb-4"><i class="fas fa-paper-plane me-2"></i> Envíanos un mensaje</h4>
                <!-- Formulario de contacto -->
                <form class="contact-form" action="Contacto/envio.php" method="POST">
                    <div class="mb-3">
                        <label for="contactName" class="form-label">Nombre completo</label>
                        <input type="text" class="form-control" id="contactName" name="contactName" placeholder="Ingresa tu nombre" required>
                    </div>
                    <div class="mb-3">
                        <label for="contactEmail" class="form-label">Correo electrónico</label>
                        <input type="email" class="form-control" id="contactEmail" name="contactEmail" placeholder="tucorreo@ejemplo.com" required>
                    </div>
                    <div class="mb-3">
                        <label for="contactSubject" class="form-label">Asunto</label>
                        <input type="text" class="form-control" id="contactSubject" name="contactSubject" placeholder="Asunto de tu mensaje" required>
                    </div>
                    <div class="mb-3">
                        <label for="contactMessage" class="form-label">Mensaje</label>
                        <textarea class="form-control" id="contactMessage" name="contactMessage" rows="5" placeholder="Escribe tu mensaje aquí..." required></textarea>
                    </div>
                    <div class="mb-3 form-check">
                        <input type="checkbox" class="form-check-input" id="contactConsent" name="contactConsent" required>
                        <label class="form-check-label" for="contactConsent">Acepto recibir respuestas a mi consulta por correo electrónico</label>
                    </div>
                    <button type="submit" class="btn btn-primary">
                        <i class="fas fa-paper-plane me-2"></i> Enviar mensaje
                    </button>
                </form>
            </div>
        </div>

        <div class="col-lg-6">
            <div class="map-container">
                <!-- Mapa de Google Maps -->
                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d2712.743870117988!2d-72.88732458739997!3d-13.64100327744878!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e1!3m2!1ses!2spe!4v1746142907713!5m2!1ses!2spe" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
            <!-- Información de contacto -->
            <div style="margin-top: 20px; font-family: Arial, sans-serif; font-size: 18px;">
              <p>
                <a href="tel:+51946858168" style="text-decoration: none; color: inherit;">
                  <i class="fas fa-phone-alt" style="color: #2ecc71; margin-right: 8px;"></i> +51 946 858 168
                </a>
              </p>
              <p>
                <a href="mailto:edwin010494@gmail.com" style="text-decoration: none; color: inherit;">
                  <i class="fas fa-envelope" style="color: #3498db; margin-right: 8px;"></i> edwin010494@gmail.com
                </a>
              </p>
            </div>
        </div>
    </div>
</div>
