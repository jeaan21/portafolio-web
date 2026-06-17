
<div id="chatbot-container">
  <!-- Draggable toggle -->
  <button type="button" id="chatbot-toggle" class="fixed bottom-8 right-8 z-50 w-16 h-16 rounded-[2rem] bg-slate-900 text-white shadow-2xl shadow-slate-900/40 hover:scale-105 active:scale-95 transition-all flex items-center justify-center group" aria-label="Abrir chat">
    <div class="absolute inset-0 rounded-[2rem] bg-gradient-to-r from-blue-600 to-purple-600 opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
    <svg id="chatbot-open-icon" class="relative z-10" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"/></svg>
    <svg id="chatbot-close-icon" class="relative z-10 hidden" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><line x1="18" y1="6" x2="6" y2="18"/><line x1="6" y1="6" x2="18" y2="18"/></svg>
  </button>

  <!-- Chat Window -->
  <div id="chatbot-window" class="fixed bottom-28 right-8 z-50 w-[400px] max-w-[calc(100vw-4rem)] h-[600px] max-h-[calc(100vh-10rem)] rounded-[2.5rem] bg-white dark:bg-[#0B0E14] shadow-2xl border border-slate-100 dark:border-white/10 flex flex-col overflow-hidden hidden transition-all duration-500 origin-bottom-right" style="opacity: 0; transform: scale(0.95) translateY(10px);">
    
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
      <button type="button" id="chatbot-minimize" class="w-8 h-8 rounded-xl hover:bg-white/10 transition-colors flex items-center justify-center">
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

