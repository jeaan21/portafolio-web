<section id="testimonials" class="relative py-24 sm:py-32 overflow-hidden bg-slate-50/50 dark:bg-transparent">
  <div class="max-w-7xl mx-auto px-6 sm:px-8 lg:px-12 relative z-10">
    <div class="text-center mb-20 animate-on-scroll">
      <h2 class="text-4xl sm:text-6xl font-bold text-slate-900 dark:text-white mb-6 font-heading tracking-tight">Voces de <span class="text-gradient">Confianza</span></h2>
      <p class="text-slate-500 dark:text-slate-400 max-w-2xl mx-auto text-lg sm:text-xl leading-relaxed">
        El impacto de mi trabajo a través de las experiencias de quienes han colaborado conmigo.
      </p>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
      @foreach ($testimonios as $idx => $t)
        @php
          $colors = ['hover:shadow-blue-500/5', 'hover:shadow-purple-500/5', 'hover:shadow-cyan-500/5'];
          $shadowColor = $colors[$idx % 3];
          $initials = implode('', array_map(fn($n) => strtoupper($n[0] ?? ''), explode(' ', $t->nombre)));
        @endphp
        <div class="card-stagger">
          <div class="group h-full bg-white dark:bg-slate-900 p-10 rounded-[3rem] border border-slate-100 dark:border-slate-800 shadow-sm hover:shadow-2xl {{ $shadowColor }} transition-all duration-500 relative">
            <div class="absolute top-8 right-10 text-slate-100 dark:text-slate-800 group-hover:text-blue-50 dark:group-hover:text-blue-950/20 transition-colors duration-500">
              <svg xmlns="http://www.w3.org/2000/svg" width="60" height="60" viewBox="0 0 24 24" fill="currentColor"><path d="M14.017 21v-7.391c0-5.704 3.731-9.57 8.983-10.609l.995 2.151c-2.432.917-3.995 3.638-3.995 5.849h4v10h-9.983zm-14.017 0v-7.391c0-5.704 3.748-9.57 9-10.609l.996 2.151c-2.437.917-4 3.638-4 5.849h3.999v10h-9.995z"/></svg>
            </div>
            <div class="relative z-10 space-y-6">
              <div class="flex gap-1">
                @for ($i = 0; $i < $t->valoracion; $i++)
                  <svg class="w-5 h-5 text-yellow-400 fill-current" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                @endfor
              </div>
              <p class="text-lg text-slate-500 dark:text-slate-400 leading-relaxed italic">
                "{{ $t->texto }}"
              </p>
              <div class="flex items-center gap-4 pt-4 border-t border-slate-100 dark:border-slate-800">
                @if ($t->avatar)
                  <img class="w-12 h-12 rounded-full object-cover" src="{{ asset($t->avatar) }}" alt="{{ $t->nombre }}">
                @else
                  <div class="w-12 h-12 rounded-full bg-slate-100 dark:bg-slate-800 flex items-center justify-center font-bold text-slate-400 dark:text-slate-500">{{ substr($initials, 0, 2) }}</div>
                @endif
                <div>
                  <h4 class="font-bold text-slate-900 dark:text-white">{{ $t->nombre }}</h4>
                  <p class="text-xs font-bold text-slate-400 uppercase tracking-widest">{{ $t->cargo }}</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      @endforeach
    </div>
  </div>
</section>
