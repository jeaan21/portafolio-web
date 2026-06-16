
<section id="architecture" class="relative py-24 sm:py-32 overflow-hidden bg-transparent">
  <div class="max-w-7xl mx-auto px-6 sm:px-8 lg:px-12 relative z-10">
    <div class="text-center mb-20 animate-on-scroll">
      <h2 class="text-4xl sm:text-6xl font-bold text-slate-900 dark:text-white mb-6 font-heading tracking-tight">Arquitectura de <span class="text-gradient">Sistemas</span></h2>
      <p class="text-slate-500 dark:text-slate-400 max-w-2xl mx-auto text-lg sm:text-xl leading-relaxed">
        Diseño y construcción de infraestructuras escalables, seguras y de alto rendimiento.
      </p>
    </div>

    <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 mb-24">
      <!-- API Endpoints Explorer -->
      <div class="lg:col-span-6 space-y-8 animate-on-scroll">
        <h3 class="text-xl font-bold text-slate-900 dark:text-white flex items-center gap-3 font-heading">
          <div class="w-10 h-10 rounded-xl bg-slate-900 dark:bg-white dark:text-slate-900 text-white flex items-center justify-center">
            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="m18 16 4-4-4-4"/><path d="m6 8-4 4 4 4"/><path d="m14.5 4-5 16"/></svg>
          </div>
          API Endpoints
        </h3>
        
        <div class="space-y-4">
          <?php 
          $endpoints = [
            ['method' => 'GET', 'path' => '/api/projects', 'desc' => 'Listar proyectos', 'color' => 'text-green-600 bg-green-50 dark:bg-green-500/10'],
            ['method' => 'GET', 'path' => '/api/projects/:id', 'desc' => 'Detalle técnico', 'color' => 'text-green-600 bg-green-50 dark:bg-green-500/10'],
            ['method' => 'POST', 'path' => '/api/messages', 'desc' => 'Enviar propuesta', 'color' => 'text-blue-600 bg-blue-50 dark:bg-blue-500/10'],
            ['method' => 'GET', 'path' => '/api/analytics', 'desc' => 'Métricas en vivo', 'color' => 'text-purple-600 bg-purple-50 dark:bg-purple-500/10'],
            ['method' => 'POST', 'path' => '/api/auth/login', 'desc' => 'Gestión de sesión', 'color' => 'text-orange-600 bg-orange-50 dark:bg-orange-500/10']
          ];
          foreach($endpoints as $e): ?>
            <div class="group flex items-center gap-4 p-4 rounded-3xl bg-white dark:bg-white/5 border border-slate-200 dark:border-white/10 shadow-sm dark:shadow-none transition-all hover:bg-white dark:hover:bg-white/10 hover:border-blue-200 dark:hover:border-blue-500/30 hover:shadow-xl hover:shadow-blue-500/5 transition-all">
              <span class="px-3 py-1 rounded-xl text-[10px] font-black font-mono <?= $e['color'] ?>"><?= $e['method'] ?></span>
              <code class="text-xs font-bold font-mono text-slate-700 dark:text-slate-300 flex-1"><?= $e['path'] ?></code>
              <span class="text-xs font-bold text-slate-400 dark:text-slate-500 uppercase tracking-widest hidden sm:block"><?= $e['desc'] ?></span>
            </div>
          <?php endforeach; ?>
        </div>
      </div>

      <!-- Code Showcase -->
      <div class="lg:col-span-6 animate-on-scroll" style="transition-delay: 0.2s">
        <div class="bg-slate-900 rounded-[2.5rem] p-1 shadow-2xl overflow-hidden">
          <div class="bg-slate-800/50 rounded-[2.25rem] overflow-hidden">
            <div class="flex items-center gap-2 px-6 py-4 border-b border-slate-700/50">
              <div class="flex gap-1.5">
                <div class="w-3 h-3 rounded-full bg-red-500/50"></div>
                <div class="w-3 h-3 rounded-full bg-yellow-500/50"></div>
                <div class="w-3 h-3 rounded-full bg-green-500/50"></div>
              </div>
              <span class="text-[10px] font-bold text-slate-500 uppercase tracking-widest ml-4">request_handler.ts</span>
            </div>
            <div class="p-8 overflow-x-auto">
              <pre class="text-sm font-medium font-mono text-slate-300 leading-relaxed"><code><span class="text-purple-400">async</span> <span class="text-blue-400">function</span> <span class="text-yellow-400">handleProposal</span>(data: Proposal) {
  <span class="text-slate-500 dark:text-slate-400">// Validación de esquema rigurosa</span>
  <span class="text-purple-400">const</span> validated = <span class="text-purple-400">await</span> schema.<span class="text-yellow-400">parseAsync</span>(data);

  <span class="text-purple-400">return</span> <span class="text-purple-400">await</span> db.<span class="text-blue-400">transaction</span>(<span class="text-purple-400">async</span> (tx) => {
    <span class="text-purple-400">const</span> record = <span class="text-purple-400">await</span> tx.message.<span class="text-yellow-400">create</span>({
      data: { ...validated, status: <span class="text-green-400">'PENDING'</span> }
    });
    
    <span class="text-purple-400">return</span> { success: <span class="text-blue-400">true</span>, id: record.id };
  });
}</code></pre>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Systems Grid -->
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
      <?php 
      $systems = [
        ['title' => 'Frontend Architecture', 'stack' => 'Next.js, React, Tailwind', 'icon' => 'M18 10h-1.26A8 8 0 1 0 9 20h9a5 5 0 0 0 0-10z'],
        ['title' => 'API Design', 'stack' => 'REST, JWT, Type-Safety', 'icon' => 'M2 2h20v8H2z M2 14h20v8H2z'],
        ['title' => 'Data Integrity', 'stack' => 'PostgreSQL, Prisma, ACID', 'icon' => 'M12 21s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z']
      ];
      foreach($systems as $s): ?>
        <div class="card-stagger">
          <div class="group p-8 rounded-[2.5rem] bg-white dark:bg-white/5 border border-slate-200 dark:border-white/10 shadow-sm dark:shadow-none transition-all hover:bg-white dark:hover:bg-white/10 hover:border-blue-200 dark:hover:border-blue-500/30 hover:shadow-2xl hover:shadow-blue-500/5 transition-all">
            <div class="w-14 h-14 rounded-2xl bg-slate-50 dark:bg-white/10 shadow-sm flex items-center justify-center text-blue-600 dark:text-blue-400 mb-6 group-hover:scale-110 transition-transform">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="<?= $s['icon'] ?>"/></svg>
            </div>
            <h4 class="text-xl font-bold text-slate-900 dark:text-white mb-2 font-heading"><?= $s['title'] ?></h4>
            <p class="text-sm font-bold text-slate-400 dark:text-slate-500 uppercase tracking-widest"><?= $s['stack'] ?></p>
            <div class="mt-6 flex items-center gap-2">
              <div class="w-2 h-2 rounded-full bg-green-500 animate-pulse"></div>
              <span class="text-[10px] font-black text-slate-600 dark:text-slate-400 uppercase tracking-[0.2em]">Operational</span>
            </div>
          </div>
        </div>
      <?php endforeach; ?>
    </div>

  </div>
</section>