<script>
// Chatbot UI
(function() {
  const toggle = document.getElementById('chatbot-toggle');
  const windowEl = document.getElementById('chatbot-window');
  const messagesEl = document.getElementById('chatbot-messages');
  const form = document.getElementById('chatbot-form');
  const input = document.getElementById('chatbot-input');
  const submitBtn = document.getElementById('chatbot-submit');
  const quickReplyBtns = document.querySelectorAll('#chatbot-quick-replies button');
  const minimizeBtn = document.getElementById('chatbot-minimize');
  const openIcon = document.getElementById('chatbot-open-icon');
  const closeIcon = document.getElementById('chatbot-close-icon');
  const quickRepliesEl = document.getElementById('chatbot-quick-replies');

  let isOpen = false;
  let isBotTyping = false;
  let msgCount = 0;

  const greetingMessage = "¡Hola! Soy el asistente virtual de Jean Arias. Puedo responderte preguntas sobre su experiencia, proyectos, tecnologías y más. ¿En qué puedo ayudarte?";

  function addMessage(text, sender) {
    const div = document.createElement('div');
    div.className = 'flex gap-3 ' + (sender === 'user' ? 'flex-row-reverse animate-slide-left' : 'animate-slide-right');
    
    const avatar = sender === 'user' 
      ? '<div class="w-8 h-8 rounded-xl bg-blue-600 text-white flex items-center justify-center flex-shrink-0 shadow-sm"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"/><circle cx="12" cy="7" r="4"/></svg></div>'
      : '<div class="w-8 h-8 rounded-xl bg-slate-900 text-white flex items-center justify-center flex-shrink-0 shadow-sm"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><rect x="3" y="11" width="18" height="11" rx="2" ry="2"/><path d="M7 11V7a5 5 0 0 1 10 0v4"/></svg></div>';

    div.innerHTML = `
      ${avatar}
      <div class="max-w-[80%] rounded-2xl px-5 py-3 text-sm leading-relaxed shadow-sm ${
        sender === 'user' 
          ? 'bg-blue-600 text-white rounded-tr-none' 
          : 'bg-white text-slate-700 border border-slate-100 rounded-tl-none'
      }">${text}</div>
    `;
    
    messagesEl.appendChild(div);
    messagesEl.scrollTop = messagesEl.scrollHeight;
    msgCount++;
  }

  function showTyping() {
    const div = document.createElement('div');
    div.id = 'chatbot-typing';
    div.className = 'flex gap-3 animate-slide-right';
    div.innerHTML = `
      <div class="w-8 h-8 rounded-xl bg-slate-900 text-white flex items-center justify-center flex-shrink-0 shadow-sm"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><rect x="3" y="11" width="18" height="11" rx="2" ry="2"/><path d="M7 11V7a5 5 0 0 1 10 0v4"/></svg></div>
      <div class="bg-white border border-slate-100 rounded-2xl rounded-tl-none px-5 py-4 shadow-sm">
        <div class="flex gap-1.5">
          <span class="w-1.5 h-1.5 rounded-full bg-slate-300 animate-bounce" style="animation-delay: 0ms"></span>
          <span class="w-1.5 h-1.5 rounded-full bg-slate-300 animate-bounce" style="animation-delay: 150ms"></span>
          <span class="w-1.5 h-1.5 rounded-full bg-slate-300 animate-bounce" style="animation-delay: 300ms"></span>
        </div>
      </div>
    `;
    messagesEl.appendChild(div);
    messagesEl.scrollTop = messagesEl.scrollHeight;
  }

  function hideTyping() {
    const t = document.getElementById('chatbot-typing');
    if (t) t.remove();
  }

  async function handleSend(text) {
    const trimmed = text.trim();
    if (!trimmed || isBotTyping) return;
    if (input) input.value = '';
    if (submitBtn) submitBtn.disabled = true;
    addMessage(trimmed, 'user');

    isBotTyping = true;
    if (input) input.disabled = true;
    showTyping();

    const baseUrl = document.querySelector('meta[name="base-url"]')?.getAttribute('content') || '';
    const csrfToken = document.querySelector('meta[name="csrf-token"]')?.getAttribute('content') || '';

    try {
      const response = await fetch(baseUrl + '/api/v1/chatbot.php', {
        method: 'POST',
        headers: { 
          'Content-Type': 'application/json',
          'X-CSRF-Token': csrfToken
        },
        body: JSON.stringify({ message: trimmed })
      });
      const result = await response.json();
      hideTyping();
      if (result.success) {
        addMessage(result.data.response, 'bot');
      } else {
        addMessage(result.message || "Error al procesar el mensaje", 'bot');
      }
    } catch (error) {
      hideTyping();
      addMessage("Error de conexión con el servidor", 'bot');
    } finally {
      isBotTyping = false;
      if (submitBtn) submitBtn.disabled = false;
      if (input) { 
        input.disabled = false; 
        input.focus(); 
      }
    }
  }

  if (toggle) {
    toggle.addEventListener('click', function(e) {
      e.preventDefault();
      isOpen = !isOpen;
      if (isOpen) {
        windowEl.classList.remove('hidden');
        requestAnimationFrame(() => {
           windowEl.style.opacity = '1';
           windowEl.style.transform = 'scale(1) translateY(0)';
        });
      } else {
        windowEl.style.opacity = '0';
        windowEl.style.transform = 'scale(0.95) translateY(10px)';
        setTimeout(() => windowEl.classList.add('hidden'), 500);
      }
      openIcon.classList.toggle('hidden', isOpen);
      closeIcon.classList.toggle('hidden', !isOpen);
      if (isOpen && msgCount === 0) {
        setTimeout(() => addMessage(greetingMessage, 'bot'), 400);
      }
    });
  }

  if (minimizeBtn) {
    minimizeBtn.addEventListener('click', function(e) {
      e.preventDefault();
      isOpen = false;
      windowEl.style.opacity = '0';
      windowEl.style.transform = 'scale(0.95) translateY(10px)';
      setTimeout(() => windowEl.classList.add('hidden'), 500);
      openIcon.classList.remove('hidden');
      closeIcon.classList.add('hidden');
    });
  }

  if (form) {
    form.addEventListener('submit', function(e) {
      e.preventDefault();
      handleSend(input ? input.value : '');
    });
  }

  if (input) {
    input.addEventListener('input', function() {
      if (submitBtn) submitBtn.disabled = !this.value.trim() || isBotTyping;
    });
  }

  quickReplyBtns.forEach(function(btn) {
    btn.addEventListener('click', function() {
      if (isBotTyping) return;
      handleSend(this.getAttribute('data-question'));
      if (quickRepliesEl) {
        quickRepliesEl.style.opacity = '0';
        setTimeout(() => quickRepliesEl.style.display = 'none', 300);
      }
    });
  });
})();
</script>

