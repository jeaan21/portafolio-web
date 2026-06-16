
<section id="database" class="relative py-24 sm:py-32 overflow-hidden bg-[#F8FAFC] dark:bg-[#0B0E14] transition-colors duration-500">
  <div class="max-w-7xl mx-auto px-6 sm:px-8 lg:px-12 relative z-10">
    <div class="text-center mb-20 animate-on-scroll">
      <h2 class="text-4xl sm:text-6xl font-bold text-slate-900 dark:text-white mb-6 font-heading tracking-tight">Base de <span class="text-gradient">Datos</span></h2>
      <p class="text-slate-500 dark:text-slate-400 max-w-2xl mx-auto text-lg sm:text-xl leading-relaxed">Arquitectura MySQL con PHP PDO - Relaciones, índices y optimización de consultas.</p>
    </div>

    <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 mb-16">
      <!-- Schema View -->
      <div class="bg-white dark:bg-white/5 backdrop-blur-xl border border-slate-200 dark:border-white/10 shadow-xl dark:shadow-none rounded-[2.5rem] overflow-hidden">
        <div class="px-8 py-6 border-b border-slate-100 dark:border-white/5">
          <h3 class="flex items-center gap-3 text-xl font-bold text-slate-900 dark:text-white font-heading">
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" class="text-blue-600 dark:text-blue-400"><ellipse cx="12" cy="5" rx="9" ry="3"/><path d="M21 12c0 1.66-4 3-9 3s-9-1.34-9-3"/><path d="M3 5v14c0 1.66 4 3 9 3s9-1.34 9-3V5"/></svg> 
            Esquema Relacional
          </h3>
        </div>
        <div class="p-8 space-y-6">
          <?php 
          $tables = [
            ['name' => 'usuarios', 'fields' => 'id, nombre, email, password, rol, created_at', 'icon' => 'M7 11V7a5 5 0 0 1 10 0v4'],
            ['name' => 'proyectos', 'fields' => 'id, titulo, slug, descripcion, tecnologias (JSON), categoria, urls, destacado', 'icon' => 'M6 6h.01M6 18h.01'],
            ['name' => 'mensajes', 'fields' => 'id, nombre, email, tipo_servicio, presupuesto, plazo, proyecto_url, mensaje', 'icon' => 'M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z'],
            ['name' => 'visitantes', 'fields' => 'id, ip, user_agent, path, referrer, created_at', 'icon' => 'M21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16z']
          ];
          foreach($tables as $t): ?>
            <div class="card-stagger bg-slate-50 dark:bg-white/5 border border-slate-100 dark:border-white/5 rounded-3xl p-5 hover:bg-white dark:hover:bg-white/10 transition-all">
              <div class="flex items-center gap-4 mb-3">
                <div class="w-10 h-10 rounded-2xl bg-gradient-to-br from-blue-500 to-purple-600 text-white flex items-center justify-center shadow-lg">
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="<?= $t['icon'] ?>"/></svg>
                </div>
                <span class="font-mono font-bold text-slate-900 dark:text-white"><?= $t['name'] ?></span>
              </div>
              <p class="text-xs font-mono text-slate-500 dark:text-slate-400 leading-relaxed"><?= $t['fields'] ?></p>
            </div>
          <?php endforeach; ?>
        </div>
      </div>

      <!-- Logic View -->
      <div class="space-y-8">
        <div class="bg-white dark:bg-white/5 backdrop-blur-xl border border-slate-200 dark:border-white/10 shadow-xl dark:shadow-none rounded-[2.5rem] p-8 sm:p-10">
          <h3 class="flex items-center gap-3 text-xl font-bold text-slate-900 dark:text-white font-heading mb-8">
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" class="text-purple-600 dark:text-purple-400"><rect x="3" y="11" width="18" height="11" rx="2" ry="2"/><path d="M7 11V7a5 5 0 0 1 10 0v4"/></svg> 
            Integridad Referencial
          </h3>
          <div class="space-y-4">
             <div class="flex items-center gap-4 p-4 rounded-2xl bg-slate-50 dark:bg-white/5 border border-slate-100 dark:border-white/5">
                <span class="px-3 py-1 rounded-lg bg-slate-900 dark:bg-white dark:text-slate-900 text-white text-[10px] font-black uppercase">visitante</span>
                <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" class="text-slate-300"><path d="M5 12h14"/><path d="m12 5 7 7-7 7"/></svg>
                <span class="px-3 py-1 rounded-lg bg-blue-50 dark:bg-blue-500/10 text-blue-600 dark:text-blue-400 text-[10px] font-black uppercase">analytics</span>
                <span class="ml-auto text-[10px] font-bold text-slate-400 uppercase tracking-widest">1 : N</span>
             </div>
             <div class="flex items-center gap-4 p-4 rounded-2xl bg-slate-50 dark:bg-white/5 border border-slate-100 dark:border-white/5">
                <span class="px-3 py-1 rounded-lg bg-slate-900 dark:bg-white dark:text-slate-900 text-white text-[10px] font-black uppercase">usuario</span>
                <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" class="text-slate-300"><path d="M5 12h14"/><path d="m12 5 7 7-7 7"/></svg>
                <span class="px-3 py-1 rounded-lg bg-purple-50 dark:bg-purple-500/10 text-purple-600 dark:text-purple-400 text-[10px] font-black uppercase">proyecto</span>
                <span class="ml-auto text-[10px] font-bold text-slate-400 uppercase tracking-widest">1 : N</span>
             </div>
          </div>
        </div>

        <div class="bg-slate-900 rounded-[2.5rem] p-1 shadow-2xl overflow-hidden">
          <div class="bg-slate-800/40 rounded-[2.25rem] p-8 overflow-x-auto">
            <div class="flex items-center gap-2 mb-6">
              <div class="w-3 h-3 rounded-full bg-blue-500"></div>
              <span class="text-[10px] font-bold text-slate-500 uppercase tracking-widest">PDO Connection</span>
            </div>
            <pre class="text-xs font-mono text-blue-300 leading-relaxed"><code>$conn = <span class="text-purple-400">new</span> PDO(
  <span class="text-green-400">"mysql:host=$host;dbname=$db;charset=utf8mb4"</span>,
  $user, $pass,
  [PDO::<span class="text-white">ATTR_ERRMODE</span> => PDO::<span class="text-white">ERRMODE_EXCEPTION</span>]
);</code></pre>
          </div>
        </div>
      </div>
    </div>

    <!-- Quick Metrics -->
    <div class="grid grid-cols-2 sm:grid-cols-4 gap-6">
      <?php 
      $metrics = [
        ['val' => '8', 'label' => 'Tablas SQL', 'color' => 'from-blue-500 to-blue-600'],
        ['val' => '7', 'label' => 'Relaciones', 'color' => 'from-purple-500 to-purple-600'],
        ['val' => '12', 'label' => 'Índices Optim.', 'color' => 'from-cyan-500 to-cyan-600'],
        ['val' => '100%', 'label' => 'Escalable', 'color' => 'from-blue-500 to-purple-600']
      ];
      foreach($metrics as $m): ?>
        <div class="card-stagger bg-white dark:bg-white/5 border border-slate-100 dark:border-white/10 p-6 rounded-3xl text-center shadow-sm">
          <div class="text-3xl font-black bg-gradient-to-br <?= $m['color'] ?> bg-clip-text text-transparent font-heading mb-1"><?= $m['val'] ?></div>
          <div class="text-[10px] font-bold text-slate-400 dark:text-slate-500 uppercase tracking-widest"><?= $m['label'] ?></div>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>
