
<section id="ai" class="relative py-24 sm:py-32 overflow-hidden bg-transparent">
  <div class="relative max-w-7xl mx-auto px-6 sm:px-8 lg:px-12 relative z-10">
    <div class="text-center mb-20 animate-on-scroll">
      <div class="inline-flex items-center gap-2.5 px-5 py-2 rounded-full bg-white dark:bg-white/5 shadow-sm ring-1 ring-slate-200 dark:ring-white/10 backdrop-blur-sm mb-6">
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" class="text-purple-600 dark:text-purple-400"><path d="M12 2v4M12 22v-4M4.93 4.93l2.83 2.83M16.24 16.24l2.83 2.83M2 12h4M22 12h-4M4.93 19.07l2.83-2.83M16.24 7.76l2.83-2.83"/></svg>
        <span class="text-[10px] font-black uppercase tracking-[0.2em] text-purple-600 dark:text-purple-400">AI & Innovation</span>
      </div>
      <h2 class="text-4xl sm:text-6xl font-bold text-slate-900 dark:text-white mb-6 font-heading tracking-tight">Inteligencia Artificial e <span class="text-gradient">Innovación</span></h2>
      <p class="text-slate-500 dark:text-slate-400 max-w-2xl mx-auto text-lg sm:text-xl leading-relaxed">Integrando tecnologías de vanguardia para crear sistemas inteligentes que transforman procesos de negocio.</p>
    </div>

    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
      <?php 
      $items = [
        ['t' => 'Prompt Engineering', 'd' => 'Diseño de prompts optimizados para modelos LLM aplicados a la automatización de flujos empresariales.', 'icon' => 'M12 2a10 10 0 0 1 7.07 17.07 10 10 0 0 1-14.14 0A10 10 0 0 1 12 2z M8.5 10.5a4 4 0 0 1 7 0 M8.5 14.5a4 4 0 0 0 7 0'],
        ['t' => 'Chatbots Inteligentes', 'd' => 'Asistentes virtuales que entienden contexto, responden naturalmente y se integran con APIs externas.', 'icon' => 'M3 11h18 M7 11V7a5 5 0 0 1 10 0v4 M21 21H3'],
        ['t' => 'Automatización IA', 'd' => 'Optimización de tareas repetitivas mediante agentes autónomos y reglas de negocio inteligentes.', 'icon' => 'M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z'],
        ['t' => 'Dashboards Predictivos', 'd' => 'Visualización de datos con capas de Machine Learning para proyectar tendencias y KPIs.', 'icon' => 'M12 20V10 M18 20V4 M6 20v-4'],
        ['t' => 'Integración Blockchain', 'd' => 'Contratos inteligentes y trazabilidad de datos para asegurar la integridad de la información.', 'icon' => 'M21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16z'],
        ['t' => 'Cloud Innovation', 'd' => 'Arquitecturas serverless y microservicios diseñados para el escalado global inmediato.', 'icon' => 'M18 10h-1.26A8 8 0 1 0 9 20h9a5 5 0 0 0 0-10z']
      ];
      foreach($items as $i): ?>
        <div class="card-stagger">
          <div class="group h-full bg-white dark:bg-white/5 border border-slate-100 dark:border-white/10 p-8 rounded-[2.5rem] shadow-sm hover:shadow-2xl hover:shadow-purple-500/5 hover:-translate-y-2 transition-all duration-500">
            <div class="w-14 h-14 rounded-2xl bg-slate-50 dark:bg-white/10 text-purple-600 dark:text-purple-400 flex items-center justify-center mb-6 group-hover:scale-110 transition-transform shadow-sm">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="<?= $i['icon'] ?>"/></svg>
            </div>
            <h3 class="text-xl font-bold text-slate-900 dark:text-white mb-3 font-heading"><?= $i['t'] ?></h3>
            <p class="text-sm text-slate-500 dark:text-slate-400 leading-relaxed"><?= $i['d'] ?></p>
            <div class="mt-8 flex gap-2">
              <span class="px-3 py-1 rounded-lg bg-purple-50 dark:bg-purple-500/10 text-purple-600 dark:text-purple-400 text-[10px] font-black uppercase tracking-widest">AI</span>
              <span class="px-3 py-1 rounded-lg bg-slate-50 dark:bg-white/10 text-slate-400 dark:text-slate-500 text-[10px] font-black uppercase tracking-widest">Future</span>
            </div>
          </div>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>
