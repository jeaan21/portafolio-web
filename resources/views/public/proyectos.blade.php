@extends('layouts.app')

@section('title', 'Proyectos — Jean Arias | Full Stack Developer Lima, Perú')
@section('meta_description', 'Portafolio de proyectos de Jean Arias — Desarrollador Full Stack en Lima, Perú. Sistemas empresariales, apps web, APIs y arquitecturas escalables con React, Laravel, Node.js.')
@section('og_title', 'Proyectos — Jean Arias | Full Stack Developer')
@section('og_description', '20+ proyectos de sistemas empresariales con React, Laravel, Node.js y arquitecturas cloud. Ver portafolio completo.')

@section('content')
<section class="relative py-24 sm:py-32 overflow-hidden bg-transparent">
  <div class="max-w-7xl mx-auto px-6 sm:px-8 lg:px-12">
    <div class="text-center mb-20 animate-on-scroll">
      <h2 class="text-4xl sm:text-6xl font-bold text-slate-900 dark:text-white mb-6 font-heading tracking-tight">Proyectos <span class="text-gradient">Destacados</span></h2>      
      <p class="text-slate-500 dark:text-slate-400 max-w-2xl mx-auto text-lg sm:text-xl leading-relaxed">Soluciones empresariales reales con arquitectura moderna y escalable.</p> 
    </div>

    <!-- Filters & Search -->
    <div class="flex flex-col lg:flex-row items-center justify-between gap-8 mb-12 animate-on-scroll" style="transition-delay: 0.1s">
      <div class="flex gap-3 flex-wrap justify-center" id="project-filters">
        <button data-filter="todos" class="px-6 py-2.5 rounded-2xl text-xs font-black uppercase tracking-widest transition-all duration-300 bg-slate-900 dark:bg-white text-white dark:text-slate-900 shadow-xl shadow-slate-900/20">Todos</button>
        @foreach(['Full Stack', 'Frontend', 'Backend', 'App'] as $cat)
          <button data-filter="{{ $cat }}" class="px-6 py-2.5 rounded-2xl text-xs font-black uppercase tracking-widest transition-all duration-300 bg-white dark:bg-slate-900 text-slate-500 dark:text-slate-400 hover:text-slate-900 dark:hover:text-white ring-1 ring-slate-200 dark:ring-slate-800 hover:ring-slate-300 dark:hover:ring-slate-700 shadow-sm">{{ $cat }}</button>
        @endforeach
      </div>
      
      <div class="relative w-full lg:w-80">
        <div class="absolute left-5 top-1/2 -translate-y-1/2 text-slate-400">
          <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><circle cx="11" cy="11" r="8"/><line x1="21" y1="21" x2="16.65" y2="16.65"/></svg>
        </div>
        <input type="text" id="project-search" placeholder="Buscar proyecto..." 
          class="w-full h-14 pl-14 pr-6 rounded-[2rem] border-none bg-white dark:bg-slate-900 text-slate-900 dark:text-white shadow-sm ring-1 ring-slate-200 dark:ring-slate-800 focus:ring-2 focus:ring-blue-500 transition-all outline-none text-sm font-medium">
      </div>
    </div>

    <!-- Projects Grid -->
    <div id="projects-grid" class="grid grid-cols-1 md:grid-cols-2 gap-8">
      @if ($proyectos->isEmpty())
        <div class="col-span-full text-center py-20 animate-on-scroll">
          <div class="inline-flex items-center justify-center w-16 h-16 rounded-full bg-slate-100 dark:bg-slate-800 text-slate-400 dark:text-slate-500 mb-6">
            <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><path d="m4.9 4.9 14.2 14.2"/></svg>
          </div>
          <h3 class="text-xl font-bold text-slate-900 dark:text-white mb-2 font-heading">No se encontraron proyectos</h3>
          <p class="text-slate-500 dark:text-slate-400 max-w-md mx-auto">Actualmente no hay proyectos para mostrar o la base de datos no está disponible. Por favor, intenta de nuevo más tarde.</p>
        </div>
      @else
        @foreach ($proyectos as $p)
          @php
            $tecs = $p->tecnologias ?? [];
            $category = trim($p->categoria);
          @endphp
          <div class="project-card card-stagger" data-category="{{ $category }}" data-title="{{ strtolower($p->titulo) }}" data-desc="{{ strtolower($p->descripcion ?? '') }}" data-tech="{{ strtolower(implode(' ', $tecs)) }}">
            <div class="group h-full bg-white dark:bg-slate-900 rounded-[2.5rem] border border-slate-100 dark:border-slate-800 shadow-sm hover:shadow-2xl hover:shadow-blue-500/5 transition-all duration-700 overflow-hidden flex flex-col">
              
              <!-- Image Container -->
              <div class="h-64 relative overflow-hidden bg-slate-50 dark:bg-slate-800">
                @if ($p->imagen)
                  <img src="{{ $p->imagen_url }}" alt="{{ $p->titulo }}" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700">
                @else
                  <div class="w-full h-full bg-gradient-to-br from-slate-50 to-slate-100 dark:from-slate-800 dark:to-slate-900 flex items-center justify-center">
                    <div class="text-4xl font-black text-slate-200 dark:text-slate-700 font-heading">JA</div>
                  </div>
                @endif
                
                <!-- Category Badge -->
                <div class="absolute top-6 left-6">
                  <span class="px-4 py-1.5 rounded-xl bg-white/90 dark:bg-slate-900/90 backdrop-blur-md shadow-sm text-[10px] font-black uppercase tracking-widest text-slate-900 dark:text-white border border-white/20 dark:border-slate-800/20">
                    {{ $category }}
                  </span>
                </div>
              </div>

              <!-- Content -->
              <div class="p-8 sm:p-10 flex-1 flex flex-col">
                <div class="mb-6 flex-1">
                  <h3 class="text-2xl font-bold text-slate-900 dark:text-white mb-3 font-heading tracking-tight group-hover:text-blue-600 dark:group-hover:text-blue-400 transition-colors">{{ $p->titulo }}</h3>
                  <p class="text-slate-500 dark:text-slate-400 text-sm leading-relaxed line-clamp-3">{{ $p->descripcion }}</p>
                </div>

                <!-- Tech Stack -->
                <div class="flex flex-wrap gap-2 mb-8">
                  @foreach (array_slice($tecs, 0, 4) as $t)
                    <span class="inline-flex items-center gap-1.5 px-3 py-1 rounded-lg bg-slate-50 dark:bg-slate-800 text-[10px] font-bold text-slate-400 dark:text-slate-500 uppercase tracking-wider ring-1 ring-slate-100 dark:ring-slate-700 group-hover:text-slate-600 dark:group-hover:text-slate-300 transition-colors">
                      @svgl($t, 'w-3.5 h-3.5')
                      <span>{{ $t }}</span>
                    </span>
                  @endforeach
                </div>

                <!-- Actions -->
                <div class="flex items-center gap-4 pt-6 border-t border-slate-50 dark:border-slate-800">
                  @if ($p->url_proyecto && $p->url_proyecto !== '#')
                    <a href="{{ $p->url_proyecto }}" target="_blank" class="h-11 px-5 rounded-xl bg-blue-600 text-white text-xs font-bold flex items-center justify-center gap-2 hover:bg-blue-700 transition-all shadow-lg shadow-blue-500/20">
                      Live Demo
                    </a>
                  @endif
                  @if ($p->url_github && $p->url_github !== '#')
                    <a href="{{ $p->url_github }}" target="_blank" class="w-11 h-11 rounded-xl bg-slate-50 dark:bg-white/5 flex items-center justify-center hover:bg-slate-100 dark:hover:bg-white/10 transition-all duration-300 shadow-sm">
                      @svgl('GitHub', 'w-5 h-5')
                    </a>
                  @endif
                </div>
              </div>
            </div>
          </div>
        @endforeach
      @endif
    </div>
  </div>
