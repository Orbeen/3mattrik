<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>3 Mattrik Design | Engineering, Interiors &amp; Real Estate</title>
<meta name="description" content="3 Mattrik Design — integrated engineering, real estate, interior &amp; exterior design, smart furniture and material sourcing in Chattogram, Bangladesh.">
<link rel="icon" href="{{ asset(setting('logo')) }}">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="stylesheet" href="{{ asset('css/style.css') }}">
@if(buttonCss())<style>{!! buttonCss() !!}</style>@endif
</head>
<body>
<svg width="0" height="0" style="position:absolute" aria-hidden="true"><symbol id="i-arrow" viewBox="0 0 24 24"><path d="M5 12h14M13 6l6 6-6 6"/></symbol><symbol id="i-building" viewBox="0 0 24 24"><path d="M4 21V4h10v17M14 9h6v12M8 8h2M8 12h2M8 16h2M17 13h1M17 17h1M2 21h20"/></symbol><symbol id="i-chair" viewBox="0 0 24 24"><path d="M6 11V5a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v6M5 11h14a2 2 0 0 1 2 2v4H3v-4a2 2 0 0 1 2-2ZM5 17v4M19 17v4"/></symbol><symbol id="i-check" viewBox="0 0 24 24"><path d="m5 12 4 4L19 6"/></symbol><symbol id="i-chevron" viewBox="0 0 24 24"><path d="m8 10 4 4 4-4"/></symbol><symbol id="i-close" viewBox="0 0 24 24"><path d="M6 6l12 12M18 6 6 18"/></symbol><symbol id="i-cube" viewBox="0 0 24 24"><path d="m12 3 8 4.5v9L12 21l-8-4.5v-9L12 3Z"/><path d="m4.5 7.5 7.5 4 7.5-4M12 12v9"/></symbol><symbol id="i-home" viewBox="0 0 24 24"><path d="m3 11 9-8 9 8v10h-7v-6h-4v6H3V11Z"/></symbol><symbol id="i-mail" viewBox="0 0 24 24"><rect x="3" y="5" width="18" height="14" rx="2"/><path d="m3 7 9 6 9-6"/></symbol><symbol id="i-map" viewBox="0 0 24 24"><path d="M20 10c0 5-8 11-8 11S4 15 4 10a8 8 0 1 1 16 0Z"/><circle cx="12" cy="10" r="2.5"/></symbol><symbol id="i-menu" viewBox="0 0 24 24"><path d="M4 7h16M4 12h16M4 17h16"/></symbol><symbol id="i-phone" viewBox="0 0 24 24"><path d="M22 16.9v3a2 2 0 0 1-2.2 2 19.8 19.8 0 0 1-8.6-3.1 19.5 19.5 0 0 1-6-6A19.8 19.8 0 0 1 2.1 4.2 2 2 0 0 1 4.1 2h3a2 2 0 0 1 2 1.7c.1 1 .4 2 .7 2.8a2 2 0 0 1-.5 2.1L8.1 9.8a16 16 0 0 0 6 6l1.2-1.2a2 2 0 0 1 2.1-.5c.9.3 1.8.6 2.8.7a2 2 0 0 1 1.8 2.1Z"/></symbol><symbol id="i-play" viewBox="0 0 24 24"><circle cx="12" cy="12" r="10"/><path d="m10 8 6 4-6 4V8Z"/></symbol><symbol id="i-ruler" viewBox="0 0 24 24"><path d="m16 3 5 5L8 21H3v-5L16 3Z"/><path d="m14 5 5 5M11 8l2 2M8 11l2 2M5 14l2 2"/></symbol><symbol id="i-search" viewBox="0 0 24 24"><circle cx="11" cy="11" r="7"/><path d="m20 20-4-4"/></symbol><symbol id="i-truck" viewBox="0 0 24 24"><path d="M3 6h11v11H3zM14 10h4l3 3v4h-7z"/><circle cx="7" cy="18" r="2"/><circle cx="18" cy="18" r="2"/></symbol></svg>
<main id="top">
<header class="header">
 <div class="nav-shell">
  <a class="logo official-logo" href="#top" aria-label="3MATTRIK Design home"><img src="{{ asset(setting('logo')) }}" alt="3 Mattrik Design"></a>
  <nav class="nav-links" id="navLinks" aria-label="Primary navigation"><a href="#about">About</a><a href="#services">Services</a><a href="#cost-calculator">Cost calculator</a><a href="#projects">Projects</a><a href="#gallery">Photo &amp; video</a></nav>
  <div class="nav-actions">
   <button type="button" class="icon-button" id="searchOpen" aria-label="Search"><svg class="i" width="20" height="20" aria-hidden="true"><use href="#i-search"/></svg></button>
   <a class="contact-link" href="{{ waLink() }}"><svg class="i" width="17" height="17" aria-hidden="true"><use href="#i-phone"/></svg> Contact</a>
   <button type="button" class="menu-button" id="menuBtn" aria-label="Open navigation" aria-expanded="false"><svg class="i" width="20" height="20" aria-hidden="true"><use href="#i-menu"/></svg></button>
  </div>
 </div>
