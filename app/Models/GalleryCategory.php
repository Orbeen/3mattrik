<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class GalleryCategory extends Model
{
    protected $guarded = [];
    protected $casts = ['is_active' => 'boolean'];

    public function photos()
    {
        return $this->hasMany(GalleryPhoto::class)->orderBy('sort')->orderBy('id');
    }

    /** Card image: chosen cover, otherwise the first photo. */
    public function coverPath(): ?string
    {
        return $this->cover_path ?: $this->photos->first()?->path;
    }
}
