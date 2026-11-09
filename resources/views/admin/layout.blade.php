<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="robots" content="noindex,nofollow">
<title>@yield('title', 'Admin') · 3 Mattrik</title>
<style>
*{box-sizing:border-box}
body{margin:0;font:15px/1.5 system-ui,-apple-system,Segoe UI,Roboto,sans-serif;color:#1c1b17;background:#f5f3ec}
a{color:#8a6204}
.wrap{display:grid;grid-template-columns:210px 1fr;min-height:100vh}
aside{background:#11110f;color:#fff;padding:22px 16px;position:sticky;top:0;height:100vh}
aside img{width:120px;background:#fff;padding:8px;border-radius:6px;margin-bottom:22px}
aside a{display:block;color:#ddd;text-decoration:none;padding:10px 12px;border-radius:6px;margin-bottom:4px}
aside a.on,aside a:hover{background:#d7a923;color:#11110f}
aside form{margin-top:24px}
main{padding:28px 32px;max-width:980px}
h1{margin:0 0 6px;font-size:24px} .sub{color:#68645a;margin:0 0 22px}
.card{background:#fff;border:1px solid #e6dfc9;border-radius:10px;padding:20px;margin-bottom:18px}
.card h2{margin:0 0 14px;font-size:17px}
label{display:block;font-weight:600;margin:12px 0 4px;font-size:13px}
label small{font-weight:400;color:#68645a}
input[type=text],input[type=email],input[type=password],input[type=number],textarea{width:100%;padding:9px 11px;border:1px solid #cfc7ad;border-radius:6px;font:inherit;background:#fff}
textarea{min-height:90px;resize:vertical}
input[type=color]{width:60px;height:40px;padding:2px;border:1px solid #cfc7ad;border-radius:6px;background:#fff}
input[type=file]{font-size:13px}
.btn{display:inline-block;background:#d7a923;color:#11110f;border:0;padding:10px 20px;border-radius:6px;font:inherit;font-weight:700;cursor:pointer;text-decoration:none}
.btn.dark{background:#11110f;color:#fff} .btn.red{background:#b3261e;color:#fff} .btn.sm{padding:6px 12px;font-size:13px}
.ok{background:#e6f4e6;border:1px solid #b6dcb6;color:#1e5b1e;padding:10px 14px;border-radius:6px;margin-bottom:18px}
.err{background:#fde8e6;border:1px solid #f1b9b4;color:#8a1b13;padding:10px 14px;border-radius:6px;margin-bottom:18px}
.grid{display:grid;grid-template-columns:repeat(auto-fill,minmax(230px,1fr));gap:16px}
.grid img{width:100%;height:150px;object-fit:cover;border-radius:6px;border:1px solid #e6dfc9;background:#eee}
.row{display:flex;gap:12px;align-items:center;flex-wrap:wrap}
.sticky{position:sticky;bottom:0;background:#f5f3ec;padding:12px 0;border-top:1px solid #e6dfc9}
table{width:100%;border-collapse:collapse} td,th{padding:9px 8px;border-bottom:1px solid #eee;text-align:left}
.hint{font-size:12px;color:#68645a;margin-top:4px}
@media(max-width:760px){.wrap{grid-template-columns:1fr}aside{position:static;height:auto}main{padding:18px}}
</style>
</head>
<body>
<div class="wrap">
<aside>
 <img src="{{ asset(setting('logo')) }}" alt="">
 @php($nav = ['admin.settings' => 'Settings', 'admin.sections' => 'Section texts', 'admin.images' => 'Images', 'admin.gallery' => 'Gallery'])
 @foreach($nav as $route => $label)
  <a href="{{ route($route) }}" class="{{ request()->routeIs($route.'*') ? 'on' : '' }}">{{ $label }}</a>
 @endforeach
 <a href="{{ route('home') }}" target="_blank">View website ↗</a>
 <form method="post" action="{{ route('logout') }}">@csrf<button class="btn dark sm" style="width:100%;border:1px solid #555">Log out</button></form>
</aside>
<main>
 @if(session('ok'))<div class="ok">{{ session('ok') }}</div>@endif
 @if($errors->any())<div class="err">@foreach($errors->all() as $e)<div>{{ $e }}</div>@endforeach</div>@endif
 @yield('content')
</main>
</div>
</body>
</html>