</header>

<div class="search-overlay" id="searchOverlay" role="dialog" aria-modal="true" aria-label="Search services" hidden>
 <div class="search-panel">
  <div class="search-head"><span>What are you looking for?</span><button type="button" id="searchClose" aria-label="Close search"><svg class="i" width="20" height="20" aria-hidden="true"><use href="#i-close"/></svg></button></div>
  <div class="search-field"><svg class="i" width="20" height="20" aria-hidden="true"><use href="#i-search"/></svg><input id="searchInput" placeholder="Search planning, furniture, materials..."></div>
  <div class="search-results" id="searchResults">
  <button type="button" data-service="engineering" data-search="engineering solution architectural &amp; structural planning engineering consultancy construction planning project coordination professional supervision"><svg class="i" width="20" height="20" aria-hidden="true"><use href="#i-ruler"/></svg><span><b>Engineering Solution</b><small>Architectural &amp; structural planning · Engineering consultancy · Construction planning</small></span><svg class="i" width="20" height="20" aria-hidden="true"><use href="#i-arrow"/></svg></button><button type="button" data-service="interior" data-search="interior &amp; exterior concept &amp; space planning interior and exterior design 3d visualization material selection execution support"><svg class="i" width="20" height="20" aria-hidden="true"><use href="#i-home"/></svg><span><b>Interior &amp; Exterior</b><small>Concept &amp; space planning · Interior and exterior design · 3D visualization</small></span><svg class="i" width="20" height="20" aria-hidden="true"><use href="#i-arrow"/></svg></button><button type="button" data-service="furniture" data-search="smart furniture kitchen cabinets &amp; wardrobes tv cabinets, beds &amp; sofas reading tables office furniture bespoke storage systems"><svg class="i" width="20" height="20" aria-hidden="true"><use href="#i-chair"/></svg><span><b>Smart Furniture</b><small>Kitchen cabinets &amp; wardrobes · TV cabinets, beds &amp; sofas · Reading tables</small></span><svg class="i" width="20" height="20" aria-hidden="true"><use href="#i-arrow"/></svg></button><button type="button" data-service="realestate" data-search="real estate property planning development concepts space optimization project coordination residential &amp; commercial development"><svg class="i" width="20" height="20" aria-hidden="true"><use href="#i-building"/></svg><span><b>Real Estate</b><small>Property planning · Development concepts · Space optimization</small></span><svg class="i" width="20" height="20" aria-hidden="true"><use href="#i-arrow"/></svg></button><button type="button" data-service="materials" data-search="material sourcing construction materials interior &amp; finishing materials furniture materials reliable supplier selection budget-aligned sourcing"><svg class="i" width="20" height="20" aria-hidden="true"><use href="#i-truck"/></svg><span><b>Material Sourcing</b><small>Construction materials · Interior &amp; finishing materials · Furniture materials</small></span><svg class="i" width="20" height="20" aria-hidden="true"><use href="#i-arrow"/></svg></button>
  </div>
 </div>
</div>

<section class="hero">
 <img class="hero-image" src="{{ img('hero') }}" alt="{{ img_alt('hero') }}">
 <div class="hero-shade"></div>
 <div class="hero-content">
  <div class=""><span></span>{{ sec('hero','sub') }}</div>
  <h1>{!! rich(sec('hero','heading')) !!}</h1>
  {!! paras(sec('hero','para')) !!}
  <div class="hero-actions">
   <a class="primary-button" href="#services">Explore our services <svg class="i" width="20" height="20" aria-hidden="true"><use href="#i-arrow"/></svg></a>
   <a class="video-button" href="#gallery"><span><svg class="i" width="18" height="18" aria-hidden="true"><use href="#i-play"/></svg></span> See how we work</a>
  </div>
  <div class="hero-proof"><div><b>05</b><span>Core solutions</span></div><div><b>360°</b><span>Project support</span></div><div><b>CTG</b><span>Based in Chattogram</span></div></div>
 </div>
 <div class="hero-caption"><span>Featured space</span><b>Contemporary Residence</b><small>Interior &amp; furniture · 2025</small></div>
