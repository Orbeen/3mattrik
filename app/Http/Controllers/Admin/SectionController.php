<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Section;
use Illuminate\Http\Request;

class SectionController extends Controller
{
    public function edit()
    {
        $rows = Section::all()->keyBy('key');
        return view('admin.sections', ['defs' => config('site.sections'), 'rows' => $rows]);
    }

    public function update(Request $r)
    {
        $r->validate(['s' => 'required|array']);
        foreach (config('site.sections') as $key => $def) {
            $in = $r->input("s.$key");
            if (!is_array($in)) continue;
            Section::updateOrCreate(['key' => $key], [
                'sub' => trim($in['sub'] ?? ''),
                'heading' => trim($in['heading'] ?? ''),
                'para' => $def['para'] === null ? null : trim($in['para'] ?? ''),
            ]);
        }
        return back()->with('ok', 'Section texts saved.');
    }
}
