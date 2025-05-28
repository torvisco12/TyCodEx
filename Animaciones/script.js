const spans = document.querySelectorAll('.animation span');

spans.forEach((span, idx) => {
  // Añadir clase 'active' con un retraso para efecto secuencial
  setTimeout(() => {
    span.classList.add('active');
  }, 750 * (idx + 1));
});