</section>

<section class="trust-strip"><span>PLANNING</span><i></i><span>CONSTRUCTION</span><i></i><span>INTERIORS</span><i></i><span>FURNITURE</span><i></i><span>SOURCING</span></section>

<section class="about section" id="about">
 <div class="about-copy">
  <div class=""><span></span>{{ sec('about','sub') }}</div>
  <p class="about-kicker">Build your Dream</p>
  <h2>{!! rich(sec('about','heading')) !!}</h2>
  {!! paras(sec('about','para')) !!}
  <blockquote>“One vision, one trusted partner, and a complete solution.”</blockquote>
  <p>Whether you are planning to build a home, develop a property, create a commercial space, renovate an existing building, furnish an interior, or source materials, our integrated approach is designed to provide greater convenience, consistency, efficiency, and value.</p>
 </div>
 <div class="brand-card"><img src="{{ asset(setting('logo')) }}" alt="Official 3 Mattrik Design gold logo" loading="lazy"><div><span>Think It.</span><span>Design It.</span><span>Build It.</span></div></div>
</section>

<section class="services section" id="services">
 <div class="section-heading"><div><div class=""><span></span>{{ sec('services','sub') }}</div><h2>{!! rich(sec('services','heading')) !!}</h2></div>{!! paras(sec('services','para')) !!}</div>
 <div class="department-gallery" aria-label="Five core departments"><button type="button" data-service="engineering" class="active"><span class="department-photo"><img src="{{ img('dept_engineering') }}" alt="{{ img_alt('dept_engineering') }} card" loading="lazy"></span><span class="department-label"><small>01</small><b>Engineering Solution</b><svg class="i" width="17" height="17" aria-hidden="true"><use href="#i-arrow"/></svg></span></button><button type="button" data-service="interior" class=""><span class="department-photo"><img src="{{ img('dept_interior') }}" alt="{{ img_alt('dept_interior') }} card" loading="lazy"></span><span class="department-label"><small>02</small><b>Interior &amp; Exterior</b><svg class="i" width="17" height="17" aria-hidden="true"><use href="#i-arrow"/></svg></span></button><button type="button" data-service="furniture" class=""><span class="department-photo"><img src="{{ img('dept_furniture') }}" alt="{{ img_alt('dept_furniture') }} card" loading="lazy"></span><span class="department-label"><small>03</small><b>Smart Furniture</b><svg class="i" width="17" height="17" aria-hidden="true"><use href="#i-arrow"/></svg></span></button><button type="button" data-service="realestate" class=""><span class="department-photo"><img src="{{ img('dept_realestate') }}" alt="{{ img_alt('dept_realestate') }} card" loading="lazy"></span><span class="department-label"><small>04</small><b>Real Estate</b><svg class="i" width="17" height="17" aria-hidden="true"><use href="#i-arrow"/></svg></span></button><button type="button" data-service="materials" class=""><span class="department-photo"><img src="{{ img('dept_materials') }}" alt="{{ img_alt('dept_materials') }} card" loading="lazy"></span><span class="department-label"><small>05</small><b>Material Sourcing</b><svg class="i" width="17" height="17" aria-hidden="true"><use href="#i-arrow"/></svg></span></button></div>
 <div class="service-tabs" role="tablist"><button type="button" data-service="engineering" class="active"><small>01</small><span>Engineering Solution</span></button><button type="button" data-service="interior" class=""><small>02</small><span>Interior &amp; Exterior</span></button><button type="button" data-service="furniture" class=""><small>03</small><span>Smart Furniture</span></button><button type="button" data-service="realestate" class=""><small>04</small><span>Real Estate</span></button><button type="button" data-service="materials" class=""><small>05</small><span>Material Sourcing</span></button></div>
 <div class="service-feature service-panel active" data-panel="engineering">
 <div class="service-image department-poster"><img src="{{ img('dept_engineering') }}" alt="{{ img_alt('dept_engineering') }} poster" loading="lazy"><span>01</span></div>
 <div class="service-info"><div class="service-icon"><svg class="i" width="27" height="27" aria-hidden="true"><use href="#i-ruler"/></svg></div><span>Precision. Safety. Performance.</span><h3>Engineering Solution</h3>
 <p class="service-description">We provide professional engineering and technical solutions tailored to the requirements of each project.</p><p class="service-description service-details">Our capabilities include architectural planning, structural solutions, engineering consultancy, construction planning, project coordination, and supervision—with a focus on safety, functionality, durability, and efficiency.</p>
 <ul><li><svg class="i" width="17" height="17" aria-hidden="true"><use href="#i-check"/></svg>Architectural &amp; structural planning</li><li><svg class="i" width="17" height="17" aria-hidden="true"><use href="#i-check"/></svg>Engineering consultancy</li><li><svg class="i" width="17" height="17" aria-hidden="true"><use href="#i-check"/></svg>Construction planning</li><li><svg class="i" width="17" height="17" aria-hidden="true"><use href="#i-check"/></svg>Project coordination</li><li><svg class="i" width="17" height="17" aria-hidden="true"><use href="#i-check"/></svg>Professional supervision</li></ul>
 <a class="text-button" href="{{ waLink() }}">Explore this service <svg class="i" width="18" height="18" aria-hidden="true"><use href="#i-arrow"/></svg></a></div></div><div class="service-feature service-panel" data-panel="interior">
 <div class="service-image department-poster"><img src="{{ img('dept_interior') }}" alt="{{ img_alt('dept_interior') }} poster" loading="lazy"><span>02</span></div>
 <div class="service-info"><div class="service-icon"><svg class="i" width="27" height="27" aria-hidden="true"><use href="#i-home"/></svg></div><span>Where Design Meets Function.</span><h3>Interior &amp; Exterior</h3>
 <p class="service-description">We create distinctive interior and exterior environments that combine aesthetic appeal, functionality, comfort, and architectural character.</p><p class="service-description service-details">Our services include concept development, space planning, interior design, exterior design, 3D visualization, material selection, and execution support for residential and commercial projects.</p>
 <ul><li><svg class="i" width="17" height="17" aria-hidden="true"><use href="#i-check"/></svg>Concept &amp; space planning</li><li><svg class="i" width="17" height="17" aria-hidden="true"><use href="#i-check"/></svg>Interior and exterior design</li><li><svg class="i" width="17" height="17" aria-hidden="true"><use href="#i-check"/></svg>3D visualization</li><li><svg class="i" width="17" height="17" aria-hidden="true"><use href="#i-check"/></svg>Material selection</li><li><svg class="i" width="17" height="17" aria-hidden="true"><use href="#i-check"/></svg>Execution support</li></ul>
 <a class="text-button" href="{{ waLink() }}">Explore this service <svg class="i" width="18" height="18" aria-hidden="true"><use href="#i-arrow"/></svg></a></div></div><div class="service-feature service-panel" data-panel="furniture">
 <div class="service-image department-poster"><img src="{{ img('dept_furniture') }}" alt="{{ img_alt('dept_furniture') }} poster" loading="lazy"><span>03</span></div>
 <div class="service-info"><div class="service-icon"><svg class="i" width="27" height="27" aria-hidden="true"><use href="#i-chair"/></svg></div><span>Designed Around Your Space.</span><h3>Smart Furniture</h3>
 <p class="service-description">Our Smart Furniture solutions are developed to make modern spaces more functional, organized, efficient, and personalized.</p><p class="service-description service-details">We provide customized solutions including kitchen cabinets, wardrobes, TV cabinets, beds, sofas, reading tables, office furniture, storage systems, and other bespoke furniture. Every piece is designed with careful consideration of space, usability, aesthetics, and lifestyle requirements.</p>
 <ul><li><svg class="i" width="17" height="17" aria-hidden="true"><use href="#i-check"/></svg>Kitchen cabinets &amp; wardrobes</li><li><svg class="i" width="17" height="17" aria-hidden="true"><use href="#i-check"/></svg>TV cabinets, beds &amp; sofas</li><li><svg class="i" width="17" height="17" aria-hidden="true"><use href="#i-check"/></svg>Reading tables</li><li><svg class="i" width="17" height="17" aria-hidden="true"><use href="#i-check"/></svg>Office furniture</li><li><svg class="i" width="17" height="17" aria-hidden="true"><use href="#i-check"/></svg>Bespoke storage systems</li></ul>
 <a class="text-button" href="{{ waLink() }}">Explore this service <svg class="i" width="18" height="18" aria-hidden="true"><use href="#i-arrow"/></svg></a></div></div><div class="service-feature service-panel" data-panel="realestate">
 <div class="service-image department-poster"><img src="{{ img('dept_realestate') }}" alt="{{ img_alt('dept_realestate') }} poster" loading="lazy"><span>04</span></div>
 <div class="service-info"><div class="service-icon"><svg class="i" width="27" height="27" aria-hidden="true"><use href="#i-building"/></svg></div><span>Creating Value from Every Opportunity.</span><h3>Real Estate</h3>
 <p class="service-description">We support residential and commercial property development with practical planning and development solutions.</p><p class="service-description service-details">From property planning and development concepts to space optimization and project coordination, we focus on creating projects that balance functionality, market needs, long-term value, and design quality.</p>
 <ul><li><svg class="i" width="17" height="17" aria-hidden="true"><use href="#i-check"/></svg>Property planning</li><li><svg class="i" width="17" height="17" aria-hidden="true"><use href="#i-check"/></svg>Development concepts</li><li><svg class="i" width="17" height="17" aria-hidden="true"><use href="#i-check"/></svg>Space optimization</li><li><svg class="i" width="17" height="17" aria-hidden="true"><use href="#i-check"/></svg>Project coordination</li><li><svg class="i" width="17" height="17" aria-hidden="true"><use href="#i-check"/></svg>Residential &amp; commercial development</li></ul>
 <a class="text-button" href="{{ waLink() }}">Explore this service <svg class="i" width="18" height="18" aria-hidden="true"><use href="#i-arrow"/></svg></a></div></div><div class="service-feature service-panel" data-panel="materials">
 <div class="service-image department-poster"><img src="{{ img('dept_materials') }}" alt="{{ img_alt('dept_materials') }} poster" loading="lazy"><span>05</span></div>
 <div class="service-info"><div class="service-icon"><svg class="i" width="27" height="27" aria-hidden="true"><use href="#i-truck"/></svg></div><span>Quality Materials. Reliable Sources. Better Value.</span><h3>Material Sourcing</h3>
 <p class="service-description">We help clients identify and source suitable construction, interior, finishing, and furniture materials based on project specifications, quality requirements, design preferences, and budget.</p><p class="service-description service-details">Our sourcing approach focuses on product suitability, quality, supplier reliability, cost efficiency, and project consistency, helping clients make informed material decisions.</p>
 <ul><li><svg class="i" width="17" height="17" aria-hidden="true"><use href="#i-check"/></svg>Construction materials</li><li><svg class="i" width="17" height="17" aria-hidden="true"><use href="#i-check"/></svg>Interior &amp; finishing materials</li><li><svg class="i" width="17" height="17" aria-hidden="true"><use href="#i-check"/></svg>Furniture materials</li><li><svg class="i" width="17" height="17" aria-hidden="true"><use href="#i-check"/></svg>Reliable supplier selection</li><li><svg class="i" width="17" height="17" aria-hidden="true"><use href="#i-check"/></svg>Budget-aligned sourcing</li></ul>
 <a class="text-button" href="{{ waLink() }}">Explore this service <svg class="i" width="18" height="18" aria-hidden="true"><use href="#i-arrow"/></svg></a></div></div>
