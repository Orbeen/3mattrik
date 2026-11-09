<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\SiteImage;
use App\Support\Uploads;
use Illuminate\Http\Request;

class ImageController extends Controller
{
    public function edit()
    {
        return view('admin.images', ['images' => SiteImage::orderBy('id')->get()]);
    }

    public function update(Request $r)
    {
        $r->validate([
            'file.*' => 'nullable|image|mimes:png,jpg,jpeg,webp|max:8192',
            'alt.*' => 'nullable|string|max:200',
        ]);
        foreach (SiteImage::all() as $img) {
            $img->alt = $r->input("alt.{$img->key}", $img->alt);
            if ($r->hasFile("file.{$img->key}")) {
                Uploads::forget($img->path);
                $img->path = Uploads::save($r->file("file.{$img->key}"), 'site', 2200);
            }
            $img->save();
        }
        return back()->with('ok', 'Images saved.');
    }
}
