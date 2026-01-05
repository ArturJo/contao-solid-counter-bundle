(() => {
  const SELECTOR = '[data-solid-counter]';

  const animate = (el) => {
    const value = parseInt(el.dataset.value ?? '0', 10);
    const duration = parseInt(el.dataset.duration ?? '3000', 10) || 3000;

    const numberEl = el.querySelector('.solid-counter__number');
    if (!numberEl) return;

    numberEl.textContent = '0';

    let start = null;
    const step = (ts) => {
      if (start === null) start = ts;
      const progress = Math.min((ts - start) / duration, 1);
      numberEl.textContent = String(Math.floor(progress * value));
      if (progress < 1) requestAnimationFrame(step);
      else el.dataset.solidDone = '1';
    };

    requestAnimationFrame(step);
  };

  const setup = () => {
    const elements = document.querySelectorAll(SELECTOR);
    if (!elements.length) return;

    const observer = new IntersectionObserver((entries) => {
      for (const entry of entries) {
        if (!entry.isIntersecting) continue;

        const el = entry.target;
        const repeat = el.dataset.repeat === '1';
        const done = el.dataset.solidDone === '1';

        if (!done || repeat) {
          if (repeat) el.dataset.solidDone = '0';
          animate(el);
        }
      }
    }, { threshold: 0.4 });

    elements.forEach((el) => observer.observe(el));
  };

  if (document.readyState === 'loading') document.addEventListener('DOMContentLoaded', setup);
  else setup();
})();