</section>

<section class="approach section">
 <div class="approach-heading">
  <div class=""><span></span>{{ sec('approach','sub') }}</div>
  <h2>{!! rich(sec('approach','heading')) !!}</h2>
  {!! paras(sec('approach','para')) !!}
 </div>
 <div class="approach-flow"><div><small>01</small><span><svg class="i" width="20" height="20" aria-hidden="true"><use href="#i-ruler"/></svg></span><b>Engineering Solution</b><svg class="i" width="20" height="20" aria-hidden="true"><use href="#i-arrow"/></svg></div><div><small>02</small><span><svg class="i" width="20" height="20" aria-hidden="true"><use href="#i-home"/></svg></span><b>Interior &amp; Exterior</b><svg class="i" width="20" height="20" aria-hidden="true"><use href="#i-arrow"/></svg></div><div><small>03</small><span><svg class="i" width="20" height="20" aria-hidden="true"><use href="#i-chair"/></svg></span><b>Smart Furniture</b><svg class="i" width="20" height="20" aria-hidden="true"><use href="#i-arrow"/></svg></div><div><small>04</small><span><svg class="i" width="20" height="20" aria-hidden="true"><use href="#i-building"/></svg></span><b>Real Estate</b><svg class="i" width="20" height="20" aria-hidden="true"><use href="#i-arrow"/></svg></div><div><small>05</small><span><svg class="i" width="20" height="20" aria-hidden="true"><use href="#i-truck"/></svg></span><b>Material Sourcing</b></div></div>
 <p class="approach-note">This integrated model enables better coordination between design, engineering, materials, furniture, and execution, creating a more seamless project journey for our clients.</p>
