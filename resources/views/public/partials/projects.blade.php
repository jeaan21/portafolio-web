<?php if (!isset($base_dir)) { $config = require __DIR__ . '/../../../config/app.php'; $base_dir = $config['base_dir']; } ?>
<section id="projects" class="relative py-24 sm:py-32 bg-transparent">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="text-center mb-16 animate-on-scroll">
      <h2 class="text-3xl sm:text-5xl font-bold text-slate-900 dark:text-white mb-4 font-heading">Proyectos <span class="text-gradient">Destacados</span></h2>
      <p class="text-slate-500 dark:text-slate-400 max-w-2xl mx-auto text-sm sm:text-lg px-2">Soluciones empresariales reales con arquitectura moderna y escalable.</p>
    </div>

    <div class="flex flex-col sm:flex-row items-center justify-between gap-4 mb-8">
      <div class="flex gap-2 flex-wrap" id="project-filters">
        <button data-filter="todos" class="px-4 py-2 rounded-xl text-sm font-medium transition-all duration-200 bg-blue-600 text-white shadow-lg shadow-blue-500/25">Todos</button>
        <button data-filter="Full Stack" class="px-4 py-2 rounded-xl text-sm font-medium transition-all duration-200 bg-white dark:bg-white/5 text-slate-600 dark:text-slate-400 hover:bg-slate-100 dark:hover:bg-white/10 border border-slate-200 dark:border-white/10 shadow-sm dark:shadow-none transition-all">Full Stack</button>
        <button data-filter="Frontend" class="px-4 py-2 rounded-xl text-sm font-medium transition-all duration-200 bg-white dark:bg-white/5 text-slate-600 dark:text-slate-400 hover:bg-slate-100 dark:hover:bg-white/10 border border-slate-200 dark:border-white/10 shadow-sm dark:shadow-none transition-all">Frontend</button>
        <button data-filter="Backend" class="px-4 py-2 rounded-xl text-sm font-medium transition-all duration-200 bg-white dark:bg-white/5 text-slate-600 dark:text-slate-400 hover:bg-slate-100 dark:hover:bg-white/10 border border-slate-200 dark:border-white/10 shadow-sm dark:shadow-none transition-all">Backend</button>
        <button data-filter="App" class="px-4 py-2 rounded-xl text-sm font-medium transition-all duration-200 bg-white dark:bg-white/5 text-slate-600 dark:text-slate-400 hover:bg-slate-100 dark:hover:bg-white/10 border border-slate-200 dark:border-white/10 shadow-sm dark:shadow-none transition-all">App</button>
      </div>
      <div class="relative w-full sm:w-64">
        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" class="absolute left-3 top-1/2 -translate-y-1/2 text-slate-400"><circle cx="11" cy="11" r="8"/><line x1="21" y1="21" x2="16.65" y2="16.65"/></svg>        
        <input type="text" id="project-search" placeholder="Buscar proyectos..." class="w-full h-12 pl-10 pr-4 rounded-xl border border-slate-200 dark:border-white/10 bg-white dark:bg-white/5 backdrop-blur-sm dark:text-white text-sm outline-none focus:border-blue-500 transition-colors">
      </div>
    </div>

    <div id="projects-grid" class="grid grid-cols-1 md:grid-cols-2 gap-6"></div>
  </div>
</section>

<template id="project-card-template">
  <div class="project-card group hover:shadow-2xl transition-all duration-500 overflow-hidden h-full bg-white dark:bg-white/5 backdrop-blur-xl border border-slate-200 dark:border-white/10 shadow-sm dark:shadow-none rounded-xl transition-all">
    <div class="h-48 bg-gradient-to-br from-blue-100 via-white to-purple-100 relative overflow-hidden">
      <img src="" alt="" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
      <div class="absolute inset-0 bg-gradient-to-br from-blue-500/10 to-purple-500/10 group-hover:opacity-100 opacity-0 transition-opacity duration-500"></div>
    </div>
    <div class="p-6 space-y-4">
      <div>
        <h3 class="text-lg font-semibold text-slate-900 dark:text-white group-hover:text-blue-600 transition-colors"></h3>
        <p class="text-sm text-slate-500 dark:text-slate-400 mt-2"></p>
      </div>
      <div class="flex flex-wrap gap-2 tech-badges"></div>
      <div class="flex flex-wrap gap-1.5 feature-badges"></div>
      <div class="flex items-center gap-2 text-sm text-blue-600 font-medium metrics-badge"></div>
      <div class="flex flex-wrap gap-2 pt-2 project-actions"></div>
    </div>
  </div>
</template>

<script src="<?= $base_dir ?>/public/js/projects.js"></script>

