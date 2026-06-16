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
    toggle.addEventListener('click', function() {
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
    minimizeBtn.addEventListener('click', function() {
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