</section>

<section class="why section">
 <div class="section-heading"><div><div class=""><span></span>{{ sec('why','sub') }}</div><h2>{!! rich(sec('why','heading')) !!}</h2></div>{!! paras(sec('why','para')) !!}</div>
 <div class="why-grid"><article><span>01</span><h3>Integrated Expertise</h3><p>Multiple building and property-related solutions under one professional platform.</p></article><article><span>02</span><h3>Design &amp; Engineering</h3><p>Creative ideas supported by practical technical expertise.</p></article><article><span>03</span><h3>Quality Focus</h3><p>A commitment to appropriate materials, workmanship, functionality, and lasting value.</p></article><article><span>04</span><h3>Customized Solutions</h3><p>Every project is approached according to its unique requirements, priorities, and budget.</p></article><article><span>05</span><h3>Professional Coordination</h3><p>A coordinated approach designed to reduce complexity and improve the overall project experience.</p></article></div>
 <div class="vision-grid">
  <article><span>Our Vision</span><h3>Trusted. Innovative. Integrated.</h3><p>To become a trusted and innovative integrated building and property solutions company, recognized for professional excellence, thoughtful design, engineering integrity, quality, and customer-centric service.</p></article>
  <article><span>Our Mission</span><h3>Ideas into valuable spaces.</h3><p>To transform our clients’ ideas into well-designed, functional, efficient, and valuable spaces through integrated engineering, design, real estate, furniture, and material solutions.</p><p>We are committed to building lasting relationships through transparency, professionalism, innovation, quality, and responsible execution.</p></article>
 </div>
