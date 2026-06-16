
<section id="about" class="relative py-24 sm:py-32 overflow-hidden bg-transparent">
  <div class="max-w-7xl mx-auto px-6 sm:px-8 lg:px-12 relative z-10">
    <div class="grid grid-cols-1 lg:grid-cols-12 gap-16 items-center">
      
      <!-- Image Column -->
      <div class="lg:col-span-5 relative animate-on-scroll">
        <div class="relative aspect-square">
          <!-- Decorative Background -->
          <div class="absolute inset-0 translate-x-4 translate-y-4 rounded-[3rem] bg-blue-600/5 ring-1 ring-blue-600/10"></div>

          <!-- Image Container -->
          <div class="relative h-full w-full rounded-[2.5rem] overflow-hidden shadow-2xl shadow-slate-200 dark:shadow-none ring-1 ring-slate-200 dark:ring-white/10">
            <img src="{{ asset('img/foto-perfil.jpg') }}" alt="Jean Arias"
              class="w-full h-full object-cover grayscale hover:grayscale-0 transition-all duration-700 hover:scale-105"
              onerror="this.src='data:image/svg+xml,<svg xmlns=%22http://www.w3.org/2000/svg%22 width=%22400%22 height=%22400%22><rect fill=%22%23f1f5f9%22 width=%22400%22 height=%22400%22/><text x=%22200%22 y=%22200%22 text-anchor=%22middle%22 dy=%22.35em%22 fill=%22%2394a3b8%22 font-size=%2264%22 font-family=%22system-ui%22 font-weight=%22bold%22>JA</text></svg>'">
          </div>

          <!-- Floating Badge -->
          <div class="absolute -bottom-6 -right-6 bg-white dark:bg-slate-900 p-6 rounded-[2rem] shadow-xl dark:shadow-none ring-1 ring-slate-100 dark:ring-white/10 animate-float">
            <div class="flex items-center gap-4">
              <div class="w-12 h-12 rounded-2xl bg-blue-600 text-white flex items-center justify-center font-bold text-xl">4+</div>
              <div>
                <p class="text-xs font-bold text-slate-400 uppercase tracking-widest">Años de</p>
                <p class="text-sm font-bold text-slate-900 dark:text-white">Pasión Código</p>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Text Column -->
      <div class="lg:col-span-7 space-y-10 animate-on-scroll" style="transition-delay: 0.2s">
        <div class="space-y-6">
          <h2 class="text-4xl sm:text-6xl font-bold text-slate-900 dark:text-white font-heading tracking-tight leading-tight">
            Arquitecto de <span class="text-gradient">soluciones digitales</span> robustas
          </h2>
          <p class="text-lg sm:text-xl text-slate-500 dark:text-slate-400 leading-relaxed max-w-2xl">
            Soy Jean Arias, estudiante de Ingeniería de Sistemas con una visión clara: transformar la complejidad empresarial en interfaces elegantes y sistemas escalables. No solo escribo código; diseño experiencias que impulsan negocios.
          </p>
        </div>

        <!-- Experience Grid -->
        <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
          <div class="p-6 rounded-3xl bg-white dark:bg-white/5 border border-slate-200 dark:border-white/10 shadow-sm dark:shadow-none hover:border-blue-200 dark:hover:border-blue-500/30 hover:shadow-xl hover:shadow-blue-500/5 transition-all group">
            <div class="w-12 h-12 rounded-2xl bg-slate-50 dark:bg-white/10 shadow-sm flex items-center justify-center text-blue-600 dark:text-blue-400 mb-4 group-hover:scale-110 transition-transform">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>
            </div>
            <h3 class="text-lg font-bold text-slate-900 dark:text-white mb-2">Ingeniería & Lógica</h3>
            <p class="text-sm text-slate-500 dark:text-slate-400 leading-relaxed">Formación académica rigurosa aplicada a problemas del mundo real con enfoque en algoritmos y eficiencia.</p>
          </div>

          <div class="p-6 rounded-3xl bg-white dark:bg-white/5 border border-slate-200 dark:border-white/10 shadow-sm dark:shadow-none hover:border-purple-200 dark:hover:border-purple-500/30 hover:shadow-xl hover:shadow-purple-500/5 transition-all group">
            <div class="w-12 h-12 rounded-2xl bg-slate-50 dark:bg-white/10 shadow-sm flex items-center justify-center text-purple-600 dark:text-purple-400 mb-4 group-hover:scale-110 transition-transform">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="m18 16 4-4-4-4"/><path d="m6 8-4 4 4 4"/><path d="m14.5 4-5 16"/></svg>
            </div>
            <h3 class="text-lg font-bold text-slate-900 dark:text-white mb-2">Full Stack Craft</h3>
            <p class="text-sm text-slate-500 dark:text-slate-400 leading-relaxed">Dominio del ecosistema moderno de JS/TS y PHP para construir desde el backend hasta interfaces pixel-perfect.</p>
          </div>
        </div>

        <div class="flex flex-wrap gap-4 pt-4">
          <a href="{{ route('contacto') }}" class="h-12 px-6 rounded-xl bg-slate-900 dark:bg-white text-white dark:text-slate-900 font-bold text-sm flex items-center justify-center hover:bg-slate-800 dark:hover:bg-slate-100 transition-all">Contáctame ahora</a>
          <a href="#tech" class="h-12 px-6 rounded-xl bg-white dark:bg-slate-800 text-slate-600 dark:text-slate-300 font-bold text-sm flex items-center justify-center ring-1 ring-slate-200 dark:ring-white/10 hover:bg-slate-50 dark:hover:bg-slate-700 transition-all">Ver mi Stack</a>
        </div>
      </div>

    </div>

    <!-- Quick Stats Bar -->
    <div class="mt-24 grid grid-cols-2 md:grid-cols-4 gap-8 py-10 border-y border-slate-200 dark:border-white/10 shadow-sm dark:shadow-none animate-on-scroll">
      <div class="text-center">
        <div class="text-4xl font-bold text-slate-900 dark:text-white mb-1">20+</div>
        <div class="text-xs font-bold text-slate-400 uppercase tracking-widest">Proyectos</div>
      </div>
      <div class="text-center">
        <div class="text-4xl font-bold text-slate-900 dark:text-white mb-1">15+</div>
        <div class="text-xs font-bold text-slate-400 uppercase tracking-widest">Tecnologías</div>
      </div>
      <div class="text-center">
        <div class="text-4xl font-bold text-slate-900 dark:text-white mb-1">100%</div>
        <div class="text-xs font-bold text-slate-400 uppercase tracking-widest">Compromiso</div>
      </div>
      <div class="text-center">
        <div class="text-4xl font-bold text-slate-900 dark:text-white mb-1">24/7</div>
        <div class="text-xs font-bold text-slate-400 uppercase tracking-widest">Soporte</div>
      </div>
    </div>
  </div>
</section>
