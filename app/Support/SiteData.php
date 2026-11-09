<?php

namespace App\Support;

use App\Models\Section;
use App\Models\Setting;
use App\Models\SiteImage;

/** Reads editable site content; falls back to config defaults if a row is missing. */
class SiteData
{
    private ?array $settings = null;
    private ?array $sections = null;
    private ?array $images = null;

    public function setting(string $key, $default = null)
    {
        $this->settings ??= Setting::pluck('value', 'key')->all();
        $v = $this->settings[$key] ?? null;
        return ($v === null || $v === '') ? ($default ?? config("site.settings.$key")) : $v;
    }

    public function section(string $key, string $field): ?string
    {
        $this->sections ??= Section::all()->keyBy('key')->all();
        $row = $this->sections[$key] ?? null;
        return $row ? $row->$field : config("site.sections.$key.$field");
    }

    public function imagePath(string $key): string
    {
        $this->images ??= SiteImage::pluck('path', 'key')->all();
        return $this->images[$key] ?? config("site.images.$key.path");
    }

    public function imageAlt(string $key): string
    {
        $row = SiteImage::where('key', $key)->first();
        return $row->alt ?? config("site.images.$key.alt", '');
    }
}
