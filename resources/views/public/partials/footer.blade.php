<footer class="relative bg-white dark:bg-[#0B0E14] border-t border-slate-100 dark:border-white/5 pt-24 pb-12 overflow-hidden transition-colors duration-500">
  <div class="absolute top-0 left-1/2 -translate-x-1/2 w-full h-px bg-gradient-to-r from-transparent via-slate-200 dark:via-white/10 to-transparent"></div>
  
  <div class="max-w-7xl mx-auto px-6 sm:px-8 lg:px-12 relative z-10">
    <div class="grid grid-cols-1 md:grid-cols-12 gap-16 mb-20">
      
      <!-- Brand Column -->
      <div class="md:col-span-5 space-y-8">
        <a href="{{ url('/') }}" class="text-3xl font-black tracking-tighter text-slate-900 dark:text-white font-heading">
          JA<span class="text-blue-600">.</span>
        </a>
        <p class="text-lg text-slate-500 dark:text-slate-400 leading-relaxed max-w-sm">
          Ingeniero de Sistemas y Desarrollador Full Stack. Construyendo soluciones digitales con artesanía y precisión técnica.
        </p>
        <div class="flex items-center gap-4">
          <a href="{{ env('GITHUB_URL', 'https://github.com/jemy-22') }}" target="_blank" class="w-12 h-12 rounded-2xl bg-slate-50 dark:bg-white/5 flex items-center justify-center hover:bg-slate-100 dark:hover:bg-white/10 transition-all duration-300 shadow-sm">
            @svgl('GitHub', 'w-5 h-5')
          </a>
          <a href="https://www.linkedin.com/in/jean-arias-atencio-447b03272/" target="_blank" class="w-12 h-12 rounded-2xl bg-slate-50 dark:bg-white/5 flex items-center justify-center hover:bg-blue-50 dark:hover:bg-blue-950/20 transition-all duration-300 shadow-sm">
            @svgl('LinkedIn', 'w-5 h-5')
          </a>
          <a href="https://wa.me/{{ env('CONTACT_WHATSAPP', '51931926353') }}" target="_blank" class="w-12 h-12 rounded-2xl bg-slate-50 dark:bg-white/5 flex items-center justify-center hover:bg-green-50 dark:hover:bg-green-950/20 transition-all duration-300 shadow-sm">
            @svgl('WhatsApp', 'w-5 h-5')
          </a>
        </div>
      </div>

      <!-- Links Columns -->
      <div class="md:col-span-7 grid grid-cols-2 sm:grid-cols-3 gap-12">
        <div class="space-y-6">
          <h4 class="text-xs font-bold text-slate-900 dark:text-white uppercase tracking-[0.2em]">Navegación</h4>
          <ul class="space-y-4">
            <li><a href="{{ url('/') }}" class="text-sm font-medium text-slate-500 dark:text-slate-400 hover:text-blue-600 dark:hover:text-blue-400 transition-colors">Inicio</a></li>
            <li><a href="{{ url('/#about') }}" class="text-sm font-medium text-slate-500 dark:text-slate-400 hover:text-blue-600 dark:hover:text-blue-400 transition-colors">Sobre mí</a></li>
            <li><a href="{{ route('proyectos') }}" class="text-sm font-medium text-slate-500 dark:text-slate-400 hover:text-blue-600 dark:hover:text-blue-400 transition-colors">Proyectos</a></li>
          </ul>
        </div>
        <div class="space-y-6">
          <h4 class="text-xs font-bold text-slate-900 dark:text-white uppercase tracking-[0.2em]">Legal</h4>
          <ul class="space-y-4">
            <li><a href="#" class="text-sm font-medium text-slate-500 dark:text-slate-400 hover:text-blue-600 dark:hover:text-blue-400 transition-colors">Privacidad</a></li>
            <li><a href="#" class="text-sm font-medium text-slate-500 dark:text-slate-400 hover:text-blue-600 dark:hover:text-blue-400 transition-colors">Términos</a></li>
          </ul>
        </div>
        <div class="space-y-6 col-span-2 sm:col-span-1">
          <h4 class="text-xs font-bold text-slate-900 dark:text-white uppercase tracking-[0.2em]">Contacto</h4>
          <p class="text-sm font-medium text-slate-500 dark:text-slate-400">Perú, Lima</p>
          <p class="text-sm font-bold text-slate-900 dark:text-white">{{ env('CONTACT_EMAIL', 'jean2015arias@gmail.com') }}</p>
        </div>
      </div>

    </div>

    <!-- Bottom Bar -->
    <div class="pt-12 border-t border-slate-100 dark:border-white/5 flex flex-col sm:flex-row items-center justify-between gap-6">
      <p class="text-xs font-bold text-slate-400 uppercase tracking-widest">
        &copy; {{ date('Y') }} {{ env('SITE_AUTHOR', 'Jean Arias') }}. Hecho con <span class="text-red-500">♥</span> y código.
      </p>
      <div class="flex items-center gap-8">
        <span class="text-[10px] font-bold text-slate-400 uppercase tracking-[0.3em]">Status: <span class="text-green-500">Live</span></span>
      </div>
    </div>
  </div>
</footer>
