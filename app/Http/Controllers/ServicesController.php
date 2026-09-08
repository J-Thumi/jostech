<?php

namespace App\Http\Controllers;

use App\Models\Capability;
use App\Models\Page;
use App\Models\ServicesMatrixRow;
use Illuminate\View\View;

class ServicesController extends Controller
{
    /**
     * Display the Services page with dynamic capabilities and delivery metrics.
     */
    public function __invoke(): View
    {
        $page = Page::where('key', 'services')->firstOrFail();

        $servicesData = [
            'hero' => [
                'badge' => $page->hero_badge,
                'title_prefix' => $page->hero_title_prefix,
                'title_highlight' => $page->hero_title_highlight,
                'description' => $page->hero_description,
            ],
            'capabilities' => Capability::forPage('services')
                ->with(['features', 'tags'])
                ->get()
                ->map(fn (Capability $capability) => [
                    'title' => $capability->title,
                    'description' => $capability->description,
                    'icon' => $capability->icon,
                    'color' => $capability->color,
                    'bg_color' => $capability->bg_color,
                    'check_color' => $capability->check_color,
                    'tags' => $capability->tags->pluck('tag')->toArray(),
                    'features' => $capability->features->pluck('feature')->toArray(),
                ])
                ->toArray(),
            'matrix' => ServicesMatrixRow::ordered()
                ->get(['area', 'stack', 'deliverables', 'use_case'])
                ->toArray(),
            'cta' => [
                'heading' => $page->cta_heading,
                'description' => $page->cta_description,
                'button_text' => $page->cta_button_text,
            ],
        ];

        return view('pages.services', compact('servicesData'));
    }
}
