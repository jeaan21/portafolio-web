<?php if (!isset($base_dir)) { $config = require __DIR__ . '/../../../config/app.php'; $base_dir = $config['base_dir']; } ?>
<section id="hero" class="relative min-h-[90vh] flex items-center justify-center overflow-hidden py-16 sm:py-20 bg-transparent">
  <!-- Dynamic Background with Craft -->
  <div class="absolute inset-0 bg-transparent">
    <div class="absolute inset-0 opacity-[0.03] dark:opacity-[0.05]" style="background-image: radial-gradient(#2563EB 1px, transparent 1px); background-size: 32px 32px;"></div>
    <div class="absolute top-0 left-1/4 w-[300px] sm:w-[500px] h-[300px] sm:h-[500px] bg-blue-400/10 rounded-full blur-[80px] sm:blur-[120px] animate-pulse"></div>
    <div class="absolute bottom-0 right-1/4 w-[300px] sm:w-[500px] h-[300px] sm:h-[500px] bg-purple-400/10 rounded-full blur-[80px] sm:blur-[120px] animate-pulse" style="animation-delay: 2s"></div>
  </div>

  <div class="relative z-10 max-w-7xl mx-auto px-6 sm:px-8 lg:px-12 text-center">
    <div class="mb-8 sm:mb-10 animate-on-scroll">
      <div class="inline-flex items-center gap-2.5 px-4 sm:px-5 py-2 rounded-full bg-white dark:bg-slate-900 shadow-sm ring-1 ring-slate-200/60 dark:ring-slate-800/60 backdrop-blur-sm">
        <span class="relative flex h-2.5 w-2.5">
          <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-green-400 opacity-75"></span>
          <span class="relative inline-flex rounded-full h-2.5 w-2.5 bg-green-500"></span>
        </span>
        <span class="text-[10px] sm:text-xs font-bold text-slate-600 dark:text-slate-400 uppercase tracking-widest">Disponible para nuevos desafíos</span>
      </div>
    </div>

    <h1 class="text-4xl sm:text-6xl lg:text-7xl xl:text-8xl font-extrabold text-slate-900 dark:text-white mb-6 sm:mb-8 leading-[1.1] tracking-tight animate-on-scroll font-heading" style="transition-delay: 0.1s">
      Construyendo el <br class="hidden sm:block"> <span class="text-gradient">futuro digital</span>
    </h1>

    <div class="text-lg sm:text-2xl lg:text-3xl text-slate-500 dark:text-slate-400 mb-8 sm:mb-10 h-8 sm:h-10 animate-on-scroll font-medium" style="transition-delay: 0.2s">
      <span id="typing-text" class="text-slate-800 dark:text-slate-200"></span>
      <span class="animate-pulse text-blue-600 ml-1">|</span>
    </div>

    <p class="text-base sm:text-lg lg:text-xl text-slate-500 dark:text-slate-400 max-w-2xl mx-auto mb-10 sm:mb-12 leading-relaxed animate-on-scroll" style="transition-delay: 0.3s">
      Estudiante de Ingeniería de Sistemas y Desarrollador Full Stack enfocado en crear soluciones empresariales escalables con arquitectura de alto nivel.
    </p>

    <div class="flex flex-col sm:flex-row items-center justify-center gap-4 sm:gap-5 animate-on-scroll" style="transition-delay: 0.4s">
      <a href="<?= $base_dir ?>/views/public/proyectos.php" 
        class="group h-12 sm:h-14 px-6 sm:px-8 rounded-2xl bg-slate-900 dark:bg-white text-white dark:text-slate-900 font-bold flex items-center justify-center gap-3 hover:bg-slate-800 dark:hover:bg-slate-100 hover:shadow-2xl hover:shadow-slate-900/20 transition-all w-full sm:w-auto">
        Explorar Proyectos
        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" class="group-hover:translate-x-1 transition-transform"><path d="M5 12h14m-7-7 7 7-7 7"/></svg>
      </a>
      
      <a href="<?= $base_dir ?>/resume.pdf" download 
        class="h-12 sm:h-14 px-6 sm:px-8 rounded-2xl bg-white dark:bg-slate-900 text-slate-700 dark:text-slate-200 font-bold flex items-center justify-center gap-3 ring-1 ring-slate-200 dark:ring-slate-800 hover:bg-slate-50 dark:hover:bg-slate-800 hover:ring-slate-300 transition-all shadow-sm w-full sm:w-auto">
        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"/><polyline points="7 10 12 15 17 10"/><line x1="12" y1="15" x2="12" y2="3"/></svg>
        Descargar CV
      </a>
    </div>
  </div>

  <!-- Scroll Indicator -->
  <div class="absolute bottom-8 sm:bottom-10 left-1/2 -translate-x-1/2 animate-on-scroll" style="transition-delay: 0.6s">
    <a href="#about" class="flex flex-col items-center gap-2 sm:gap-3 text-slate-400 hover:text-blue-600 transition-colors group">
      <span class="text-[9px] sm:text-[10px] font-bold uppercase tracking-[0.2em] ml-1">Descubrir</span>
      <div class="w-5 h-8 sm:w-6 sm:h-10 rounded-full border-2 border-current p-1 flex justify-center">
        <div class="w-1 h-1.5 sm:h-2 bg-current rounded-full animate-bounce"></div>
      </div>
    </a>
  </div>
</section>

<script src="<?= $base_dir ?>/public/js/hero.js"></script>