</section>

<section class="collections section" id="collections">
 <div class="section-heading compact"><div><div class=""><span></span>{{ sec('collections','sub') }}</div><h2>{!! rich(sec('collections','heading')) !!}</h2></div>{!! paras(sec('collections','para')) !!}</div>
 <div class="collection-grid">
 @foreach($categories as $c)
  @php($cover = $c->coverPath())
  <article class="collection-card" data-gallery="{{ $c->slug }}" tabindex="0" role="button" aria-haspopup="dialog" aria-label="Open {{ $c->name }} gallery"><img src="{{ $cover ? asset($cover) : '' }}" alt="{{ $c->name }} interior collection" loading="lazy" decoding="async"><div><span>{{ str_pad($loop->iteration, 2, '0', STR_PAD_LEFT) }}</span><h3>{{ $c->name }}</h3><p>{{ $c->description }}</p><button type="button" tabindex="-1" aria-hidden="true"><svg class="i" width="20" height="20" aria-hidden="true"><use href="#i-arrow"/></svg></button></div></article>
 @endforeach
 </div>
</section>

<section class="calculator section" id="cost-calculator">
 <div class="calc-copy">
  <div class=""><span></span>{{ sec('calculator','sub') }}</div>
  <h2>{!! rich(sec('calculator','heading')) !!}</h2>
  {!! paras(sec('calculator','para')) !!}
  <div class="calc-facts"><span><svg class="i" width="20" height="20" aria-hidden="true"><use href="#i-check"/></svg>Transparent breakdown</span><span><svg class="i" width="20" height="20" aria-hidden="true"><use href="#i-check"/></svg>Customisable inputs</span><span><svg class="i" width="20" height="20" aria-hidden="true"><use href="#i-check"/></svg>No hidden surprises</span></div>
 </div>
 <div class="calc-card">
  <div class="calc-tabs"><button type="button" class="active" data-calc="building"><svg class="i" width="20" height="20" aria-hidden="true"><use href="#i-building"/></svg>Building</button><button type="button" data-calc="interior"><svg class="i" width="20" height="20" aria-hidden="true"><use href="#i-chair"/></svg>Interior</button></div>

  <div class="calc-panel active" id="calc-building">
   <div class="calc-title"><span>Building budget calculator</span><small>Rate: <span id="rateText">৳{{ number_format(config("calculator.rates")[2] ?? config("calculator.default_rate")) }}</span> / sq ft</small></div>
   <div class="input-grid">
    <label>Number of storeys<div class="select-wrap"><select id="stories">@foreach(config("calculator.rates") as $n => $r)<option value="{{ $n }}">{{ $n }} storeys</option>@endforeach</select><svg class="i" width="16" height="16" aria-hidden="true"><use href="#i-chevron"/></svg></div></label>
    <label>Building length <div class="unit-input"><input id="length" type="number" min="1" value="40"><span>ft</span></div></label>
    <label>Building width <div class="unit-input"><input id="width" type="number" min="1" value="30"><span>ft</span></div></label>
   </div>
   <div class="estimate"><span>Estimated total <small id="areaText"></small></span><b id="buildingTotal"></b></div>
   <div class="split-bar"><span style="width:{{ $structPct }}%">Structure {{ $structPct }}%</span><span>Finishing {{ 100 - $structPct }}%</span></div>
   <div class="breakdown-groups">
    @foreach(config('calculator.groups') as $g)
    @php($gmax = max(array_column($g['items'], 1)))
    <div class="breakdown-group"><div class="breakdown-title"><span>{{ $g['title'] }}</span><b>{{ array_sum(array_column($g['items'], 1)) }}% · <span id="{{ $g['id'] }}"></span></b></div><div class="breakdown">
     @foreach($g['items'] as [$name, $pct])
      <div data-pct="{{ $pct }}"><span>{{ $name }}</span><i><b style="width:{{ round($pct / $gmax * 100, 1) }}%"></b></i><strong>{{ $pct }}%</strong><small data-money></small></div>
     @endforeach
    </div></div>
    @endforeach
   </div>
   <div class="breakdown-total"><span>Total project allocation</span><b>{{ $structPct }}% + {{ 100 - $structPct }}% = 100%</b></div>
  </div>

  <div class="calc-panel" id="calc-interior">
   <div class="calc-title"><span>Interior item calculator</span><small>Select items and quantity</small></div>
   <div class="room-tabs">@foreach(config('calculator.rooms') as $ri => $room)<button type="button" data-room="{{ $ri }}" class="{{ $loop->first ? 'active' : '' }}">{{ $room['name'] }}</button>@endforeach</div>
   <div class="item-options">@foreach(config('calculator.rooms') as $ri => $room)<div class="item-group {{ $loop->first ? 'active' : '' }}" data-group="{{ $ri }}">@foreach($room['items'] as [$name, $price])<div class="item-row" data-price="{{ $price }}"><span><b>{{ $name }}</b><small>৳{{ number_format($price) }} each</small></span><div class="quantity-control"><button type="button" data-dec disabled aria-label="Remove one {{ $name }}">−</button><strong>0</strong><button type="button" data-inc aria-label="Add one {{ $name }}">+</button></div><em>Select</em></div>@endforeach</div>@endforeach</div>
   <div class="estimate interior-estimate"><span>Interior estimate <small id="itemCount">0 item types selected</small></span><b id="interiorTotal">৳0</b></div>
  </div>

  <a class="quote-button" href="{{ waLink() }}">Get a detailed quotation <svg class="i" width="20" height="20" aria-hidden="true"><use href="#i-arrow"/></svg></a>
  <p class="disclaimer">*Indicative estimate only. Site condition, materials and design may affect final cost.</p>
 </div>
