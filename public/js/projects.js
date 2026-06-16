(function() {
  const grid = document.getElementById('projects-grid');
  const searchInput = document.getElementById('project-search');
  const filterBtns = document.querySelectorAll('#project-filters button');
  if (!grid) return;

  const cards = Array.from(grid.querySelectorAll('.project-card'));

  function filterCards(category, query) {
    cards.forEach(function(card) {
      var show = true;
      if (category !== 'todos') {
        var cat = card.getAttribute('data-category') || '';
        show = show && cat.toLowerCase() === category.toLowerCase();
      }
      if (query) {
        var title = card.getAttribute('data-title') || '';
        var desc = card.getAttribute('data-desc') || '';
        var tech = card.getAttribute('data-tech') || '';
        show = show && (title.includes(query) || desc.includes(query) || tech.includes(query));
      }
      card.style.display = show ? '' : 'none';
    });
  }

  const activeClasses = ['bg-slate-900', 'dark:bg-white', 'text-white', 'dark:text-slate-900', 'shadow-xl', 'shadow-slate-900/20'];
  const inactiveClasses = ['bg-white', 'dark:bg-slate-900', 'text-slate-500', 'dark:text-slate-400', 'hover:text-slate-900', 'dark:hover:text-white', 'ring-1', 'ring-slate-200', 'dark:ring-slate-800', 'hover:ring-slate-300', 'dark:hover:ring-slate-700', 'shadow-sm'];

  filterBtns.forEach(function(btn) {
    btn.addEventListener('click', function() {
      filterBtns.forEach(function(b) {
        activeClasses.forEach(cls => b.classList.remove(cls));
        inactiveClasses.forEach(cls => b.classList.add(cls));
      });
      inactiveClasses.forEach(cls => btn.classList.remove(cls));
      activeClasses.forEach(cls => btn.classList.add(cls));
      
      filterCards(btn.getAttribute('data-filter'), searchInput ? searchInput.value.toLowerCase() : '');
    });
  });

  if (searchInput) {
    searchInput.addEventListener('input', function() {
      var active = Array.from(filterBtns).find(btn => !btn.classList.contains('text-slate-500'));
      var cat = active ? active.getAttribute('data-filter') : 'todos';
      filterCards(cat, this.value.toLowerCase());
    });
  }
})();
