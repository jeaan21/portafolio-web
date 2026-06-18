
<section id="contact" class="relative py-24 sm:py-32 overflow-hidden bg-transparent">
  <!-- Decorative background elements -->
  <div class="absolute top-0 right-0 -translate-y-1/2 translate-x-1/2 w-[600px] h-[600px] bg-purple-600/10 rounded-full blur-[120px]"></div>
  <div class="absolute bottom-0 left-0 translate-y-1/2 -translate-x-1/2 w-[600px] h-[600px] bg-green-400/5 rounded-full blur-[120px]"></div>

  <div class="relative max-w-7xl mx-auto px-6 sm:px-8 lg:px-12">
    <div class="grid grid-cols-1 lg:grid-cols-12 gap-16 items-start">
      
      <!-- Side Info (4 Columns) -->
      <div class="lg:col-span-4 space-y-10 animate-on-scroll">
        <div>
          <h2 class="text-4xl sm:text-5xl lg:text-4xl xl:text-6xl font-black text-slate-900 dark:text-white mb-6 font-heading tracking-tight leading-none">
            Inicia tu <br> <span class="text-gradient">Proyecto</span>
          </h2>
          <p class="text-slate-500 dark:text-slate-400 text-lg leading-relaxed max-w-sm">
            Especializado en arquitecturas escalables y desarrollo full stack de alto rendimiento. Cuéntame sobre tus objetivos técnicos.
          </p>
        </div>

        <div class="space-y-8 pt-6">
          <div class="flex items-center gap-6 group">
            <div class="w-14 h-14 rounded-2xl bg-white dark:bg-white/5 border border-slate-200 dark:border-white/10 shadow-sm dark:shadow-none transition-all flex items-center justify-center text-green-600 dark:text-green-400 group-hover:border-green-400/50 transition-colors shadow-sm">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.7 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/></svg>
            </div>
            <div>
              <p class="text-[10px] font-black uppercase tracking-[0.2em] text-slate-400 dark:text-slate-500">Consulta Directa</p>
              <p class="text-slate-900 dark:text-white font-bold text-lg">+51 935 515 325</p>
            </div>
          </div>
          
          <div class="flex items-center gap-6 group">
            <div class="w-14 h-14 rounded-2xl bg-white dark:bg-white/5 border border-slate-200 dark:border-white/10 shadow-sm dark:shadow-none transition-all flex items-center justify-center text-purple-600 dark:text-purple-500 group-hover:border-purple-500/50 transition-colors shadow-sm">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="2" y="4" width="20" height="16" rx="2"/><path d="m22 7-8.97 5.7a1.94 1.94 0 0 1-2.06 0L2 7"/></svg>
            </div>
            <div>
              <p class="text-[10px] font-black uppercase tracking-[0.2em] text-slate-400 dark:text-slate-500">Email Corporativo</p>
              <p class="text-slate-900 dark:text-white font-bold text-lg">jean2015arias@gmail.com</p>
            </div>
          </div>
        </div>

        <div class="p-8 rounded-[2rem] bg-white dark:bg-white/5 border border-slate-200 dark:border-white/10 shadow-sm dark:shadow-none transition-all">
          <div class="flex items-center gap-3 mb-4">
            <div class="w-2 h-2 rounded-full bg-green-500 animate-pulse"></div>
            <span class="text-xs font-bold text-slate-700 dark:text-white uppercase tracking-widest">Disponibilidad Actual</span>
          </div>
          <p class="text-sm text-slate-500 dark:text-slate-400 leading-relaxed">
            Aceptando nuevas consultorías para el Q3 y Q4 de 2026. Tiempo de respuesta estimado: <span class="text-slate-900 dark:text-white font-bold">24 horas</span>.
          </p>
        </div>
      </div>

      <!-- Advanced Form (8 Columns) -->
      <div class="lg:col-span-8 animate-on-scroll" style="transition-delay: 0.2s">
        <div class="bg-white dark:bg-white/5 backdrop-blur-xl border border-slate-200 dark:border-white/10 p-1 sm:p-2 rounded-[3rem] shadow-xl dark:shadow-2xl transition-all">
          <div class="bg-white dark:bg-[#0B0E14]/80 rounded-[2.5rem] p-8 sm:p-12">
            
            <div id="contact-sent" class="text-center py-16 hidden">
              <div class="w-24 h-24 bg-green-500/10 text-green-500 rounded-full flex items-center justify-center mx-auto mb-8">
                <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M20 6 9 17l-5-5"/></svg>
              </div>
              <h3 class="text-3xl font-black text-slate-900 dark:text-white mb-4 font-heading tracking-tight">Propuesta Recibida</h3>
              <p class="text-slate-500 dark:text-slate-400 mb-10 max-w-sm mx-auto text-lg leading-relaxed">Analizaré los requerimientos técnicos y el presupuesto para enviarte una propuesta detallada en breve.</p>
              <button onclick="resetContactForm()" class="px-10 py-4 rounded-2xl bg-slate-900 dark:bg-white text-white dark:text-black font-black uppercase tracking-widest text-xs hover:bg-slate-800 dark:hover:bg-slate-200 transition-all">Enviar otra solicitud</button>
            </div>

            <form id="contact-form" class="space-y-8">
              <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <!-- Row 1: Nombre | Email -->
                <div class="space-y-3">
                  <label class="block text-[10px] font-black uppercase tracking-[0.2em] text-slate-400 dark:text-slate-500 ml-1">Nombre completo</label>
                  <input type="text" id="contact-name" placeholder="Ej: Jean Pierre Arias" required 
                    class="w-full h-14 rounded-2xl border-none bg-slate-50 dark:bg-white/5 text-slate-900 dark:text-white px-6 text-sm ring-1 ring-slate-200 dark:ring-white/10 focus:ring-2 focus:ring-purple-600 transition-all outline-none placeholder:text-slate-400 dark:placeholder:text-slate-600">
                </div>
                <div class="space-y-3">
                  <label class="block text-[10px] font-black uppercase tracking-[0.2em] text-slate-400 dark:text-slate-500 ml-1">Correo electrónico</label>
                  <input type="email" id="contact-email" placeholder="proyectos@empresa.com" required 
                    class="w-full h-14 rounded-2xl border-none bg-slate-50 dark:bg-white/5 text-slate-900 dark:text-white px-6 text-sm ring-1 ring-slate-200 dark:ring-white/10 focus:ring-2 focus:ring-purple-600 transition-all outline-none placeholder:text-slate-400 dark:placeholder:text-slate-600">
                </div>

                <!-- Row 2: Servicio | Presupuesto -->
                <div class="space-y-3">
                  <label class="block text-[10px] font-black uppercase tracking-[0.2em] text-slate-400 dark:text-slate-500 ml-1">Tipo de Servicio</label>
                  <div class="relative">
                    <select id="contact-servicio" required 
                      class="w-full h-14 rounded-2xl border-none bg-slate-50 dark:bg-white/5 text-slate-900 dark:text-white px-6 text-sm ring-1 ring-slate-200 dark:ring-white/10 focus:ring-2 focus:ring-purple-600 transition-all outline-none appearance-none cursor-pointer">
                      <option value="" disabled selected class="bg-white dark:bg-[#0B0E14]">Seleccionar servicio...</option>
                      <option value="Desarrollo Web Full Stack" class="bg-white dark:bg-[#0B0E14]">Desarrollo Web Full Stack (React / Node.js)</option>
                      <option value="Diseño y Arquitectura de Sistemas" class="bg-white dark:bg-[#0B0E14]">Diseño y Arquitectura de Sistemas</option>
                      <option value="Consultoria Tecnica / Auditoria" class="bg-white dark:bg-[#0B0E14]">Consultoría Técnica / Auditoría</option>
                      <option value="Desarrollo de Aplicaciones Moviles" class="bg-white dark:bg-[#0B0E14]">Desarrollo de Aplicaciones Móviles</option>
                    </select>
                    <div class="absolute right-6 top-1/2 -translate-y-1/2 pointer-events-none text-slate-400 dark:text-slate-500">
                      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="m6 9 6 6 6-6"/></svg>
                    </div>
                  </div>
                </div>
                <div class="space-y-3">
                  <label class="block text-[10px] font-black uppercase tracking-[0.2em] text-slate-400 dark:text-slate-500 ml-1">Presupuesto Estimado (PEN)</label>
                  <div class="relative">
                    <select id="contact-presupuesto" required 
                      class="w-full h-14 rounded-2xl border-none bg-slate-50 dark:bg-white/5 text-slate-900 dark:text-white px-6 text-sm ring-1 ring-slate-200 dark:ring-white/10 focus:ring-2 focus:ring-purple-600 transition-all outline-none appearance-none cursor-pointer">
                      <option value="" disabled selected class="bg-white dark:bg-[#0B0E14]">Rango de presupuesto...</option>
                      <option value="S/ 500" class="bg-white dark:bg-[#0B0E14]">S/ 500</option>
                      <option value="S/ 500 - S/ 1,000" class="bg-white dark:bg-[#0B0E14]">S/ 500 - S/ 1,000</option>
                      <option value="S/ 1,000 - S/ 1,500" class="bg-white dark:bg-[#0B0E14]">S/ 1,000 - S/ 1,500</option>
                      <option value="S/ 2,000 +" class="bg-white dark:bg-[#0B0E14]">S/ 2,000 +</option>
                    </select>
                    <div class="absolute right-6 top-1/2 -translate-y-1/2 pointer-events-none text-slate-400 dark:text-slate-500">
                      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="m6 9 6 6 6-6"/></svg>
                    </div>
                  </div>
                </div>

                <!-- Row 3: Plazo | URL -->
                <div class="space-y-3">
                  <label class="block text-[10px] font-black uppercase tracking-[0.2em] text-slate-400 dark:text-slate-500 ml-1">Plazo de Entrega</label>
                  <div class="relative">
                    <select id="contact-plazo" required 
                      class="w-full h-14 rounded-2xl border-none bg-slate-50 dark:bg-white/5 text-slate-900 dark:text-white px-6 text-sm ring-1 ring-slate-200 dark:ring-white/10 focus:ring-2 focus:ring-purple-600 transition-all outline-none appearance-none cursor-pointer">
                      <option value="" disabled selected class="bg-white dark:bg-[#0B0E14]">Prioridad de entrega...</option>
                      <option value="Inmediato (Menos de 1 mes)" class="bg-white dark:bg-[#0B0E14]">Inmediato (Menos de 1 mes)</option>
                      <option value="Short Term (1 a 3 meses)" class="bg-white dark:bg-[#0B0E14]">Corto plazo (1 a 3 meses)</option>
                      <option value="Mid Term (3 a 6 meses)" class="bg-white dark:bg-[#0B0E14]">Medio plazo (3 a 6 meses)</option>
                      <option value="Solo explorando opciones" class="bg-white dark:bg-[#0B0E14]">Solo explorando opciones</option>
                    </select>
                    <div class="absolute right-6 top-1/2 -translate-y-1/2 pointer-events-none text-slate-400 dark:text-slate-500">
                      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="m6 9 6 6 6-6"/></svg>
                    </div>
                  </div>
                </div>
                <div class="space-y-3">
                  <label class="block text-[10px] font-black uppercase tracking-[0.2em] text-slate-400 dark:text-slate-500 ml-1">Documentación / Link</label>
                  <input type="url" id="contact-url" placeholder="Enlace a Figma, GitHub o PRD (opcional)" 
                    class="w-full h-14 rounded-2xl border-none bg-slate-50 dark:bg-white/5 text-slate-900 dark:text-white px-6 text-sm ring-1 ring-slate-200 dark:ring-white/10 focus:ring-2 focus:ring-purple-600 transition-all outline-none placeholder:text-slate-400 dark:placeholder:text-slate-600">
                </div>

                <!-- Row 4: Mensaje -->
                <div class="md:col-span-2 space-y-3">
                  <label class="block text-[10px] font-black uppercase tracking-[0.2em] text-slate-400 dark:text-slate-500 ml-1">Objetivos del Proyecto</label>
                  <textarea id="contact-mensaje" placeholder="Describe brevemente el problema de negocio y los resultados esperados..." required 
                    class="w-full min-h-[160px] rounded-3xl border-none bg-slate-50 dark:bg-white/5 text-slate-900 dark:text-white px-6 py-5 text-sm ring-1 ring-slate-200 dark:ring-white/10 focus:ring-2 focus:ring-purple-600 transition-all outline-none resize-none placeholder:text-slate-400 dark:placeholder:text-slate-600"></textarea>
                </div>
              </div>

              <div class="md:col-span-2 pt-4">
                <p class="text-xs text-slate-400 text-center mb-4">
                  🔒 Tu información es privada. Sin spam, sin compromisos. <strong class="text-slate-500 dark:text-slate-400">Primera consulta técnica 100% gratuita.</strong>
                </p>
                <button type="submit" id="contact-submit" 
                  class="w-full h-16 rounded-2xl bg-gradient-to-r from-purple-600 to-indigo-600 text-white font-black uppercase tracking-[0.2em] text-xs hover:shadow-2xl hover:shadow-purple-500/40 active:scale-[0.98] transition-all flex items-center justify-center gap-4 shadow-lg shadow-purple-500/20">
                  <span>Enviar Propuesta Técnica</span>
                  <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="m22 2-7 20-4-9-9-4Z"/><path d="M22 2 11 13"/></svg>
                </button>
              </div>
            </form>

          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<script>
