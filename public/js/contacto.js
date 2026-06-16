(function() {
  const form = document.getElementById('contact-form');
  const sentDiv = document.getElementById('contact-sent');
  if (!form) return;

  form.addEventListener('submit', async function(e) {
    e.preventDefault();
    const submitBtn = document.getElementById('contact-submit');
    const origHtml = submitBtn.innerHTML;
    
    // UI Loading State
    submitBtn.disabled = true;
    submitBtn.innerHTML = `
      <svg class="animate-spin h-5 w-5 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
        <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
        <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
      </svg>
      <span>Procesando requerimientos...</span>
    `;

    const data = {
      nombre: document.getElementById('contact-name').value,
      email: document.getElementById('contact-email').value,
      tipo_servicio: document.getElementById('contact-servicio').value,
      presupuesto: document.getElementById('contact-presupuesto').value,
      plazo: document.getElementById('contact-plazo').value,
      proyecto_url: document.getElementById('contact-url').value,
      mensaje: document.getElementById('contact-mensaje').value
    };

    const csrfToken = document.querySelector('meta[name="csrf-token"]')?.getAttribute('content');
    const baseUrl = document.querySelector('meta[name="base-url"]')?.getAttribute('content') || '';

    try {
      const response = await fetch(baseUrl + '/api/v1/post_mensaje.php', {
        method: 'POST',
        headers: {
          'Content-Type': 'application/json',
          'X-CSRF-Token': csrfToken
        },
        body: JSON.stringify(data)
      });

      const res = await response.json();

      if (res.success) {
        form.style.opacity = '0';
        form.style.transform = 'translateY(10px)';
        form.style.transition = 'all 0.4s ease';
        
        setTimeout(() => {
          form.classList.add('hidden');
          if (sentDiv) {
            sentDiv.classList.remove('hidden');
            sentDiv.style.opacity = '0';
            sentDiv.style.transform = 'translateY(20px)';
            requestAnimationFrame(() => {
              sentDiv.style.transition = 'all 0.6s cubic-bezier(0.34, 1.56, 0.64, 1)';
              sentDiv.style.opacity = '1';
              sentDiv.style.transform = 'translateY(0)';
            });
          }
        }, 400);
      } else {
        alert(res.message || 'Error al enviar propuesta');
      }
    } catch (error) {
      alert('Error de conexión. Inténtalo de nuevo.');
    } finally {
      submitBtn.disabled = false;
      submitBtn.innerHTML = origHtml;
    }
  });
})();

function resetContactForm() {
  const form = document.getElementById('contact-form');
  const sentDiv = document.getElementById('contact-sent');
  sentDiv.style.opacity = '0';
  setTimeout(() => {
    sentDiv.classList.add('hidden');
    form.reset();
    form.classList.remove('hidden');
    form.style.opacity = '1';
    form.style.transform = 'translateY(0)';
  }, 300);
}
