<?php

namespace App\Http\Controllers;

use App\Models\GalleryCategory;

class PageController extends Controller
{
    public function home()
    {
        $categories = GalleryCategory::with('photos')->where('is_active', true)->orderBy('sort')->orderBy('id')->get();

        $galleries = [];
        foreach ($categories as $c) {
            $galleries[$c->slug] = [
                'title' => $c->name,
                'photos' => $c->photos->map(fn ($p) => asset($p->path))->values(),
            ];
        }

        $rates = config('calculator.rates');
        $structPct = array_sum(array_column(config('calculator.groups')[0]['items'], 1));

        return view('home', [
            'categories' => $categories,
            'structPct' => $structPct,
            'siteJs' => [
                'galleries' => $galleries,
                'calc' => ['rates' => $rates, 'fallback' => config('calculator.default_rate'), 'structPct' => $structPct],
            ],
        ]);
    }
}
