<?php

namespace App\Http\Controllers;

use App\Models\Page;
use App\Models\PricingTier;
use Illuminate\View\View;

class PricingController extends Controller
{
    /**
     * Build the pricing tiers and hero section data from the database.
     */
    private function getPricingData(): array
    {
        $page = Page::where('key', 'pricing')->firstOrFail();

        return [
            'hero' => [
                'badge' => $page->hero_badge,
                'title_prefix' => $page->hero_title_prefix,
                'title_highlight' => $page->hero_title_highlight,
                'description' => $page->hero_description,
            ],
            'tiers' => PricingTier::ordered()
                ->with('features')
                ->get()
                ->map(fn (PricingTier $tier) => [
                    'badge' => $tier->badge,
                    'title' => $tier->title,
                    'description' => $tier->description,
                    'price' => $tier->price,
                    'billing_period' => $tier->billing_period,
                    'is_featured' => $tier->is_featured,
                    'featured_badge' => $tier->featured_badge,
                    'badge_color' => $tier->badge_color,
                    'border_style' => $tier->border_style,
                    'icon_color' => $tier->icon_color,
                    'button_text' => $tier->button_text,
                    'button_class' => $tier->button_class,
                    'features' => $tier->features->pluck('feature')->toArray(),
                ])
                ->toArray(),
        ];
    }

    /**
     * Display the pricing page.
     */
    public function index(): View
    {
        $data = $this->getPricingData();

        return view('pages.pricing', $data);
    }
}
