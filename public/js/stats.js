(function() {
  var card = document.getElementById('github-card');
  if (!card) return;
  fetch('https://api.github.com/users/jemy-22')
    .then(function(r) { return r.json(); })
    .then(function(data) {
      if (!data || data.message) return;
      card.innerHTML = '<div class="bg-white/80 backdrop-blur-xl border border-slate-200/60 shadow-lg shadow-slate-200/50 rounded-xl p-6"><div class="flex items-center gap-4 mb-4"><div class="p-3 rounded-xl bg-gradient-to-br from-blue-500 to-purple-600 text-white shadow-lg"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M15 22v-4a4.8 4.8 0 0 0-1-3.5c3 0 6-2 6-5.5.08-1.25-.27-2.48-1-3.5.28-1.15.28-2.35 0-3.5 0 0-1 0-3 1.5-2.64-.5-5.36-.5-8 0C6 2 5 2 5 2c-.3 1.15-.3 2.35 0 3.5A5.403 5.403 0 0 0 4 9c0 3.5 3 5.5 6 5.5-.39.49-.68 1.05-.85 1.65-.17.6-.22 1.23-.15 1.85v4"/><path d="M9 18c-4.51 2-5-2-7-2"/></svg></div><div><h3 class="font-semibold text-slate-900">GitHub Activity</h3><p class="text-sm text-slate-500">@' + data.login + '</p></div><div class="ml-auto flex gap-4 text-sm text-slate-500"><span>Repos: ' + data.public_repos + '</span><span>Followers: ' + data.followers + '</span></div></div><p class="text-sm text-slate-600">' + (data.bio || '') + '</p></div>';
    })
    .catch(function() {});
})();
