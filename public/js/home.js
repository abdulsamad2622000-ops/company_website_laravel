/* COUNT-UP on stat numbers */
document.addEventListener('DOMContentLoaded', () => {
  const nums = document.querySelectorAll('.stat-number[data-target]');
  const observer = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
      if (!entry.isIntersecting) return;
      const el     = entry.target;
      const target = +el.dataset.target;
      const suffix = el.dataset.suffix || '';
      const dur    = 1600;
      const step   = 16;
      const steps  = dur / step;
      let cur = 0;
      const timer = setInterval(() => {
        cur += target / steps;
        if (cur >= target) { cur = target; clearInterval(timer); }
        el.textContent = Math.floor(cur) + suffix;
      }, step);
      observer.unobserve(el);
    });
  }, { threshold: 0.5 });
  nums.forEach(n => observer.observe(n));
});

const pgRing  = document.getElementById('pgRing');
const pgPctEl = document.getElementById('pgPct');
const pgBtn   = document.getElementById('scrollProgressBtn');
const CIRC    = 188.5;   /* 2 * π * 30 */
let   pgPct   = 0;

window.addEventListener('scroll', () => {
  const scrollTop  = window.scrollY;
  const maxScroll  = document.body.scrollHeight - window.innerHeight;
  pgPct = maxScroll > 0 ? Math.round((scrollTop / maxScroll) * 100) : 0;

  pgBtn.style.display = scrollTop > 120 ? 'block' : 'none';
  pgRing.style.strokeDashoffset = CIRC - (pgPct / 100) * CIRC;
  if (pgPctEl) pgPctEl.textContent = pgPct + '%';
});

function handleScrollBtn() {
  window.scrollTo({ top: 0, behavior: 'smooth' });
}

window.addEventListener('load', () => {
  setTimeout(() => {
    document.getElementById('loader').classList.add('hidden');
    animateCounters();
  }, 300);
});

const obs = new IntersectionObserver((entries) => {
  entries.forEach(e => { if (e.isIntersecting) { e.target.classList.add('visible'); obs.unobserve(e.target); } });
}, { threshold: 0.12 });
document.querySelectorAll('.fade-up').forEach(el => obs.observe(el));

function animateCounters() {
[{el:'cnt1',end:70},{el:'cnt2',end:60},{el:'cnt3',end:12}].forEach(({el,end}) => {    let v = 0; const step = Math.ceil(end/50);
    const t = setInterval(() => {
      v = Math.min(v+step, end);
      document.getElementById(el).textContent = v+'+';
      if(v>=end) clearInterval(t);
    }, 28);
  });
}

const secs = document.querySelectorAll('section[id]');
window.addEventListener('scroll', () => {
  let cur='';
  secs.forEach(s => { if(window.scrollY >= s.offsetTop-110) cur=s.id; });
  document.querySelectorAll('.nav-link:not(.dropdown-toggle)').forEach(l => {
    l.classList.toggle('active', l.getAttribute('href')==='#'+cur);
  });
});

/* SCROLL ANIMATION - Sections slide in alternately from right to left and left to right */
const scrollAnimateObserver = new IntersectionObserver((entries) => {
  entries.forEach((entry, index) => {
    if (entry.isIntersecting) {
      const element = entry.target;
      const sectionIndex = Array.from(document.querySelectorAll('section')).indexOf(element);

      // Alternate animation: even sections from right, odd sections from left
      if (sectionIndex % 2 === 0) {
        element.classList.add('animate-right');
      } else {
        element.classList.add('animate-left');
      }

      scrollAnimateObserver.unobserve(element);
    }
  });
}, { threshold: 0.1 });

// Apply scroll animation to all sections
document.querySelectorAll('section').forEach(section => {
  section.classList.add('scroll-animate');
  scrollAnimateObserver.observe(section);
});



(function(){
  var wrap = document.getElementById('heroAnimWrap');
  var glow = document.getElementById('heroGlow');
  var btn = document.getElementById('magBtn');

  if (wrap && glow) {
    wrap.addEventListener('mousemove', function(e){
      var rect = wrap.getBoundingClientRect();
      glow.style.opacity = '1';
      glow.style.left = (e.clientX - rect.left) + 'px';
      glow.style.top = (e.clientY - rect.top) + 'px';
    });
    wrap.addEventListener('mouseleave', function(){
      glow.style.opacity = '0';
    });
  }

  if (btn) {
    btn.addEventListener('mousemove', function(e){
      var rect = btn.getBoundingClientRect();
      var x = e.clientX - rect.left - rect.width/2;
      var y = e.clientY - rect.top - rect.height/2;
      btn.style.transform = 'translate(' + (x*0.3) + 'px,' + (y*0.3) + 'px)';
    });
    btn.addEventListener('mouseleave', function(){
      btn.style.transform = 'translate(0,0)';
    });
  }

  var lines = document.querySelectorAll('#heroAnimWrap .reveal-line span');
  lines.forEach(function(span, i){
    span.style.transform = 'translateY(100%)';
    span.style.opacity = '0';
    span.style.transition = 'transform 0.7s cubic-bezier(0.19,1,0.22,1), opacity 0.7s ease';
    setTimeout(function(){
      span.style.transform = 'translateY(0)';
      span.style.opacity = '1';
    }, i*150 + 200);
  });
})();