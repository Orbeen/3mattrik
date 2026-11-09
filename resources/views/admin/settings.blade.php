@extends('admin.layout')
@section('title','Settings')
@section('content')
<h1>Settings</h1><p class="sub">Logo, contact details and button colour.</p>

<form method="post" action="{{ route('admin.settings') }}" enctype="multipart/form-data">
@csrf
<div class="card">
 <h2>Logo</h2>
 <div class="row"><img src="{{ asset(setting('logo')) }}" alt="" style="height:70px;width:auto;background:#eee;padding:6px;border-radius:6px"></div>
 <label>Upload new logo <small>(PNG with transparent background works best, max 4 MB)</small></label>
 <input type="file" name="logo" accept="image/png,image/jpeg,image/webp,image/svg+xml">
</div>
<div class="card">
 <h2>Contact details</h2>
 <label>Email</label><input type="email" name="email" value="{{ old('email', setting('email')) }}" required>
 <label>Phone <small>(shown on the website)</small></label><input type="text" name="phone" value="{{ old('phone', setting('phone')) }}" required>
 <label>WhatsApp number <small>(country code + number, digits only. All Contact buttons open this chat)</small></label>
 <input type="text" name="whatsapp" value="{{ old('whatsapp', setting('whatsapp')) }}" required>
 <label>Address</label><textarea name="address" style="min-height:60px">{{ old('address', setting('address')) }}</textarea>
</div>
<div class="card">
 <h2>Button colour</h2>
 <div class="row"><input type="color" name="button_color" value="{{ old('button_color', setting('button_color')) }}">
 <span class="hint">Applies to the Contact, Explore, quotation and active tab buttons. Default is #dcaa2c.</span></div>
</div>
<div class="sticky"><button class="btn">Save settings</button></div>
</form>

<form method="post" action="{{ route('admin.account') }}" class="card" style="margin-top:24px">
@csrf
 <h2>Admin login</h2>
 <label>Login email</label><input type="email" name="admin_email" value="{{ old('admin_email', auth()->user()->email) }}" required>
 <label>New password <small>(leave empty to keep the current one, min 8 characters)</small></label><input type="password" name="new_password" autocomplete="new-password">
 <label>Repeat new password</label><input type="password" name="new_password_confirmation" autocomplete="new-password">
 <label>Current password <small>(required to save)</small></label><input type="password" name="current_password" required>
 <p><button class="btn dark">Update login</button></p>
</form>
@endsection
