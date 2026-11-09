<?php

namespace Database\Seeders;

use App\Models\GalleryCategory;
use App\Models\Section;
use App\Models\Setting;
use App\Models\SiteImage;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /** Safe to run again: it only fills what is missing, never overwrites edits. */
    public function run(): void
    {
        foreach (config('site.settings') as $k => $v) {
            Setting::firstOrCreate(['key' => $k], ['value' => $v]);
        }
        foreach (config('site.sections') as $k => $s) {
            Section::firstOrCreate(['key' => $k], ['sub' => $s['sub'], 'heading' => $s['heading'], 'para' => $s['para']]);
        }
        foreach (config('site.images') as $k => $i) {
            SiteImage::firstOrCreate(['key' => $k], ['label' => $i['label'], 'path' => $i['path'], 'alt' => $i['alt']]);
        }

        if (GalleryCategory::count() === 0) {
            foreach (config('site.gallery') as $n => [$slug, $name, $desc, $cover]) {
                $cat = GalleryCategory::create(['slug' => $slug, 'name' => $name, 'description' => $desc, 'cover_path' => $cover, 'sort' => $n + 1]);
                $files = glob(public_path("images/gallery/$slug/*.webp")) ?: [];
                sort($files);
                foreach ($files as $i => $f) {
                    $cat->photos()->create(['path' => "images/gallery/$slug/" . basename($f), 'sort' => $i + 1]);
                }
            }
        }

        if (User::count() === 0) {
            User::create([
                'name' => 'Admin',
                'email' => env('ADMIN_EMAIL', 'admin@3mattrik.com'),
                'password' => Hash::make(env('ADMIN_PASSWORD', 'ChangeMe-123')),
            ]);
        }
    }
}
