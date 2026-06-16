
<section id="stats" class="relative py-24 sm:py-32 overflow-hidden bg-transparent">
  <div class="max-w-7xl mx-auto px-6 sm:px-8 lg:px-12 relative z-10">
    <div class="text-center mb-20 animate-on-scroll">
      <h2 class="text-4xl sm:text-6xl font-bold text-slate-900 dark:text-white mb-6 font-heading tracking-tight">Actividad <span class="text-gradient">en Vivo</span></h2>
      <p class="text-slate-500 dark:text-slate-400 max-w-2xl mx-auto text-lg sm:text-xl leading-relaxed">
        Métricas dinámicas que reflejan mi compromiso constante con el aprendizaje y el desarrollo de software.
      </p>
    </div>

    <div class="grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-6 gap-6 mb-12" id="stats-grid">
      <?php 
      $stats = [
        ['val' => '25+', 'label' => 'Proyectos', 'color' => 'from-blue-500 to-blue-600', 'icon' => 'M16 18l6-6-6-6 M8 6l-6 6 6 6'],
        ['val' => '15+', 'label' => 'Tecnologías', 'color' => 'from-purple-500 to-purple-600', 'icon' => 'M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z'],
        ['val' => '12+', 'label' => 'Sistemas', 'color' => 'from-cyan-500 to-cyan-600', 'icon' => 'M8 6h8 M8 12h8 M8 18h5 M3 12h1 M3 6h1 M3 18h1'],
        ['val' => '10+', 'label' => 'Colaboraciones', 'color' => 'from-blue-500 to-purple-600', 'icon' => 'M16 21v-2a4 4 0 00-4-4H6a4 4 0 00-4 4v2 M9 7a4 4 0 100-8 4 4 0 000 8z'],
        ['val' => '500+', 'label' => 'Commits', 'color' => 'from-purple-500 to-cyan-600', 'icon' => 'M12 12m-10 0a10 10 0 1020 0a10 10 0 10-20 0 M12 6v6l4 2'],
        ['val' => '30+', 'label' => 'Repositorios', 'color' => 'from-cyan-500 to-blue-600', 'icon' => 'M15 22v-4a4.8 4.8 0 00-1-3.5c3 0 6-2 6-5.5.08-1.25-.27-2.48-1-3.5.28-1.15.28-2.35 0-3.5 0 0-1 0-3 1.5-2.64-.5-5.36-.5-8 0C6 2 5 2 5 2c-.3 1.15-.3 2.35 0 3.5A5.403 5.403 0 00 4 9c0 3.5 3 5.5 6 5.5-.39.49-.68 1.05-.85 1.65-.17.6-.22 1.23-.15 1.85v4 M9 18c-4.51 2-5-2-7-2']
      ];
      foreach($stats as $s): ?>
        <div class="card-stagger">
          <div class="group h-full bg-white dark:bg-white/5 border border-slate-200 dark:border-white/10 p-6 rounded-[2rem] shadow-sm dark:shadow-none transition-all text-center hover:bg-white hover:border-blue-200 hover:shadow-xl hover:shadow-blue-500/5">
            <div class="w-12 h-12 rounded-2xl bg-gradient-to-br <?= $s['color'] ?> text-white flex items-center justify-center mx-auto mb-4 shadow-lg group-hover:scale-110 transition-transform">
              <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="<?= $s['icon'] ?>"/></svg>
            </div>
            <div class="text-2xl font-black text-slate-900 dark:text-white mb-1 font-heading"><?= $s['val'] ?></div>
            <div class="text-[10px] font-bold text-slate-400 uppercase tracking-widest"><?= $s['label'] ?></div>
          </div>
        </div>
      <?php endforeach; ?>
    </div>

    <div id="github-card" class="animate-on-scroll mt-12 bg-white dark:bg-white/5 rounded-[2.5rem] border border-slate-200 dark:border-white/10 shadow-sm dark:shadow-none transition-all overflow-hidden">
      <!-- Placeholder for dynamic GitHub stats -->
      <div class="p-8 flex items-center justify-center min-h-[200px] text-slate-400 italic">
        Cargando datos de GitHub...
      </div>
    </div>
  </div>
</section>

<script src="{{ asset('js/stats.js') }}"></script>
