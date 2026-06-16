<!DOCTYPE html>
<html lang="es" class="scroll-smooth">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>@yield('title', 'Jean Arias') | @yield('description', 'Ingeniero de Sistemas & Full Stack Developer')</title>
  <meta name="description" content="@yield('description', 'Ingeniero de Sistemas & Full Stack Developer')">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=DM+Sans:opsz,wght@9..40,400;9..40,500;9..40,600;9..40,700&family=Syne:wght@400;500;600;700;800&family=JetBrains+Mono:wght@400;500&display=swap" rel="stylesheet">
  <script src="https://cdn.tailwindcss.com"></script>
  <script>
    tailwind.config = {
      darkMode: 'class',
      theme: {
        extend: {
          fontFamily: {
            sans: ['DM Sans', 'system-ui', 'sans-serif'],
            heading: ['Syne', 'sans-serif'],
            mono: ['JetBrains Mono', 'monospace'],
          }
        }
      }
    }
  </script>
  <link rel="stylesheet" href="{{ asset('css/app.css') }}">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <meta name="base-url" content="{{ url('/') }}">
</head>
<body class="text-slate-900 antialiased transition-colors duration-300">
  
  @include('public.partials.navbar')

  <main id="swup" class="transition-fade min-h-screen bg-[#F8FAFC] dark:bg-[#0B0E14] transition-colors duration-500">
      @yield('content')
  </main>

  @include('public.partials.footer')
  @include('public.partials.chatbot-widget')

  <script src="{{ asset('js/app.js') }}"></script>
  <script src="https://unpkg.com/swup@4"></script>
  <script src="https://unpkg.com/@swup/scripts-plugin@2"></script>
  <script>
    document.addEventListener('DOMContentLoaded', () => {
      if (typeof Swup !== 'undefined') {
        const swup = new Swup({
          plugins: [new SwupScriptsPlugin()]
        });

        const routeOrder = ['/', '/inicio', '/proyectos', '/arquitectura', '/contacto'];

        swup.hooks.on('visit:start', (visit) => {
          const fromUrl = new URL(visit.from.url, window.location.origin).pathname;
          const toUrl = new URL(visit.to.url, window.location.origin).pathname;

          let fromIndex = routeOrder.indexOf(fromUrl);
          if (fromIndex === -1) fromIndex = 0;
          let toIndex = routeOrder.indexOf(toUrl);
          if (toIndex === -1) toIndex = 0;

          if (toIndex > fromIndex) {
            document.documentElement.classList.add('slide-left');
            document.documentElement.classList.remove('slide-right');
          } else {
            document.documentElement.classList.add('slide-right');
            document.documentElement.classList.remove('slide-left');
          }
        });

        // Actualizar dinámicamente la pestaña activa del menú al cambiar de página
        swup.hooks.on('page:view', () => {
          const currentPath = window.location.pathname;
          document.querySelectorAll('#navbar a').forEach(a => {
            const href = new URL(a.href, window.location.origin).pathname;
            // Evitar resaltar el anchor de "sobre mí" si no estamos en inicio
            if (a.href.includes('#about') && currentPath !== '/' && currentPath !== '/inicio') {
              a.classList.remove('text-blue-600');
              a.classList.add('text-slate-500', 'dark:text-slate-400', 'hover:text-slate-900', 'dark:hover:text-white');
              return;
            }
            const isSame = href === currentPath || (currentPath === '/' && href === '/inicio');
            if (isSame && !a.href.includes('#about')) {
              a.classList.add('text-blue-600');
              a.classList.remove('text-slate-500', 'dark:text-slate-400', 'hover:text-slate-900', 'dark:hover:text-white');
            } else {
              a.classList.remove('text-blue-600');
              a.classList.add('text-slate-500', 'dark:text-slate-400', 'hover:text-slate-900', 'dark:hover:text-white');
            }
          });
        });
      }
    });
  </script>
</body>
</html>
