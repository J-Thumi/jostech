<?php

namespace App\Http\Controllers;

use App\Models\Capability;
use App\Models\HomeFeaturedProject;
use App\Models\HomeHeroStat;
use App\Models\HomeProcessStep;
use App\Models\Page;
use App\Models\Technology;
use Illuminate\View\View;

class HomeController extends Controller
{
    /**
     * Display the Home page with telemetry metrics, capabilities, and featured projects.
     */
    public function __invoke(): View
    {
        $page = Page::where('key', 'home')->firstOrFail();

        $homeData = [
            'hero' => [
                'badge' => $page->hero_badge,
                'title_prefix' => $page->hero_title_prefix,
                'title_highlight' => $page->hero_title_highlight,
                'title_suffix' => $page->hero_title_suffix,
                'description' => $page->hero_description,
                'stats' => HomeHeroStat::ordered()
                    ->get(['value', 'label'])
                    ->toArray(),
            ],
            'technologies' => Technology::ordered()
                ->get(['name', 'icon', 'color'])
                ->toArray(),
            'capabilities' => Capability::forPage('home')
                ->with(['features:id,capability_id,feature,sort_order'])
                ->get()
                ->map(fn (Capability $capability) => [
                    'title' => $capability->title,
                    'description' => $capability->description,
                    'icon' => $capability->icon,
                    'color' => $capability->color,
                    'bg_color' => $capability->bg_color,
                    'features' => $capability->features->pluck('feature')->toArray(),
                ])
                ->toArray(),
            'process_steps' => HomeProcessStep::ordered()
                ->get(['number', 'title', 'description'])
                ->toArray(),
            'featured_projects' => HomeFeaturedProject::ordered()
                ->with('tags')
                ->get()
                ->map(fn (HomeFeaturedProject $project) => [
                    'badge' => $project->badge,
                    'badge_color' => $project->badge_color,
                    'title' => $project->title,
                    'subtitle' => $project->subtitle,
                    'description' => $project->description,
                    'icon' => $project->icon,
                    'tags' => $project->tags->pluck('tag')->toArray(),
                ])
                ->toArray(),
            'cta' => [
                'heading' => $page->cta_heading,
                'description' => $page->cta_description,
                'button_text' => $page->cta_button_text,
            ],
        ];

        return view('pages.home', compact('homeData'));
    }
}
