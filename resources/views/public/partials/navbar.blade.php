<header id="navbar" class="fixed top-0 left-0 right-0 z-50 transition-all duration-500 bg-transparent">
  @php
    $pages = [
      ['href' => url('/'), 'id' => 'inicio', 'label' => 'Inicio'],
      ['href' => url('/#about'), 'id' => 'sobre-mi', 'label' => 'Sobre mí'],
      ['href' => route('proyectos'), 'id' => 'proyectos', 'label' => 'Proyectos'],
      ['href' => route('arquitectura'), 'id' => 'arquitectura', 'label' => 'Arquitectura'],
      ['href' => route('contacto'), 'id' => 'contacto', 'label' => 'Contacto']
    ];
    $currentRoute = request()->route() ? request()->route()->getName() : null;
  @endphp
  <nav class="max-w-7xl mx-auto px-6 sm:px-8 lg:px-12 h-20 sm:h-24 flex items-center justify-between">
    <a href="{{ url('/') }}" class="text-2xl sm:text-3xl font-black tracking-tighter text-slate-900 dark:text-white font-heading group">
      JA<span class="text-blue-600 group-hover:ml-1 transition-all">.</span>
    </a>

    <div class="hidden md:flex items-center gap-10">
      <div class="flex items-center gap-8">
        @foreach ($pages as $p)
          <a href="{{ $p['href'] }}" 
            class="text-sm font-bold uppercase tracking-widest transition-all duration-300 {{ ($currentRoute === $p['id'] || ($p['id'] === 'inicio' && $currentRoute === null)) ? 'text-blue-600' : 'text-slate-500 dark:text-slate-400 hover:text-slate-900 dark:hover:text-white' }}">
            {{ $p['label'] }}
          </a>
        @endforeach
      </div>

      <div class="h-6 w-px bg-slate-200 dark:bg-slate-800 mx-2"></div>

      <button id="theme-toggle" class="relative w-11 h-11 rounded-2xl bg-white dark:bg-slate-900 shadow-sm ring-1 ring-slate-200 dark:ring-slate-800 flex items-center justify-center text-slate-600 dark:text-slate-400 hover:ring-blue-500 transition-all duration-300" aria-label="Toggle theme">
        <svg id="moon-icon" xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M21 12.79A9 9 0 1 1 11.21 3 7 7 0 0 0 21 12.79z"/></svg>
        <svg id="sun-icon" xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" class="hidden"><circle cx="12" cy="12" r="5"/><path d="M12 1v2M12 21v2M4.22 4.22l1.42 1.42M18.36 18.36l1.42 1.42M1 12h2M21 12h2M4.22 19.78l1.42-1.42M18.36 5.64l1.42-1.42"/></svg>
      </button>
    </div>

    <div class="flex md:hidden items-center gap-4">
      <button id="theme-toggle-mobile" class="w-11 h-11 rounded-2xl bg-white dark:bg-slate-900 shadow-sm ring-1 ring-slate-200 dark:ring-slate-800 flex items-center justify-center text-slate-600 dark:text-slate-400" aria-label="Toggle theme">
        <svg id="moon-icon-mobile" xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M21 12.79A9 9 0 1 1 11.21 3 7 7 0 0 0 21 12.79z"/></svg>
        <svg id="sun-icon-mobile" xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" class="hidden"><circle cx="12" cy="12" r="5"/><path d="M12 1v2M12 21v2M4.22 4.22l1.42 1.42M18.36 18.36l1.42 1.42M1 12h2M21 12h2M4.22 19.78l1.42-1.42M18.36 5.64l1.42-1.42"/></svg>
      </button>
      <button id="mobile-menu-btn" class="w-11 h-11 rounded-2xl bg-slate-900 dark:bg-white text-white dark:text-slate-900 flex items-center justify-center shadow-lg" aria-label="Menu">
        <svg id="menu-icon" xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><line x1="3" y1="12" x2="21" y2="12"/><line x1="3" y1="6" x2="21" y2="6"/><line x1="3" y1="18" x2="21" y2="18"/></svg>
        <svg id="close-icon" xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" class="hidden"><line x1="18" y1="6" x2="6" y2="18"/><line x1="6" y1="6" x2="18" y2="18"/></svg>
      </button>
    </div>
  </nav>

  <div id="mobile-menu" class="hidden md:hidden bg-white/98 dark:bg-slate-900/98 backdrop-blur-2xl h-screen w-full fixed inset-0 z-[-1] flex items-center justify-center">
    <div class="px-12 py-24 text-center space-y-8">
      @foreach ($pages as $p)
        <a href="{{ $p['href'] }}" 
          class="block text-3xl font-black font-heading tracking-tighter transition-all {{ ($currentRoute === $p['id'] || ($p['id'] === 'inicio' && $currentRoute === null)) ? 'text-blue-600 scale-110' : 'text-slate-400 dark:text-slate-500 hover:text-slate-900 dark:hover:text-white' }}">
          {{ $p['label'] }}
        </a>
      @endforeach
    </div>
  </div>
</header>
