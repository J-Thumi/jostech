<?php

namespace App\Http\Controllers;

use App\Models\AboutComparison;
use App\Models\AboutCorePhilosophy;
use App\Models\AboutHighlight;
use App\Models\AboutMetric;
use App\Models\AboutPillar;
use App\Models\Page;
use Illuminate\View\View;

class AboutController extends Controller
{
    /**
     * Display the Why Us / Engineering Excellence page.
     */
    public function __invoke(): View
    {
        $page = Page::where('key', 'about')->firstOrFail();
        $philosophy = AboutCorePhilosophy::first();

        $pageData = [
            'hero' => [
                'badge' => $page->hero_badge,
                'title_prefix' => $page->hero_title_prefix,
                'title_highlight' => $page->hero_title_highlight,
                'description' => $page->hero_description,
            ],
            'core_philosophy' => [
                'tag' => $philosophy?->tag,
                'heading' => $philosophy?->heading,
                'description' => $philosophy?->description,
                'highlights' => AboutHighlight::ordered()
                    ->get(['title', 'description', 'icon', 'color'])
                    ->toArray(),
            ],
            'metrics' => AboutMetric::ordered()
                ->get(['value', 'label', 'detail', 'color'])
                ->toArray(),
            'pillars' => AboutPillar::ordered()
                ->get(['title', 'description', 'stack', 'icon', 'color'])
                ->toArray(),
            'comparisons' => AboutComparison::ordered()
                ->get(['metric', 'traditional', 'jostech'])
                ->toArray(),
            'cta' => [
                'heading' => $page->cta_heading,
                'description' => $page->cta_description,
                'button_text' => $page->cta_button_text,
            ],
        ];

        return view('pages.about', compact('pageData'));
    }
}
