// Dark mode toggle
(function() {
  let theme = localStorage.getItem('theme');
  if (!theme) {
    theme = window.matchMedia('(prefers-color-scheme: dark)').matches ? 'dark' : 'light';
  }
  if (theme === 'dark') {
    document.documentElement.classList.add('dark');
  }
  const html = document.documentElement;
  const sunIcons = document.querySelectorAll('#sun-icon, #sun-icon-mobile');
  const moonIcons = document.querySelectorAll('#moon-icon, #moon-icon-mobile');
  function updateIcons() {
    const isDark = html.classList.contains('dark');
    sunIcons.forEach(el => el.classList.toggle('hidden', !isDark));
    moonIcons.forEach(el => el.classList.toggle('hidden', isDark));
  }
  updateIcons();
  document.querySelectorAll('#theme-toggle, #theme-toggle-mobile').forEach(btn => {
    btn.addEventListener('click', function() {
      html.classList.toggle('dark');
      const isDark = html.classList.contains('dark');
      localStorage.setItem('theme', isDark ? 'dark' : 'light');
      updateIcons();
    });
  });
})();

// Mobile menu
(function() {
  const btn = document.getElementById('mobile-menu-btn');
  const menu = document.getElementById('mobile-menu');
  const menuIcon = document.getElementById('menu-icon');
  const closeIcon = document.getElementById('close-icon');
  if (!btn || !menu) return;
  btn.addEventListener('click', function(e) {
    e.preventDefault();
    const isOpen = !menu.classList.contains('hidden');
    menu.classList.toggle('hidden', isOpen);
    menuIcon.classList.toggle('hidden', !isOpen);
    closeIcon.classList.toggle('hidden', isOpen);
    document.body.style.overflow = isOpen ? '' : 'hidden';
  });
  menu.querySelectorAll('a').forEach(function(a) {
    a.addEventListener('click', function() {
      menu.classList.add('hidden');
      menuIcon.classList.remove('hidden');
      closeIcon.classList.add('hidden');
      document.body.style.overflow = '';
    });
  });
})();

// Scroll animations (IntersectionObserver)
(function() {
  const els = document.querySelectorAll('.animate-on-scroll');
  if (els.length === 0) return;
  const observer = new IntersectionObserver(function(entries) {
    entries.forEach(function(entry) {
      if (entry.isIntersecting) {
        entry.target.classList.add('is-visible');
        observer.unobserve(entry.target);
      }
    });
  }, { threshold: 0.1 });
  els.forEach(function(el) { observer.observe(el); });

  // Card stagger animations
  const staggerCards = document.querySelectorAll('.card-stagger');
  const staggerObserver = new IntersectionObserver(function(entries) {
    entries.forEach(function(entry) {
      if (entry.isIntersecting) {
        const siblings = entry.target.parentElement ? Array.from(entry.target.parentElement.querySelectorAll(':scope > .card-stagger')) : null;     
        if (siblings && siblings.length > 1) {
          siblings.forEach(function(card, index) {
            setTimeout(() => {
              card.classList.add('is-visible');
            }, index * 100);
          });
          siblings.forEach(function(c) { staggerObserver.unobserve(c); });
        } else {
          entry.target.classList.add('is-visible');
          staggerObserver.unobserve(entry.target);
        }
      }
    });
  }, { threshold: 0.1 });
  staggerCards.forEach(function(el) { staggerObserver.observe(el); });
})();

// Scroll navbar
(function() {
  const navbar = document.getElementById('navbar');
  if (!navbar) return;
  let ticking = false;
  window.addEventListener('scroll', function() {
    if (!ticking) {
      window.requestAnimationFrame(function() {
        const scrolled = window.scrollY > 50;
        navbar.classList.toggle('scrolled', scrolled);
        ticking = false;
      });
      ticking = true;
    }
  }, { passive: true });
})();

// Re-run scroll animations after Swup page transitions
(function() {
  function initAnimations() {
    // Animate on scroll
    const els = document.querySelectorAll('.animate-on-scroll:not(.is-visible)');
    if (els.length > 0) {
      const observer = new IntersectionObserver(function(entries) {
        entries.forEach(function(entry) {
          if (entry.isIntersecting) {
            entry.target.classList.add('is-visible');
            observer.unobserve(entry.target);
          }
        });
      }, { threshold: 0.1 });
      els.forEach(function(el) { observer.observe(el); });
    }

    // Card stagger
    const staggerCards = document.querySelectorAll('.card-stagger:not(.is-visible)');
    if (staggerCards.length > 0) {
      const staggerObserver = new IntersectionObserver(function(entries) {
        entries.forEach(function(entry) {
          if (entry.isIntersecting) {
            const siblings = entry.target.parentElement ? Array.from(entry.target.parentElement.querySelectorAll(':scope > .card-stagger:not(.is-visible)')) : null;
            if (siblings && siblings.length > 1) {
              siblings.forEach(function(card, index) {
                setTimeout(function() { card.classList.add('is-visible'); }, index * 100);
              });
              siblings.forEach(function(c) { staggerObserver.unobserve(c); });
            } else {
              entry.target.classList.add('is-visible');
              staggerObserver.unobserve(entry.target);
            }
          }
        });
      }, { threshold: 0.1 });
      staggerCards.forEach(function(el) { staggerObserver.observe(el); });
    }
  }

  document.addEventListener('swup:page:view', initAnimations);
})();
