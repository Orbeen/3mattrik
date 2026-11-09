<!doctype html>
<html lang="en"><head><meta charset="utf-8"><meta name="viewport" content="width=device-width, initial-scale=1"><meta name="robots" content="noindex,nofollow"><title>Admin login · 3 Mattrik</title>
<style>
body{margin:0;min-height:100vh;display:grid;place-items:center;background:#11110f;font:15px system-ui,sans-serif}
form{background:#fff;padding:30px;border-radius:10px;width:min(380px,92vw)}
img{width:150px;display:block;margin:0 auto 18px}
label{display:block;font-weight:600;font-size:13px;margin:12px 0 4px}
input[type=email],input[type=password]{width:100%;padding:10px;border:1px solid #cfc7ad;border-radius:6px;font:inherit}
button{margin-top:18px;width:100%;background:#d7a923;border:0;padding:11px;border-radius:6px;font:inherit;font-weight:700;cursor:pointer}
.err{background:#fde8e6;color:#8a1b13;padding:9px 12px;border-radius:6px;margin-top:12px;font-size:14px}
</style></head><body>
<form method="post" action="{{ url('admin/login') }}">
 @csrf
 <img src="{{ asset(setting('logo')) }}" alt="3 Mattrik">
 <label>Email</label><input type="email" name="email" value="{{ old('email') }}" required autofocus>
 <label>Password</label><input type="password" name="password" required>
 <label style="font-weight:400"><input type="checkbox" name="remember"> Keep me logged in</label>
 @if($errors->any())<div class="err">{{ $errors->first() }}</div>@endif
 <button>Log in</button>
</form>
</body></html>
