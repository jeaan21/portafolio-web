
<section id="tech" class="relative py-24 sm:py-32 overflow-hidden bg-transparent">
  <div class="max-w-7xl mx-auto px-6 sm:px-8 lg:px-12 relative z-10">
    <div class="text-center mb-20 animate-on-scroll">
      <h2 class="text-4xl sm:text-6xl font-bold text-slate-900 dark:text-white mb-6 font-heading tracking-tight">Stack <span class="text-gradient">Tecnológico</span></h2>
      <p class="text-slate-500 dark:text-slate-400 max-w-2xl mx-auto text-lg sm:text-xl leading-relaxed">
        Herramientas y lenguajes que utilizo para dar vida a arquitecturas complejas y experiencias de usuario fluidas.
      </p>
    </div>

    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-8">

      <!-- Frontend -->
      <div class="card-stagger">
        <div class="group h-full bg-white dark:bg-white/5 p-8 rounded-[2.5rem] border border-slate-200 dark:border-white/10 shadow-sm dark:shadow-none transition-all hover:shadow-2xl hover:shadow-blue-500/10 hover:-translate-y-2 transition-all duration-500">
          <div class="w-14 h-14 rounded-2xl bg-blue-50 text-blue-600 flex items-center justify-center mb-6 group-hover:scale-110 transition-transform">
            <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="16 18 22 12 16 6"/><polyline points="8 6 2 12 8 18"/></svg>
          </div>
          <h3 class="text-xl font-bold text-slate-900 dark:text-white mb-4 font-heading">Frontend</h3>
          <div class="flex flex-wrap gap-2">
            @foreach(['React', 'Next.js', 'TypeScript', 'Tailwind CSS', 'Framer Motion'] as $skill)
              <span class="inline-flex items-center gap-2 px-4 py-1.5 rounded-xl bg-slate-50 dark:bg-white/5 text-xs font-bold text-slate-600 dark:text-slate-400 ring-1 ring-slate-100 dark:ring-white/10">
                @svgl($skill, 'w-4 h-4')
                <span>{{ $skill }}</span>
              </span>
            @endforeach
          </div>
        </div>
      </div>

      <!-- Backend -->
      <div class="card-stagger">
        <div class="group h-full bg-white dark:bg-white/5 p-8 rounded-[2.5rem] border border-slate-200 dark:border-white/10 shadow-sm dark:shadow-none transition-all hover:shadow-2xl hover:shadow-purple-500/10 hover:-translate-y-2 transition-all duration-500">
          <div class="w-14 h-14 rounded-2xl bg-purple-50 text-purple-600 flex items-center justify-center mb-6 group-hover:scale-110 transition-transform">
            <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="2" y="2" width="20" height="8" rx="2" ry="2"/><rect x="2" y="14" width="20" height="8" rx="2" ry="2"/><path d="M6 6h.01M6 18h.01"/></svg>    
          </div>
          <h3 class="text-xl font-bold text-slate-900 dark:text-white mb-4 font-heading">Backend</h3>
          <div class="flex flex-wrap gap-2">
            @foreach(['Node.js', 'Express.js', 'Python', 'PHP', 'REST APIs', 'GraphQL'] as $skill)
              <span class="inline-flex items-center gap-2 px-4 py-1.5 rounded-xl bg-slate-50 dark:bg-white/5 text-xs font-bold text-slate-600 dark:text-slate-400 ring-1 ring-slate-100 dark:ring-white/10">
                @svgl($skill, 'w-4 h-4')
                <span>{{ $skill }}</span>
              </span>
            @endforeach
          </div>
        </div>
      </div>

      <!-- Data -->
      <div class="card-stagger">
        <div class="group h-full bg-white dark:bg-white/5 p-8 rounded-[2.5rem] border border-slate-200 dark:border-white/10 shadow-sm dark:shadow-none transition-all hover:shadow-2xl hover:shadow-cyan-500/10 hover:-translate-y-2 transition-all duration-500">
          <div class="w-14 h-14 rounded-2xl bg-cyan-50 text-cyan-600 flex items-center justify-center mb-6 group-hover:scale-110 transition-transform">
            <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><ellipse cx="12" cy="5" rx="9" ry="3"/><path d="M21 12c0 1.66-4 3-9 3s-9-1.34-9-3"/><path d="M3 5v14c0 1.66 4 3 9 3s9-1.34 9-3V5"/></svg>
          </div>
          <h3 class="text-xl font-bold text-slate-900 dark:text-white mb-4 font-heading">Base de Datos</h3>
          <div class="flex flex-wrap gap-2">
            @foreach(['PostgreSQL', 'SQL Server', 'Prisma ORM', 'Firebase', 'MongoDB'] as $skill)
              <span class="inline-flex items-center gap-2 px-4 py-1.5 rounded-xl bg-slate-50 dark:bg-white/5 text-xs font-bold text-slate-600 dark:text-slate-400 ring-1 ring-slate-100 dark:ring-white/10">
                @svgl($skill, 'w-4 h-4')
                <span>{{ $skill }}</span>
              </span>
            @endforeach
          </div>
        </div>
      </div>

      <!-- Cloud -->
      <div class="card-stagger">
        <div class="group h-full bg-white dark:bg-white/5 p-8 rounded-[2.5rem] border border-slate-200 dark:border-white/10 shadow-sm dark:shadow-none transition-all hover:shadow-2xl hover:shadow-blue-500/10 hover:-translate-y-2 transition-all duration-500">
          <div class="w-14 h-14 rounded-2xl bg-blue-50 text-blue-700 flex items-center justify-center mb-6 group-hover:scale-110 transition-transform">
            <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M18 10h-1.26A8 8 0 1 0 9 20h9a5 5 0 0 0 0-10z"/></svg>
          </div>
          <h3 class="text-xl font-bold text-slate-900 dark:text-white mb-4 font-heading">Cloud & DevOps</h3>
          <div class="flex flex-wrap gap-2">
            @foreach(['Docker', 'Vercel', 'Railway', 'AWS', 'Git', 'CI/CD'] as $skill)
              <span class="inline-flex items-center gap-2 px-4 py-1.5 rounded-xl bg-slate-50 dark:bg-white/5 text-xs font-bold text-slate-600 dark:text-slate-400 ring-1 ring-slate-100 dark:ring-white/10">
                @svgl($skill, 'w-4 h-4')
                <span>{{ $skill }}</span>
              </span>
            @endforeach
          </div>
        </div>
      </div>

    </div>
  </div>
</section>