(function() {
  var form = document.getElementById('contact-form');
  var sentDiv = document.getElementById('contact-sent');
  if (!form) return;

  form.addEventListener('submit', async function(e) {
    e.preventDefault();
    var submitBtn = document.getElementById('contact-submit');
    var origHtml = submitBtn.innerHTML;

    submitBtn.disabled = true;
    submitBtn.innerHTML = '<svg class="animate-spin h-5 w-5 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"><circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle><path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path></svg><span>Procesando requerimientos...</span>';

    var data = {
      nombre: document.getElementById('contact-name').value,
      email: document.getElementById('contact-email').value,
      tipo_servicio: document.getElementById('contact-servicio').value,
      presupuesto: document.getElementById('contact-presupuesto').value,
      plazo: document.getElementById('contact-plazo').value,
      proyecto_url: document.getElementById('contact-url').value,
      mensaje: document.getElementById('contact-mensaje').value
    };

    var csrfToken = document.querySelector('meta[name="csrf-token"]')?.getAttribute('content');

    try {
      var response = await fetch('/api/v1/post_mensaje.php', {
        method: 'POST',
        headers: { 'Content-Type': 'application/json', 'X-CSRF-Token': csrfToken },
        body: JSON.stringify(data)
      });
      var res = await response.json();
      if (res.success) {
        form.style.opacity = '0';
        form.style.transform = 'translateY(10px)';
        form.style.transition = 'all 0.4s ease';
        setTimeout(function() {
          form.classList.add('hidden');
          if (sentDiv) {
            sentDiv.classList.remove('hidden');
            sentDiv.style.opacity = '0';
            sentDiv.style.transform = 'translateY(20px)';
            requestAnimationFrame(function() {
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

  window.resetContactForm = function() {
    var f = document.getElementById('contact-form');
    var s = document.getElementById('contact-sent');
    s.style.opacity = '0';
    setTimeout(function() {
      s.classList.add('hidden');
      f.reset();
      f.classList.remove('hidden');
      f.style.opacity = '1';
      f.style.transform = 'translateY(0)';
    }, 300);
  };
})();
</script>

