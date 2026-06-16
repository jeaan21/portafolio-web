
<div id="chatbot-container">
  <!-- Draggable toggle -->
  <button id="chatbot-toggle" class="fixed bottom-8 right-8 z-50 w-16 h-16 rounded-[2rem] bg-slate-900 text-white shadow-2xl shadow-slate-900/40 hover:scale-105 active:scale-95 transition-all flex items-center justify-center group" aria-label="Abrir chat">
    <div class="absolute inset-0 rounded-[2rem] bg-gradient-to-r from-blue-600 to-purple-600 opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
    <svg id="chatbot-open-icon" class="relative z-10" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"/></svg>
    <svg id="chatbot-close-icon" class="relative z-10 hidden" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><line x1="18" y1="6" x2="6" y2="18"/><line x1="6" y1="6" x2="18" y2="18"/></svg>
  </button>

  <!-- Chat Window -->
  <div id="chatbot-window" class="fixed bottom-28 right-8 z-50 w-[400px] max-w-[calc(100vw-4rem)] h-[600px] max-h-[calc(100vh-10rem)] rounded-[2.5rem] border border-slate-100 bg-white dark:bg-[#0B0E14] shadow-2xl border border-slate-100 dark:border-white/10 flex flex-col overflow-hidden hidden transition-all duration-500 origin-bottom-right" style="opacity: 0; transform: scale(0.95) translateY(10px);">
    
    <!-- Header -->
    <div class="px-8 py-6 bg-slate-900 text-white flex-shrink-0 flex items-center justify-between">
      <div class="flex items-center gap-4">
        <div class="w-10 h-10 rounded-2xl bg-white/10 flex items-center justify-center backdrop-blur-sm">
          <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><rect x="3" y="11" width="18" height="11" rx="2" ry="2"/><path d="M7 11V7a5 5 0 0 1 10 0v4"/></svg>
        </div>
        <div>
          <h3 class="font-bold text-sm font-heading tracking-tight">Asistente Virtual</h3>
          <div class="flex items-center gap-1.5">
            <div class="w-1.5 h-1.5 rounded-full bg-green-400 animate-pulse"></div>
            <span class="text-[10px] font-bold text-slate-400 uppercase tracking-widest">En línea</span>
          </div>
        </div>
      </div>
      <button id="chatbot-minimize" class="w-8 h-8 rounded-xl hover:bg-white/10 transition-colors flex items-center justify-center">
        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="m18 15-6-6-6 6"/></svg>
      </button>
    </div>

    <!-- Messages -->
    <div id="chatbot-messages" class="flex-1 overflow-y-auto p-8 space-y-6 scroll-smooth bg-slate-50/30 dark:bg-white/5">
      <!-- Dynamic messages here -->
    </div>

    <!-- Quick Replies Container -->
    <div id="chatbot-quick-replies" class="px-6 py-4 bg-white dark:bg-[#0B0E14] border-t border-slate-50 dark:border-white/5 flex gap-2 overflow-x-auto no-scrollbar">
       <button data-question="¿Quién eres?" class="flex-shrink-0 px-4 py-2 rounded-xl border border-slate-100 bg-white text-xs font-bold text-slate-600 hover:border-blue-500 hover:text-blue-600 transition-all">¿Quién eres?</button>
       <button data-question="¿Qué tecnologías manejas?" class="flex-shrink-0 px-4 py-2 rounded-xl border border-slate-100 bg-white text-xs font-bold text-slate-600 hover:border-blue-500 hover:text-blue-600 transition-all">Tecnologías</button>
       <button data-question="¿Cómo puedo contactarte?" class="flex-shrink-0 px-4 py-2 rounded-xl border border-slate-100 bg-white text-xs font-bold text-slate-600 hover:border-blue-500 hover:text-blue-600 transition-all">Contacto</button>
    </div>

    <!-- Input -->
    <form id="chatbot-form" class="p-6 bg-white dark:bg-[#0B0E14] border-t border-slate-100 dark:border-white/10 flex-shrink-0 flex items-center gap-3">
      <input type="text" id="chatbot-input" placeholder="Escribe tu pregunta..." 
        class="flex-1 h-12 text-sm font-medium rounded-2xl border-none bg-slate-100 dark:bg-white/10 px-5 outline-none ring-1 ring-transparent focus:ring-2 focus:ring-blue-500 focus:bg-white transition-all">
      <button type="submit" id="chatbot-submit" class="w-12 h-12 rounded-2xl bg-slate-900 text-white flex items-center justify-center hover:bg-blue-600 disabled:opacity-30 disabled:hover:bg-slate-900 transition-all">
        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="m22 2-7 20-4-9-9-4Z"/><path d="M22 2 11 13"/></svg>
      </button>
    </form>

  </div>
</div>

<script src="{{ asset('js/chatbot-widget.js') }}"></script>

