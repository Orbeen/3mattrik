<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Setting;
use App\Support\Uploads;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class SettingsController extends Controller
{
    public function edit()
    {
        return view('admin.settings');
    }

    public function update(Request $r)
    {
        $data = $r->validate([
            'email' => 'required|email|max:120',
            'phone' => 'required|string|max:40',
            'whatsapp' => 'required|string|max:30',
            'address' => 'nullable|string|max:300',
            'button_color' => ['required', 'regex:/^#[0-9a-fA-F]{6}$/'],
            'logo' => 'nullable|image|mimes:png,jpg,jpeg,webp,svg|max:4096',
        ]);

        if ($r->hasFile('logo')) {
            Uploads::forget(setting('logo'));
            Setting::updateOrCreate(['key' => 'logo'], ['value' => Uploads::save($r->file('logo'), 'logo', keepOriginal: true)]);
        }
        foreach (['email', 'phone', 'whatsapp', 'address', 'button_color'] as $k) {
            Setting::updateOrCreate(['key' => $k], ['value' => $data[$k] ?? '']);
        }
        return back()->with('ok', 'Settings saved.');
    }

    public function account(Request $r)
    {
        $data = $r->validate([
            'admin_email' => 'required|email',
            'current_password' => 'required|current_password',
            'new_password' => 'nullable|min:8|confirmed',
        ]);
        $u = $r->user();
        $u->email = $data['admin_email'];
        if (!empty($data['new_password'])) {
            $u->password = Hash::make($data['new_password']);
        }
        $u->save();
        return back()->with('ok', 'Login details updated.');
    }
}