</section>

{{-- CTA al final de proyectos — conversión de visitante interesado --}}
<section class="py-20 sm:py-28 bg-gradient-to-b from-transparent to-slate-50 dark:to-slate-900/30">
  <div class="max-w-3xl mx-auto px-6 text-center animate-on-scroll">
    <div class="inline-flex items-center gap-2 px-4 py-1.5 rounded-full bg-blue-50 dark:bg-blue-950/30 ring-1 ring-blue-100 dark:ring-blue-900/50 mb-6">
      <span class="relative flex h-2 w-2"><span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-green-400 opacity-75"></span><span class="relative inline-flex rounded-full h-2 w-2 bg-green-500"></span></span>
      <span class="text-[10px] font-bold text-blue-600 dark:text-blue-400 uppercase tracking-widest">Disponible para proyectos</span>
    </div>
    <h2 class="text-3xl sm:text-5xl font-black text-slate-900 dark:text-white mb-4 font-heading tracking-tight">
      ¿Tienes un proyecto <span class="text-gradient">en mente?</span>
    </h2>
    <p class="text-slate-500 dark:text-slate-400 mb-10 text-lg leading-relaxed max-w-xl mx-auto">
      Construyamos algo extraordinario juntos. Primera consulta técnica sin costo ni compromiso.
    </p>
    <div class="flex flex-col sm:flex-row items-center justify-center gap-4">
      <a href="{{ route('contacto') }}" 
        class="group h-14 px-10 rounded-2xl bg-blue-600 text-white font-bold flex items-center justify-center gap-3 hover:bg-blue-700 hover:shadow-xl hover:shadow-blue-600/30 transition-all w-full sm:w-auto">
        Iniciar Conversación
        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" class="group-hover:translate-x-1 transition-transform"><path d="M5 12h14m-7-7 7 7-7 7"/></svg>
      </a>
      <a href="https://wa.me/{{ env('CONTACT_WHATSAPP', '51931926353') }}" target="_blank"
        class="h-14 px-8 rounded-2xl bg-green-50 dark:bg-green-950/20 text-green-700 dark:text-green-400 font-bold flex items-center justify-center gap-3 ring-1 ring-green-200 dark:ring-green-900/50 hover:bg-green-100 transition-all w-full sm:w-auto">
        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="currentColor"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/></svg>
        WhatsApp directo
      </a>
    </div>
    <p class="text-xs text-slate-400 mt-6">⚡ Respuesta garantizada en menos de 24 horas</p>
  </div>
