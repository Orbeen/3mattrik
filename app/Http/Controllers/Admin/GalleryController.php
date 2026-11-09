<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\GalleryCategory;
use App\Models\GalleryPhoto;
use App\Support\Uploads;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class GalleryController extends Controller
{
    public function index()
    {
        return view('admin.gallery', ['categories' => GalleryCategory::withCount('photos')->orderBy('sort')->orderBy('id')->get()]);
    }

    public function store(Request $r)
    {
        $d = $r->validate(['name' => 'required|string|max:80', 'description' => 'nullable|string|max:160']);
        $slug = Str::slug($d['name']) ?: 'category';
        $base = $slug; $i = 2;
        while (GalleryCategory::where('slug', $slug)->exists()) $slug = $base . '-' . $i++;
        $cat = GalleryCategory::create($d + ['slug' => $slug, 'sort' => (int) GalleryCategory::max('sort') + 1]);
        return redirect()->route('admin.gallery.edit', $cat)->with('ok', 'Category created. Now add photos.');
    }

    public function edit(GalleryCategory $category)
    {
        return view('admin.gallery-edit', ['cat' => $category->load('photos')]);
    }

    public function update(Request $r, GalleryCategory $category)
    {
        $d = $r->validate([
            'name' => 'required|string|max:80',
            'description' => 'nullable|string|max:160',
            'sort' => 'required|integer|min:0',
            'cover' => 'nullable|image|mimes:png,jpg,jpeg,webp|max:8192',
        ]);
        if ($r->hasFile('cover')) {
            Uploads::forget($category->cover_path);
            $category->cover_path = Uploads::save($r->file('cover'), 'gallery', 1600);
        }
        if ($r->boolean('reset_cover')) {
            Uploads::forget($category->cover_path);
            $category->cover_path = null;
        }
        $category->fill([
            'name' => $d['name'], 'description' => $d['description'] ?? '',
            'sort' => $d['sort'], 'is_active' => $r->boolean('is_active'),
        ])->save();
        return back()->with('ok', 'Category saved.');
    }

    public function addPhotos(Request $r, GalleryCategory $category)
    {
        $r->validate(['photos' => 'required|array', 'photos.*' => 'image|mimes:png,jpg,jpeg,webp|max:8192']);
        $sort = (int) $category->photos()->max('sort');
        foreach ($r->file('photos') as $f) {
            $category->photos()->create(['path' => Uploads::save($f, 'gallery', 1800), 'sort' => ++$sort]);
        }
        return back()->with('ok', count($r->file('photos')) . ' photo(s) added.');
    }

    public function deletePhoto(GalleryCategory $category, GalleryPhoto $photo)
    {
        abort_unless($photo->gallery_category_id === $category->id, 404);
        Uploads::forget($photo->path);
        $photo->delete();
        return back()->with('ok', 'Photo deleted.');
    }

    public function destroy(GalleryCategory $category)
    {
        foreach ($category->photos as $p) Uploads::forget($p->path);
        Uploads::forget($category->cover_path);
        $category->delete();
        return redirect()->route('admin.gallery')->with('ok', 'Category deleted.');
    }
}