</section>

<section class="project-section section" id="projects">
 <div class="section-heading compact"><div><div class=""><span></span>{{ sec('projects','sub') }}</div><h2>{!! rich(sec('projects','heading')) !!}</h2></div><a class="outline-button" href="#collections">Browse room galleries <svg class="i" width="20" height="20" aria-hidden="true"><use href="#i-arrow"/></svg></a></div>
 <div class="project-grid" id="gallery">
  <figure class="project-main"><img src="{{ img('project_1') }}" alt="{{ img_alt('project_1') }}" loading="lazy"><figcaption><span>Architecture · Chattogram</span><b>Urban Residence</b></figcaption></figure>
  <figure><img src="{{ img('project_2') }}" alt="{{ img_alt('project_2') }}" loading="lazy"><figcaption><span>Interior · Residential</span><b>Quiet Luxury Living</b></figcaption></figure>
  <figure class="video-project"><img src="{{ img('project_3') }}" alt="{{ img_alt('project_3') }}" loading="lazy"><figcaption><span>Interior · Commercial</span><b>Modern Workplace</b></figcaption></figure>
 </div>
</section>

<section class="material-banner" style="--material-bg:url('{{ img('material') }}')">
 <div><div class=""><span></span>{{ sec('materials','sub') }}</div><h2>{!! rich(sec('materials','heading')) !!}</h2></div>
 {!! paras(sec('materials','para')) !!}
 <button type="button" data-service="materials">Explore materials <svg class="i" width="20" height="20" aria-hidden="true"><use href="#i-arrow"/></svg></button>
