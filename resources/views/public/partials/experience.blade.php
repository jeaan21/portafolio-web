<section id="experience" class="relative py-24 sm:py-32 overflow-hidden bg-transparent">
  <div class="max-w-7xl mx-auto px-6 sm:px-8 lg:px-12 relative z-10">
    <div class="text-center mb-20 animate-on-scroll">
      <h2 class="text-4xl sm:text-6xl font-bold text-slate-900 dark:text-white mb-6 font-heading tracking-tight">Experiencia & <span class="text-gradient">Trayectoria</span></h2>
      <p class="text-slate-500 dark:text-slate-400 max-w-2xl mx-auto text-lg sm:text-xl leading-relaxed">
        Mi viaje en el desarrollo de software y la ingeniería de sistemas.
      </p>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
      @foreach ($experiencias as $exp)
        @php
          $colors = [
            'freelance' => ['bg' => 'bg-blue-50 dark:bg-blue-500/10', 'text' => 'text-blue-600 dark:text-blue-400', 'shadow' => 'hover:shadow-blue-500/5'],
            'academico' => ['bg' => 'bg-purple-50 dark:bg-purple-500/10', 'text' => 'text-purple-600 dark:text-purple-400', 'shadow' => 'hover:shadow-purple-500/5'],
            'investigacion' => ['bg' => 'bg-cyan-50 dark:bg-cyan-500/10', 'text' => 'text-cyan-600 dark:text-cyan-400', 'shadow' => 'hover:shadow-cyan-500/5'],
            'educacion' => ['bg' => 'bg-emerald-50 dark:bg-emerald-500/10', 'text' => 'text-emerald-600 dark:text-emerald-400', 'shadow' => 'hover:shadow-emerald-500/5'],
            'equipo' => ['bg' => 'bg-orange-50 dark:bg-orange-500/10', 'text' => 'text-orange-600 dark:text-orange-400', 'shadow' => 'hover:shadow-orange-500/5'],
          ];
          $color = $colors[$exp->tipo] ?? $colors['freelance'];
        @endphp
        <div class="card-stagger">
          <div class="group h-full bg-white dark:bg-white/5 border border-slate-100 dark:border-white/10 p-8 rounded-[2.5rem] shadow-sm hover:shadow-2xl {{ $color['shadow'] }} transition-all duration-500">
            <div class="flex items-start gap-5 mb-6">
              <div class="w-14 h-14 rounded-2xl {{ $color['bg'] }} {{ $color['text'] }} flex items-center justify-center flex-shrink-0 group-hover:scale-110 transition-transform">
                @if ($exp->tipo === 'freelance')
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><rect x="2" y="7" width="20" height="14" rx="2" ry="2"/><path d="M16 21V5a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v16"/></svg>
                @elseif ($exp->tipo === 'academico')
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="16 18 22 12 16 6"/><polyline points="8 6 2 12 8 18"/></svg>
                @elseif ($exp->tipo === 'investigacion')
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M4 14.899A7 7 0 1 1 9.1 3.182"/><circle cx="9" cy="15" r="3"/><path d="M12 21v-1a4 4 0 0 0-4-4H3"/><path d="M19 11a4 4 0 0 0-4-4h-3"/><path d="M21 21v-1a4 4 0 0 0-4-4h-3"/></svg>
                @elseif ($exp->tipo === 'educacion')
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M22 10v6M2 10v6M12 2v20M2 10h20M2 16h20"/></svg>
                @else
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 0 0-3-3.87"/><path d="M16 3.13a4 4 0 0 1 0 7.75"/></svg>
                @endif
              </div>
              <div>
                <h3 class="text-xl font-bold text-slate-900 dark:text-white leading-tight">{{ $exp->titulo }}</h3>
                <p class="text-xs font-bold text-slate-400 uppercase tracking-widest mt-1">{{ $exp->empresa }}</p>
                <span class="inline-block mt-2 px-3 py-1 rounded-lg {{ $color['bg'] }} {{ $color['text'] }} text-[10px] font-black uppercase">{{ $exp->periodo }}</span>
              </div>
            </div>
            <p class="text-sm text-slate-500 dark:text-slate-400 leading-relaxed mb-8">{{ $exp->descripcion }}</p>
          </div>
        </div>
      @endforeach
    </div>
  </div>
</section>
