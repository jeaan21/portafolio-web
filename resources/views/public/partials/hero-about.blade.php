
<section id="about" class="relative min-h-screen flex items-center justify-center overflow-hidden py-24 sm:py-32 bg-transparent">
  <!-- Dynamic Background with Craft -->
  <div class="absolute inset-0 bg-transparent pointer-events-none">
    <div class="absolute inset-0 opacity-[0.03] dark:opacity-[0.05]" style="background-image: radial-gradient(#2563EB 1px, transparent 1px); background-size: 32px 32px;"></div>
    <div class="absolute top-0 left-1/4 w-[300px] sm:w-[500px] h-[300px] sm:h-[500px] bg-blue-400/10 rounded-full blur-[80px] sm:blur-[120px] animate-pulse"></div>
    <div class="absolute bottom-0 right-1/4 w-[300px] sm:w-[500px] h-[300px] sm:h-[500px] bg-purple-400/10 rounded-full blur-[80px] sm:blur-[120px] animate-pulse" style="animation-delay: 2s"></div>
  </div>

  <div class="relative z-10 max-w-7xl mx-auto px-6 sm:px-8 lg:px-12 w-full">
    <div class="grid grid-cols-1 lg:grid-cols-12 gap-16 lg:gap-12 items-center">
      
      <!-- Left Column: Content & Action (Protagonism info) -->
      <div class="lg:col-span-7 space-y-8 text-left animate-on-scroll">
        <div class="space-y-4">
          <!-- Availability Badge -->
          <div class="inline-flex items-center gap-2.5 px-4 py-2 rounded-full bg-white dark:bg-slate-900 shadow-sm ring-1 ring-slate-200/60 dark:ring-slate-800/60 backdrop-blur-sm">
            <span class="relative flex h-2.5 w-2.5">
              <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-green-400 opacity-75"></span>
              <span class="relative inline-flex rounded-full h-2.5 w-2.5 bg-green-500"></span>
            </span>
            <span class="text-[10px] sm:text-xs font-bold text-slate-600 dark:text-slate-400 uppercase tracking-widest">Disponible para nuevos desafíos</span>
          </div>

          <!-- Name & Main Title -->
          <div class="space-y-2">
            <p class="text-lg sm:text-xl font-bold text-blue-600 dark:text-blue-400 tracking-wider uppercase">Hola, soy Jean Arias</p>
            <h1 class="text-4xl sm:text-6xl xl:text-7xl font-extrabold text-slate-900 dark:text-white leading-[1.1] tracking-tight font-heading">
              Arquitecto de <br class="hidden sm:block"> <span class="text-gradient">soluciones digitales</span>
            </h1>
          </div>

          <!-- Typing Subtitle -->
          <div class="text-xl sm:text-2xl lg:text-3xl text-slate-500 dark:text-slate-400 h-8 sm:h-10 font-medium pt-1">
            <span id="typing-text" class="text-slate-800 dark:text-slate-200 font-bold"></span>
            <span class="animate-pulse text-blue-600 ml-1">|</span>
          </div>
        </div>

        <!-- Professional Biography -->
        <div class="space-y-4 max-w-2xl">
          <p class="text-base sm:text-lg text-slate-600 dark:text-slate-300 leading-relaxed">
            Estudiante de Ingeniería de Sistemas y Desarrollador Full Stack con una visión clara: transformar la complejidad empresarial en interfaces elegantes y sistemas robustos altamente escalables.
          </p>
          <p class="text-sm sm:text-base text-slate-500 dark:text-slate-400 leading-relaxed">
            Mi formación académica rigurosa me permite diseñar y construir desde el backend y arquitecturas de datos, hasta interfaces pixel-perfect con excelente rendimiento. Diseño experiencias digitales integrales que impulsan negocios.
          </p>
        </div>

        <!-- Main Actions -->
        <div class="flex flex-wrap gap-4 sm:gap-5 pt-2">
          <a href="{{ route('proyectos') }}" 
            class="group h-12 sm:h-14 px-6 sm:px-8 rounded-2xl bg-slate-900 dark:bg-white text-white dark:text-slate-900 font-bold flex items-center justify-center gap-3 hover:bg-slate-800 dark:hover:bg-slate-100 hover:shadow-xl hover:shadow-slate-900/10 transition-all w-full sm:w-auto">
            Explorar Proyectos
            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" class="group-hover:translate-x-1 transition-transform"><path d="M5 12h14m-7-7 7 7-7 7"/></svg>
          </a>
          
          <a href="{{ asset('resume.pdf') }}" download 
            class="h-12 sm:h-14 px-6 sm:px-8 rounded-2xl bg-white dark:bg-slate-900 text-slate-700 dark:text-slate-200 font-bold flex items-center justify-center gap-3 ring-1 ring-slate-200 dark:ring-slate-800 hover:bg-slate-50 dark:hover:bg-slate-800 hover:ring-slate-300 transition-all shadow-sm w-full sm:w-auto">
            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"/><polyline points="7 10 12 15 17 10"/><line x1="12" y1="15" x2="12" y2="3"/></svg>
            Descargar CV
          </a>

          <a href="{{ route('contacto') }}" 
            class="h-12 sm:h-14 px-6 sm:px-8 rounded-2xl bg-blue-50 dark:bg-white/5 text-blue-600 dark:text-slate-300 font-bold flex items-center justify-center gap-2 hover:bg-blue-100 dark:hover:bg-white/10 transition-all w-full sm:w-auto">
            Hablemos
          </a>
        </div>

        <!-- Quick Stats Bar (Combined directly in hero) -->
        <div class="grid grid-cols-2 sm:grid-cols-4 gap-6 pt-6 border-t border-slate-200/60 dark:border-white/10">
          <div>
            <div class="text-3xl font-extrabold text-slate-900 dark:text-white">20+</div>
            <div class="text-[10px] font-bold text-slate-400 uppercase tracking-widest mt-0.5">Proyectos</div>
          </div>
          <div>
            <div class="text-3xl font-extrabold text-slate-900 dark:text-white">15+</div>
            <div class="text-[10px] font-bold text-slate-400 uppercase tracking-widest mt-0.5">Tecnologías</div>
          </div>
          <div>
            <div class="text-3xl font-extrabold text-slate-900 dark:text-white">100%</div>
            <div class="text-[10px] font-bold text-slate-400 uppercase tracking-widest mt-0.5">Compromiso</div>
          </div>
          <div>
            <div class="text-3xl font-extrabold text-slate-900 dark:text-white">24/7</div>
            <div class="text-[10px] font-bold text-slate-400 uppercase tracking-widest mt-0.5">Disponibilidad</div>
          </div>
        </div>
      </div>

      <!-- Right Column: Profile Image & Strengths Bento Grid -->
      <div class="lg:col-span-5 space-y-8 animate-on-scroll" style="transition-delay: 0.2s">
        <!-- Interactive Image Card -->
        <div class="relative aspect-square max-w-[400px] mx-auto lg:max-w-none">
          <!-- Decorative Background Shape -->
          <div class="absolute inset-0 translate-x-4 translate-y-4 rounded-[3rem] bg-blue-600/5 ring-1 ring-blue-600/10"></div>

          <!-- Image Container -->
          <div class="relative h-full w-full rounded-[2.5rem] overflow-hidden shadow-2xl shadow-slate-200 dark:shadow-none ring-1 ring-slate-200 dark:ring-white/10">
            <img src="{{ asset('img/foto-perfil.jpg') }}" alt="Jean Arias"
              class="w-full h-full object-cover grayscale hover:grayscale-0 transition-all duration-700 hover:scale-105"
              onerror="this.src='data:image/svg+xml,<svg xmlns=%22http://www.w3.org/2000/svg%22 width=%22400%22 height=%22400%22><rect fill=%22%23f1f5f9%22 width=%22400%22 height=%22400%22/><text x=%22200%22 y=%22200%22 text-anchor=%22middle%22 dy=%22.35em%22 fill=%22%2394a3b8%22 font-size=%2264%22 font-family=%22system-ui%22 font-weight=%22bold%22>JA</text></svg>'">
          </div>

          <!-- Floating Badge -->
          <div class="absolute -bottom-4 -right-4 bg-white dark:bg-slate-900 p-5 rounded-[2rem] shadow-xl dark:shadow-none ring-1 ring-slate-100 dark:ring-white/10 animate-float">
            <div class="flex items-center gap-4">
              <div class="w-11 h-11 rounded-2xl bg-blue-600 text-white flex items-center justify-center font-bold text-lg shadow-lg shadow-blue-500/30">4+</div>
              <div>
                <p class="text-[9px] font-bold text-slate-400 uppercase tracking-widest">Años de</p>
                <p class="text-xs font-bold text-slate-900 dark:text-white">Pasión Código</p>
              </div>
            </div>
          </div>
        </div>

        <!-- Bento Strengths (Engineering & Full Stack cards inline) -->
        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 max-w-[400px] mx-auto lg:max-w-none">
          <!-- Card 1: Ingeniería & Lógica -->
          <div class="p-5 rounded-3xl bg-white dark:bg-white/5 border border-slate-200 dark:border-white/10 shadow-sm dark:shadow-none hover:border-blue-200 dark:hover:border-blue-500/30 transition-all group">
            <div class="w-10 h-10 rounded-2xl bg-slate-50 dark:bg-white/10 shadow-sm flex items-center justify-center text-blue-600 dark:text-blue-400 mb-3 group-hover:scale-110 transition-transform">
              <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>
            </div>
            <h3 class="text-base font-bold text-slate-900 dark:text-white mb-1.5 font-heading">Ingeniería & Lógica</h3>
            <p class="text-xs text-slate-500 dark:text-slate-400 leading-relaxed">Formación académica rigurosa aplicada a la eficiencia algorítmica.</p>
          </div>

          <!-- Card 2: Full Stack Craft -->
          <div class="p-5 rounded-3xl bg-white dark:bg-white/5 border border-slate-200 dark:border-white/10 shadow-sm dark:shadow-none hover:border-purple-200 dark:hover:border-purple-500/30 transition-all group">
            <div class="w-10 h-10 rounded-2xl bg-slate-50 dark:bg-white/10 shadow-sm flex items-center justify-center text-purple-600 dark:text-purple-400 mb-3 group-hover:scale-110 transition-transform">
              <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="m18 16 4-4-4-4"/><path d="m6 8-4 4 4 4"/><path d="m14.5 4-5 16"/></svg>
            </div>
            <h3 class="text-base font-bold text-slate-900 dark:text-white mb-1.5 font-heading">Full Stack Craft</h3>
            <p class="text-xs text-slate-500 dark:text-slate-400 leading-relaxed">Dominio moderno de JS/TS y PHP para soluciones integrales robustas.</p>
          </div>
        </div>
      </div>

    </div>
  </div>

  <!-- Scroll Down Indicator -->
  <div class="absolute bottom-8 left-1/2 -translate-x-1/2 animate-on-scroll pointer-events-none" style="transition-delay: 0.6s">
    <a href="#tech" class="flex flex-col items-center gap-2 text-slate-400 hover:text-blue-600 transition-colors group pointer-events-auto">
      <span class="text-[9px] font-bold uppercase tracking-[0.2em] ml-1">Stack Tecnológico</span>
      <div class="w-5 h-8 rounded-full border-2 border-current p-1 flex justify-center">
        <div class="w-1 h-1.5 bg-current rounded-full animate-bounce"></div>
      </div>
    </a>
  </div>
</section>

<script src="{{ asset('js/hero.js') }}"></script>
