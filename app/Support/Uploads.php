<?php

namespace App\Support;

use Illuminate\Http\UploadedFile;
use Illuminate\Support\Str;

/** Saves uploads straight into public/uploads (no storage:link needed on shared hosting). */
class Uploads
{
    /** Resize + convert to WebP when possible; $keepOriginal skips this (used for logos). */
    public static function save(UploadedFile $file, string $dir, int $maxWidth = 2000, bool $keepOriginal = false): string
    {
        $folder = public_path("uploads/$dir");
        if (!is_dir($folder)) {
            mkdir($folder, 0755, true);
        }
        $base = Str::random(12);

        if (!$keepOriginal && function_exists('imagewebp')) {
            $img = self::load($file);
            if ($img) {
                $w = imagesx($img);
                if ($w > $maxWidth) {
                    $img = imagescale($img, $maxWidth);
                }
                imagepalettetotruecolor($img);
                imagealphablending($img, true);
                imagesavealpha($img, true);
                $name = "$base.webp";
                imagewebp($img, "$folder/$name", 82);
                imagedestroy($img);
                return "uploads/$dir/$name";
            }
        }

        $ext = strtolower($file->getClientOriginalExtension() ?: 'png');
        $name = "$base.$ext";
        $file->move($folder, $name);
        return "uploads/$dir/$name";
    }

    private static function load(UploadedFile $file)
    {
        $data = @file_get_contents($file->getRealPath());
        return $data === false ? null : (@imagecreatefromstring($data) ?: null);
    }

    /** Delete a file only if it was uploaded through the admin (never the bundled defaults). */
    public static function forget(?string $path): void
    {
        if ($path && str_starts_with($path, 'uploads/')) {
            @unlink(public_path($path));
        }
    }
}
