/* 3 Mattrik Design - plain JavaScript (no libraries, no build step) */
(function () {
  "use strict";
  var $ = function (s, r) { return (r || document).querySelector(s); };
  var $$ = function (s, r) { return Array.prototype.slice.call((r || document).querySelectorAll(s)); };
  var money = function (n) { return "৳" + Math.round(n).toLocaleString("en-US"); };

  /* ---------- Mobile menu ---------- */
  var nav = $("#navLinks"), menuBtn = $("#menuBtn");
  menuBtn.addEventListener("click", function () {
    var open = nav.classList.toggle("open");
    menuBtn.setAttribute("aria-expanded", open);
  });
  $$("a", nav).forEach(function (a) { a.addEventListener("click", function () { nav.classList.remove("open"); }); });

  /* ---------- Services: pick a department ---------- */
  function showService(key) {
    $$("[data-service]").forEach(function (el) {
      if (el.closest(".department-gallery") || el.closest(".service-tabs")) {
        el.classList.toggle("active", el.getAttribute("data-service") === key);
      }
    });
    $$(".service-panel").forEach(function (p) { p.classList.toggle("active", p.getAttribute("data-panel") === key); });
  }
  $$("[data-service]").forEach(function (el) {
    el.addEventListener("click", function (e) {
      var key = el.getAttribute("data-service");
      showService(key);
      if (el.closest(".search-results")) closeSearch();
      // buttons outside the services section (search results, materials banner) scroll there
      if (el.tagName === "BUTTON" && !el.closest(".department-gallery") && !el.closest(".service-tabs")) {
        $("#services").scrollIntoView({ behavior: "smooth" });
      }
    });
  });

  /* ---------- Search ---------- */
  var overlay = $("#searchOverlay"), input = $("#searchInput");
  function openSearch() { overlay.hidden = false; input.value = ""; filterSearch(); input.focus(); }
  function closeSearch() { overlay.hidden = true; }
  function filterSearch() {
    var q = input.value.trim().toLowerCase();
    $$("#searchResults button").forEach(function (b) { b.hidden = q && b.getAttribute("data-search").indexOf(q) === -1; });
  }
  $("#searchOpen").addEventListener("click", openSearch);
  $("#searchClose").addEventListener("click", closeSearch);
  input.addEventListener("input", filterSearch);
  overlay.addEventListener("click", function (e) { if (e.target === overlay) closeSearch(); });

  /* ---------- Cost calculator ---------- */
  $$(".calc-tabs button").forEach(function (b) {
    b.addEventListener("click", function () {
      var t = b.getAttribute("data-calc");
      $$(".calc-tabs button").forEach(function (x) { x.classList.toggle("active", x === b); });
      $$(".calc-panel").forEach(function (p) { p.classList.toggle("active", p.id === "calc-" + t); });
    });
  });

  var SITE = window.SITE || {};
  var CALC = SITE.calc || { rates: { 2: 3000, 5: 2750, 10: 2500 }, fallback: 2500, structPct: 65 };
  function calcBuilding() {
    var stories = +$("#stories").value || 0;
    var length = Math.max(0, +$("#length").value || 0);
    var width = Math.max(0, +$("#width").value || 0);
    var rate = CALC.rates[stories] || CALC.fallback;
    var area = stories * length * width;
    var total = area * rate;
    $("#rateText").textContent = money(rate);
    $("#areaText").textContent = area.toLocaleString("en-US") + " sq ft total area";
    $("#buildingTotal").textContent = money(total);
    $("#structTotal").textContent = money(total * CALC.structPct / 100);
    $("#finishTotal").textContent = money(total * (100 - CALC.structPct) / 100);
    $$("#calc-building .breakdown > div").forEach(function (row) {
      $("[data-money]", row).textContent = money(total * (+row.getAttribute("data-pct")) / 100);
    });
  }
  ["#stories", "#length", "#width"].forEach(function (s) {
    $(s).addEventListener("input", calcBuilding);
    $(s).addEventListener("change", calcBuilding);
  });
  calcBuilding();

  function calcInterior() {
    var total = 0, kinds = 0;
    $$(".item-row").forEach(function (row) {
      var q = +$("strong", row).textContent, price = +row.getAttribute("data-price");
      total += q * price;
      if (q > 0) kinds++;
      row.classList.toggle("selected", q > 0);
      $("[data-dec]", row).disabled = q === 0;
      $("em", row).textContent = q > 0 ? money(price * q) : "Select";
    });
    $("#interiorTotal").textContent = money(total);
    $("#itemCount").textContent = kinds + " item types selected";
  }
  $$(".item-row").forEach(function (row) {
    $("[data-inc]", row).addEventListener("click", function () { var s = $("strong", row); s.textContent = +s.textContent + 1; calcInterior(); });
    $("[data-dec]", row).addEventListener("click", function () { var s = $("strong", row); s.textContent = Math.max(0, +s.textContent - 1); calcInterior(); });
  });
  $$(".room-tabs button").forEach(function (b) {
    b.addEventListener("click", function () {
      var i = b.getAttribute("data-room");
      $$(".room-tabs button").forEach(function (x) { x.classList.toggle("active", x === b); });
      $$(".item-group").forEach(function (g) { g.classList.toggle("active", g.getAttribute("data-group") === i); });
    });
  });

  /* ---------- Photo gallery popup ---------- */
  // Galleries come from the database: SITE.galleries = { slug: { title, photos: [url, ...] } }
  // Lazy loading: a slide only gets its src when it is within 2 photos of the one being viewed.
  var GALLERIES = SITE.galleries || {};
  var COUNT = 0;
  var backdrop = $("#galleryBackdrop"), track = $("#galTrack"), thumbs = $("#galThumbs");
  var current = 0, target = 0, lastJump = 0, settleTimer, opener = null, activeKey = null, prevOverflow = "";
  var pad = function (n) { return (n < 10 ? "0" : "") + n; };

  function loadNear(i) {
    $$(".gallery-slide img", track).forEach(function (im, k) {
      if (Math.abs(k - i) <= 2 && !im.getAttribute("src")) im.src = im.getAttribute("data-src");
    });
    $$(".gallery-thumb img", thumbs).forEach(function (im, k) {
      if (Math.abs(k - i) <= 6 && !im.getAttribute("src")) im.src = im.getAttribute("data-src");
    });
  }
  function updateUi(i) {
    current = i;
    loadNear(i);
    $("#galCounter").textContent = (i + 1) + " / " + COUNT;
    $("#galPrev").disabled = i === 0;
    $("#galNext").disabled = i === COUNT - 1;
    $$(".gallery-thumb", thumbs).forEach(function (t, k) { t.setAttribute("aria-selected", k === i ? "true" : "false"); });
    var sel = $$(".gallery-thumb", thumbs)[i];
    if (sel && sel.scrollIntoView) { thumbs.scrollLeft = sel.offsetLeft - thumbs.clientWidth / 2 + sel.clientWidth / 2; }
  }
  function goTo(next, instant) {
    var i = Math.max(0, Math.min(COUNT - 1, next));
    target = i;
    lastJump = Date.now();
    track.scrollTo({ left: i * track.clientWidth, behavior: instant ? "auto" : "smooth" });
    updateUi(i);
  }
  function openGallery(key, from) {
    var g = GALLERIES[key];
    if (!g || !g.photos.length) return;
    COUNT = g.photos.length;
    activeKey = key; opener = from;
    $("#galTitle").textContent = g.title;
    track.innerHTML = ""; thumbs.innerHTML = "";
    for (var n = 1; n <= COUNT; n++) {
      var slide = document.createElement("div");
      slide.className = "gallery-slide";
      slide.setAttribute("role", "group");
      slide.setAttribute("aria-label", "Photo " + n + " of " + COUNT);
      var img = document.createElement("img");
      img.setAttribute("data-src", g.photos[n - 1]); img.alt = g.title + " design " + n; img.draggable = false;
      img.decoding = "async";
      slide.appendChild(img); track.appendChild(slide);

      var th = document.createElement("button");
      th.type = "button"; th.className = "gallery-thumb"; th.setAttribute("role", "tab");
      th.setAttribute("aria-label", "Go to photo " + n);
      var ti = document.createElement("img"); ti.setAttribute("data-src", g.photos[n - 1]); ti.alt = ""; ti.decoding = "async";
      th.appendChild(ti);
      (function (k) { th.addEventListener("click", function () { goTo(k); }); })(n - 1);
      thumbs.appendChild(th);
    }
    backdrop.hidden = false;
    prevOverflow = document.body.style.overflow;
    document.body.style.overflow = "hidden";
    goTo(0, true);
    track.focus({ preventScroll: true });
  }
  function closeGallery() {
    backdrop.hidden = true;
    document.body.style.overflow = prevOverflow;
    track.innerHTML = ""; thumbs.innerHTML = "";
    if (opener && opener.focus) opener.focus({ preventScroll: true });
  }

  // Swipe / drag: when scrolling settles, sync the counter (ignored while a button animation runs)
  track.addEventListener("scroll", function () {
    clearTimeout(settleTimer);
    settleTimer = setTimeout(function () {
      if (Date.now() - lastJump < 700) return;
      var i = Math.round(track.scrollLeft / track.clientWidth);
      target = i; updateUi(i);
    }, 90);
  });
  $("#galPrev").addEventListener("click", function () { goTo(target - 1); });
  $("#galNext").addEventListener("click", function () { goTo(target + 1); });
  $("#galClose").addEventListener("click", closeGallery);
  backdrop.addEventListener("click", function (e) { if (e.target === backdrop) closeGallery(); });
  window.addEventListener("resize", function () { if (!backdrop.hidden) goTo(target, true); });

  $$("[data-gallery]").forEach(function (card) {
    card.addEventListener("click", function () { openGallery(card.getAttribute("data-gallery"), card); });
    card.addEventListener("keydown", function (e) {
      if (e.key === "Enter" || e.key === " ") { e.preventDefault(); openGallery(card.getAttribute("data-gallery"), card); }
    });
  });

  document.addEventListener("keydown", function (e) {
    if (!backdrop.hidden) {
      if (e.key === "Escape") closeGallery();
      else if (e.key === "ArrowRight") goTo(target + 1);
      else if (e.key === "ArrowLeft") goTo(target - 1);
    } else if (!overlay.hidden && e.key === "Escape") {
      closeSearch();
    }
  });
})();
