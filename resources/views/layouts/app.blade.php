<!DOCTYPE html>
<html lang="es" class="scroll-smooth">
<head>
  @if(env('GA4_MEASUREMENT_ID'))
    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id={{ env('GA4_MEASUREMENT_ID') }}"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());
      gtag('config', "{{ env('GA4_MEASUREMENT_ID') }}");
    </script>
  @endif
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title>@yield('title', 'Jean Arias | Full Stack Developer & Ingeniero de Sistemas')</title>

  <meta name="description" content="@yield('meta_description', 'Jean Arias — Desarrollador Full Stack e Ingeniero de Sistemas en Lima, Perú. Especializado en React, Laravel, Node.js y arquitecturas cloud escalables. 20+ proyectos entregados. Disponible para proyectos.')">
  <meta name="keywords" content="desarrollador full stack lima peru, ingeniero de sistemas freelance peru, full stack developer laravel react, arquitectura de software peru, jean arias developer">
  <meta name="author" content="Jean Arias">

  <link rel="canonical" href="{{ url()->current() }}">

  <meta property="og:type" content="website">
  <meta property="og:url" content="{{ url()->current() }}">
  <meta property="og:title" content="@yield('og_title', 'Jean Arias | Full Stack Developer & Ingeniero de Sistemas')">
  <meta property="og:description" content="@yield('og_description', 'Desarrollador Full Stack e Ingeniero de Sistemas en Lima, Perú. 20+ proyectos entregados. Especializado en React, Laravel, Node.js y arquitecturas escalables.')">
  <meta property="og:image" content="@yield('og_image', asset('img/og-preview.jpg'))">
  <meta property="og:locale" content="es_PE">
  <meta property="og:site_name" content="Jean Arias Portfolio">

  <meta name="twitter:card" content="summary_large_image">
  <meta name="twitter:title" content="@yield('og_title', 'Jean Arias | Full Stack Developer')">
  <meta name="twitter:description" content="@yield('og_description', 'Desarrollador Full Stack en Lima, Perú. 20+ proyectos entregados.')">
  <meta name="twitter:image" content="@yield('og_image', asset('img/og-preview.jpg'))">

  <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}">
  <link rel="apple-touch-icon" href="{{ asset('img/apple-touch-icon.png') }}">

  <script type="application/ld+json">
  {
    "@context": "https://schema.org",
    "@type": "Person",
    "name": "Jean Arias",
    "jobTitle": "Full Stack Developer & Ingeniero de Sistemas",
    "description": "Desarrollador Full Stack e Ingeniero de Sistemas en Lima, Perú. Especializado en React, Laravel, Node.js y arquitecturas escalables.",
    "url": "{{ url('/') }}",
    "email": "jean2015arias@gmail.com",
    "telephone": "+51935515325",
    "address": {
      "@type": "PostalAddress",
      "addressLocality": "Lima",
      "addressCountry": "PE"
    },
    "sameAs": [
      "https://github.com/jemy-22",
      "https://www.linkedin.com/in/jean-arias-atencio-447b03272/"
    ],
    "knowsAbout": ["React", "Laravel", "Node.js", "TypeScript", "Docker", "PHP", "PostgreSQL", "MySQL"]
  }
  </script>

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=DM+Sans:opsz,wght@9..40,400;9..40,500;9..40,600;9..40,700&family=Syne:wght@400;500;600;700;800&family=JetBrains+Mono:wght@400;500&display=swap" rel="stylesheet">

  <script>
    (function() {
      var theme = localStorage.getItem('theme');
      if (!theme) {
        theme = window.matchMedia('(prefers-color-scheme: dark)').matches ? 'dark' : 'light';
      }
      if (theme === 'dark') {
        document.documentElement.classList.add('dark');
      }
    })();
  </script>

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

  @yield('head')
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

        swup.hooks.on('page:view', () => {
          const currentPath = window.location.pathname;
          document.querySelectorAll('#navbar a').forEach(a => {
            const href = new URL(a.href, window.location.origin).pathname;
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
