(function() {
  const texts = ["Full Stack Developer", "Systems Engineer", "Software Architect", "Tech Innovator"];
  const el = document.getElementById('typing-text');
  if (!el) return;
  let textIndex = 0, charIndex = 0, isDeleting = false;

  function type() {
    const current = texts[textIndex];
    if (!isDeleting) {
      if (charIndex < current.length) {
        el.textContent = current.substring(0, charIndex + 1);
        charIndex++;
        setTimeout(type, 80);
      } else {
        setTimeout(function() { isDeleting = true; type(); }, 2000);
      }
    } else {
      if (charIndex > 0) {
        el.textContent = current.substring(0, charIndex - 1);
        charIndex--;
        setTimeout(type, 40);
      } else {
        isDeleting = false;
        textIndex = (textIndex + 1) % texts.length;
        setTimeout(type, 200);
      }
    }
  }
  setTimeout(type, 500);
})();