</section>

<script>
(function() {
  var grid = document.getElementById('projects-grid');
  var searchInput = document.getElementById('project-search');
  var filterBtns = document.querySelectorAll('#project-filters button');
  if (!grid) return;

  var cards = Array.from(grid.querySelectorAll('.project-card'));

  function filterCards(category, query) {
    cards.forEach(function(card) {
      var show = true;
      if (category !== 'todos') {
        var cat = card.getAttribute('data-category') || '';
        show = show && cat.toLowerCase() === category.toLowerCase();
      }
      if (query) {
        var title = card.getAttribute('data-title') || '';
        var desc = card.getAttribute('data-desc') || '';
        var tech = card.getAttribute('data-tech') || '';
        show = show && (title.includes(query) || desc.includes(query) || tech.includes(query));
      }
      card.style.display = show ? '' : 'none';
    });
  }

  var activeClasses = ['bg-slate-900', 'dark:bg-white', 'text-white', 'dark:text-slate-900', 'shadow-xl', 'shadow-slate-900/20'];
  var inactiveClasses = ['bg-white', 'dark:bg-slate-900', 'text-slate-500', 'dark:text-slate-400', 'hover:text-slate-900', 'dark:hover:text-white', 'ring-1', 'ring-slate-200', 'dark:ring-slate-800', 'hover:ring-slate-300', 'dark:hover:ring-slate-700', 'shadow-sm'];

  filterBtns.forEach(function(btn) {
    btn.addEventListener('click', function() {
      filterBtns.forEach(function(b) {
        activeClasses.forEach(function(cls) { b.classList.remove(cls); });
        inactiveClasses.forEach(function(cls) { b.classList.add(cls); });
      });
      inactiveClasses.forEach(function(cls) { btn.classList.remove(cls); });
      activeClasses.forEach(function(cls) { btn.classList.add(cls); });
      filterCards(btn.getAttribute('data-filter'), searchInput ? searchInput.value.toLowerCase() : '');
    });
  });

  if (searchInput) {
    searchInput.addEventListener('input', function() {
      var active = Array.from(filterBtns).find(function(btn) { return !btn.classList.contains('text-slate-500'); });
      var cat = active ? active.getAttribute('data-filter') : 'todos';
      filterCards(cat, this.value.toLowerCase());
    });
  }
})();
</script>
@endsection