</section>

<section class="commitment section">
 <div><div class=""><span></span>{{ sec('commitment','sub') }}</div><h2>{!! rich(sec('commitment','heading')) !!}</h2></div>
 <div class="commitment-copy">{!! paras(sec('commitment','para')) !!}<div class="commitment-steps"><span>We listen.</span><span>We plan.</span><span>We design.</span><span>We engineer.</span><span>We source.</span><span>We coordinate.</span><span>We deliver solutions.</span></div></div>
</section>

<section class="about-cta">
 <div><span>{{ sec('cta','sub') }}</span><h2>{!! rich(sec('cta','heading')) !!}</h2>{!! paras(sec('cta','para')) !!}</div>
 <a href="{{ waLink() }}">Start a conversation <svg class="i" width="20" height="20" aria-hidden="true"><use href="#i-arrow"/></svg></a>
</section>

<footer id="contact">
 <div class="footer-main">
  <div class="footer-brand">
   <a class="logo logo-light" href="#top" aria-label="3MATTRIK Design home"><img src="{{ asset(setting('logo')) }}" alt="Official 3 Mattrik Design gold logo" style="width: 60px;"><span class="logo-copy"><b><strong>3</strong>MATTRIK DESIGN</b><small>Build your Dream</small></span></a>
   <p>Engineering thoughtful spaces for better living, working and building.</p>
  </div>
  <div class="footer-nav"><b style="font-size: 16px;">Explore</b><a href="#about" style="font-size: 16px;">About us</a><a href="#services" style="font-size: 16px;">Services</a><a href="#projects" style="font-size: 16px;">Projects</a><a href="#cost-calculator" style="font-size: 16px;">Cost calculator</a></div>
  <div class="footer-nav"><b style="font-size: 16px;">Core services</b><a href="#services" data-service="engineering" style="font-size: 16px;">Engineering Solution</a><a href="#services" data-service="interior" style="font-size: 16px;">Interior &amp; Exterior</a><a href="#services" data-service="furniture" style="font-size: 16px;">Smart Furniture</a><a href="#services" data-service="realestate" style="font-size: 16px;">Real Estate</a><a href="#services" data-service="materials" style="font-size: 16px;">Material Sourcing</a></div>
  <div class="footer-contact">
   <a class="footer-phone" href="{{ waLink() }}">{{ setting('phone') }} <svg class="i" width="20" height="20" aria-hidden="true"><use href="#i-arrow"/></svg></a>
   <a href="mailto:{{ setting('email') }}"><svg class="i" width="20" height="20" aria-hidden="true"><use href="#i-mail"/></svg>{{ setting('email') }}</a>
   <a href="https://maps.app.goo.gl/rrX8V3ipmqCsGAfv9" target="_blank" rel="noreferrer"><svg class="i" width="20" height="20" aria-hidden="true"><use href="#i-map"/></svg>{{ setting('address') }}</a>
  </div>
 </div>
 <div class="footer-bottom"><span>© {{ date('Y') }} 3MATTRIK Design. All rights reserved.</span><span>Chattogram, Bangladesh</span><a href="#top">Back to top ↑</a></div>
</footer>
</main>

<!-- Photo gallery popup (filled by js/main.js) -->
<div class="gallery-backdrop" id="galleryBackdrop" hidden>
 <div class="gallery-modal" role="dialog" aria-modal="true" aria-label="Photo gallery">
  <div class="gallery-bar"><h3 id="galTitle"></h3><span id="galCounter" aria-live="polite"></span><button type="button" class="gallery-close" id="galClose" aria-label="Close gallery">×</button></div>
  <div class="gallery-stage">
   <button type="button" class="gallery-nav prev" id="galPrev" aria-label="Previous photo">‹</button>
   <div class="gallery-track" id="galTrack" tabindex="0"></div>
   <button type="button" class="gallery-nav next" id="galNext" aria-label="Next photo">›</button>
  </div>
  <div class="gallery-thumbs" id="galThumbs" role="tablist" aria-label="Choose photo"></div>
 </div>
</div>

<script>window.SITE = @json($siteJs);</script>
<script src="{{ asset('js/main.js') }}"></script>
</body>
</html>
