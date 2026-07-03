<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title', 'NovaStackHub — NextGen Software Innovators')</title>
    @yield('meta')
    <link rel="icon" href="{{ asset('img/logo.png') }}" type="image/png">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap-icons.min.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tabler-icons/3.2.0/tabler-icons.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets/css/aos.css') }}">
    @stack('styles')
</head>

<body>
@yield('content')

<script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('assets/js/aos.js') }}"></script>
<script>if (window.AOS) { AOS.init({ once: true, duration: 700, easing: 'ease-out-cubic' }); }</script>
@stack('scripts')


<script>
document.addEventListener('DOMContentLoaded', function () {
  document.querySelectorAll('img:not([loading])').forEach(function (im) {
    im.loading = 'lazy';
    im.decoding = 'async';
  });
});
</script>

<!-- ═══════════ MOBILE DRAWER v4 — body-level (paste before </body>) ═══════════ -->
<style>
@media (max-width: 991.98px){
  /* original collapse menu ko mobile pe chhupa do — hum apna drawer use karenge */
  #navMenu{ display:none !important; }
}
@media (min-width: 992px){
  .xdrawer, .xdrawer-backdrop{ display:none !important; }
}

.xdrawer{
  position:fixed; top:0; left:0; bottom:0;
  width:320px; max-width:86vw; height:100vh;
  background:#ffffff; z-index:100000;
  display:flex; flex-direction:column; overflow-y:auto; overflow-x:hidden;
  transform:translateX(-100%); transition:transform .34s cubic-bezier(.4,0,.2,1);
  box-shadow:0 0 60px rgba(15,23,42,.30);
}
.xdrawer.open{ transform:translateX(0); }

.xdrawer-backdrop{
  position:fixed; inset:0; background:rgba(15,23,42,.5); z-index:99999;
  opacity:0; visibility:hidden; transition:opacity .3s ease, visibility .3s ease;
}
.xdrawer-backdrop.show{ opacity:1; visibility:visible; }

.xdrawer-head{ display:flex; align-items:center; justify-content:space-between; padding:16px 18px; border-bottom:1px solid #eef1f6; }
.xdrawer-close{ background:none; border:none; cursor:pointer; color:#16263a; width:40px; height:40px; display:flex; align-items:center; justify-content:center; border-radius:9px; }
.xdrawer-close:hover{ background:#f4f7fb; color:#2563eb; }

.xdrawer-nav{ list-style:none; margin:0; padding:6px 16px; }
.xdrawer-nav .nav-item{ border-bottom:1px solid #f0f3f8; list-style:none; }
.xdrawer-nav .nav-link{ color:#16263a; padding:15px 4px; font-size:15px; font-weight:600; display:flex; align-items:center; justify-content:space-between; text-decoration:none; }
.xdrawer-nav .nav-link.active{ color:#2563eb; }
.xdrawer-nav .dropdown-toggle::after{ transition:transform .25s ease; }
.xdrawer-nav .dropdown-menu{ display:none; list-style:none; padding:0 0 8px 8px; margin:0; }
.xdrawer-nav .dropdown-menu.xopen{ display:block; }
.xdrawer-nav .mega-cols, .xdrawer-nav .ind-grid{ display:block !important; }
.xdrawer-nav .mega-col{ border:none !important; }
.xdrawer-nav .dropdown-header{ color:#2563eb; font-size:11px; font-weight:700; text-transform:uppercase; padding:10px 6px 2px; }
.xdrawer-nav .dropdown-item{ color:#3a4a5c; padding:9px 6px; display:flex; gap:8px; align-items:center; text-decoration:none; font-size:14px; }
.xdrawer-nav .dropdown-item:hover{ color:#1e3a8a; }
.xdrawer-nav .dropdown-divider{ border-top:1px solid #eef1f6; margin:6px 0; }
.xdrawer-nav .btn-quote{ display:block; text-align:center; margin:16px 0 6px; border-radius:9px; color:#fff !important; background:#2563eb !important; border:none !important; padding:13px; font-weight:700; }
/* Industries + Pricing drawer mein bhi hide */
.xdrawer-nav .nav-item:has(.industries-mega),
.xdrawer-nav .nav-item:has(a[href$="/pricing"]){ display:none; }

.xdrawer-contact{ margin-top:auto; padding:22px 22px 28px; }
.xdrawer-contact h6{ color:#0f172a; font-weight:800; margin-bottom:16px; font-size:18px; }
.xdrawer-line{ color:#5a6b7e; font-size:14px; display:flex; gap:11px; align-items:flex-start; margin-bottom:13px; text-decoration:none; }
.xdrawer-line i{ color:#2563eb; margin-top:2px; font-size:15px; }
.xdrawer-socials{ display:flex; gap:16px; margin-top:10px; }
.xdrawer-socials a{ color:#2563eb; font-size:17px; }
</style>

<script>
(function(){
  function build(){
    var srcNav  = document.querySelector('#navMenu .navbar-nav');
    var srcBtn  = document.querySelector('#navMenu .btn-quote');
    var toggler = document.querySelector('.navbar-toggler');
    if(!srcNav || !toggler || window.__xdrawerDone) return;
    window.__xdrawerDone = true;

    /* bootstrap ka handler hatao */
    var fresh = toggler.cloneNode(true);
    toggler.parentNode.replaceChild(fresh, toggler);
    toggler = fresh;

    /* drawer banao */
    var drawer = document.createElement('div');
    drawer.className = 'xdrawer';
    drawer.innerHTML =
      '<div class="xdrawer-head">'+
        '<a href="/" style="display:flex;align-items:center;gap:8px;text-decoration:none;"><img src="/img/logo.png" alt="" style="height:38px;width:auto;object-fit:contain;"><span style="font-weight:800;color:#1e3a8a;font-size:19px;">NovaStackhub</span></a>'+
        '<button type="button" class="xdrawer-close" aria-label="Close"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4" stroke-linecap="round"><line x1="18" y1="6" x2="6" y2="18"/><line x1="6" y1="6" x2="18" y2="18"/></svg></button>'+
      '</div>'+
      '<ul class="xdrawer-nav">'+ srcNav.innerHTML + (srcBtn ? srcBtn.outerHTML : '') +'</ul>'+
      '<div class="xdrawer-contact">'+
        '<h6>Contact Info</h6>'+
        '<div class="xdrawer-line"><i class="bi bi-geo-alt"></i><span>55 Main Street, Karachi, Pakistan</span></div>'+
        '<a class="xdrawer-line" href="mailto:infonovastackhub@gmail.com"><i class="bi bi-envelope"></i><span>infonovastackhub@gmail.com</span></a>'+
        '<a class="xdrawer-line" href="tel:+11234568899"><i class="bi bi-telephone"></i><span>+1 (123) 456 889</span></a>'+
        '<div class="xdrawer-socials"><a href="#"><i class="bi bi-facebook"></i></a><a href="#"><i class="bi bi-twitter-x"></i></a><a href="#"><i class="bi bi-linkedin"></i></a><a href="#"><i class="bi bi-youtube"></i></a></div>'+
      '</div>';
    document.body.appendChild(drawer);

    var bd = document.createElement('div');
    bd.className = 'xdrawer-backdrop';
    document.body.appendChild(bd);

    function open(){ drawer.classList.add('open'); bd.classList.add('show'); document.body.style.overflow='hidden'; }
    function close(){ drawer.classList.remove('open'); bd.classList.remove('show'); document.body.style.overflow=''; }

    toggler.addEventListener('click', function(e){ e.preventDefault(); e.stopPropagation(); open(); });
    bd.addEventListener('click', close);
    drawer.querySelector('.xdrawer-close').addEventListener('click', function(e){ e.preventDefault(); close(); });
    document.addEventListener('keydown', function(e){ if(e.key==='Escape') close(); });

    /* dropdown → accordion (click se khule/band) */
    drawer.querySelectorAll('.xdrawer-nav .dropdown-toggle').forEach(function(t){
      t.addEventListener('click', function(e){
        e.preventDefault();
        var m = t.parentNode.querySelector('.dropdown-menu');
        if(m) m.classList.toggle('xopen');
      });
    });
    /* normal links / items pe click → drawer band */
    drawer.querySelectorAll('a.nav-link:not(.dropdown-toggle), .xdrawer-nav .dropdown-item, .xdrawer-nav .btn-quote').forEach(function(a){
      a.addEventListener('click', function(){ setTimeout(close, 60); });
    });
  }
  if(document.readyState==='loading') document.addEventListener('DOMContentLoaded', build);
  else build();
})();
</script>

<!-- ═══ drawer nav links alignment fix (v4 block ke BAAD paste) ═══ -->
<style>
@media (max-width: 991.98px){
  /* links left-align, icon hide, underline hatao, caret right */
  .xdrawer-nav .nav-link{
    justify-content:flex-start !important;
    text-align:left !important;
    gap:8px;
  }
  .xdrawer-nav .nav-link > i{ display:none !important; }
  .xdrawer-nav .nav-link.active::after,
  .xdrawer-nav .nav-item:not(.dropdown) .nav-link::after,
  .xdrawer-nav .nav-link::after{ background:transparent !important; }
  .xdrawer-nav .nav-link.dropdown-toggle::after{
    margin-left:auto !important;
    border-top:5px solid currentColor !important;
    border-right:5px solid transparent !important;
    border-left:5px solid transparent !important;
    border-bottom:0 !important;
    background:none !important;
    width:0 !important; height:0 !important;
    opacity:.55;
  }
}
</style>
<!-- ═══════════ SIDE ICONS + TOGGLE — HAR PAGE (paste before </body>) ═══════════ -->
<div class="side-icons side-collapsed">
  <a href="/about" class="side-icon-btn" data-label="About">
    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M4 19.5A2.5 2.5 0 0 1 6.5 17H20"/><path d="M6.5 2H20v20H6.5A2.5 2.5 0 0 1 4 19.5v-15A2.5 2.5 0 0 1 6.5 2z"/></svg>
  </a>
  <a href="/#services" class="side-icon-btn" data-label="Services">
    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="3" width="7" height="7" rx="1"/><rect x="14" y="3" width="7" height="7" rx="1"/><rect x="14" y="14" width="7" height="7" rx="1"/><rect x="3" y="14" width="7" height="7" rx="1"/></svg>
  </a>
  <a href="/#team" class="side-icon-btn" data-label="Team">
    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 0 0-3-3.87"/><path d="M16 3.13a4 4 0 0 1 0 7.75"/></svg>
  </a>
  <a href="/#contact" class="side-icon-btn" data-label="Contact">
    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"/></svg>
  </a>
  <a href="/#blog" class="side-icon-btn" data-label="Blog">
    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 20h9"/><path d="M16.5 3.5a2.121 2.121 0 0 1 3 3L7 19l-4 1 1-4L16.5 3.5z"/></svg>
  </a>
</div>

<style>
  .side-toggle{
    position:fixed; left:20px; top:50%; transform:translateY(-50%); z-index:999;
    width:44px; height:44px; border-radius:12px; border:1px solid #dbe4f3;
    background:#2563eb; color:#fff; display:flex; align-items:center; justify-content:center;
    cursor:pointer; box-shadow:0 6px 18px rgba(37,99,235,.35);
    transition: top .35s cubic-bezier(.34,1.56,.64,1), bottom .35s, background .2s;
  }
  .side-toggle:hover{ background:#1e3a8a; }
  .side-toggle svg{ transition: transform .35s ease; }
  .side-toggle.is-open{ top: calc(50% - 195px); transform: translateY(0); }
  .side-toggle.is-open svg{ transform: rotate(180deg); }

  /* desktop: centered, collapsed pe fade */
  @media (min-width:769px){
    .side-icons{ transform: translateY(-50%) !important; transition: opacity .3s ease, visibility .3s ease !important; }
    .side-icons.side-collapsed{ opacity:0 !important; visibility:hidden !important; pointer-events:none !important; }
  }
  /* mobile: bottom-left */
  @media (max-width:768px){
    .side-icons{ display:flex !important; flex-direction:column; gap:10px;
      top:auto !important; bottom:80px; left:16px; transform:none !important;
      transition: opacity .3s ease, visibility .3s ease !important; }
    .side-icons.side-collapsed{ opacity:0 !important; visibility:hidden !important; pointer-events:none !important; }
    .side-icon-btn{ width:46px !important; height:46px !important; }
    .side-toggle{ top:auto !important; bottom:22px; left:16px; transform:none !important; }
    .side-toggle.is-open{ top:auto !important; bottom:22px; transform:none !important; }
    .side-toggle.is-open svg{ transform: rotate(90deg); }
  }
</style>

<script>
(function(){
  function init(){
    /* duplicate side-icons hatao (agar home.blade mein bhi ho) */
    var all = document.querySelectorAll('.side-icons');
    for(var i=1;i<all.length;i++){ all[i].remove(); }
    var icons = document.querySelector('.side-icons');
    if(!icons) return;
    document.querySelectorAll('.side-toggle').forEach(function(b){ b.remove(); });
    icons.classList.add('side-collapsed');

    var btn = document.createElement('button');
    btn.type='button'; btn.className='side-toggle'; btn.setAttribute('aria-label','Toggle quick menu');
    btn.innerHTML='<svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.6" stroke-linecap="round" stroke-linejoin="round"><polyline points="9 18 15 12 9 6"></polyline></svg>';
    document.body.appendChild(btn);

    btn.addEventListener('click', function(){
      var collapsed = icons.classList.toggle('side-collapsed');
      btn.classList.toggle('is-open', !collapsed);
    });
  }
  if(document.readyState==='loading') document.addEventListener('DOMContentLoaded', init);
  else init();
})();
</script>
</body>

</html>
