<?php

namespace App\Http\Controllers;

use Illuminate\View\View;

class PricingController extends Controller
{
    /**
     * Get pricing tiers and hero section data.
     */
    private function getPricingData(): array
    {
        return [
            'hero' => [
                'badge' => 'Transparent Technical Engagements',
                'title_prefix' => 'Predictable Pricing Built for',
                'title_highlight' => 'Scale and ROI',
                'description' => 'Simple, scope-driven tiers or dedicated sprint engagements with zero hidden fees or licensing markups.',
            ],
            'tiers' => [
                [
                    'badge' => 'Scope Build',
                    'title' => 'MVP / Custom Feature',
                    'description' => 'Ideal for startups needing rapid prototyping, standalone backend services, or complex Livewire/Filament modules.',
                    'price' => '$2,500',
                    'billing_period' => '/ starting flat rate',
                    'is_featured' => false,
                    'badge_color' => 'text-primary',
                    'border_style' => 'border-border/80',
                    'icon_color' => 'text-primary',
                    'button_text' => 'Choose MVP Scope',
                    'button_class' => 'border border-primary text-primary hover:bg-primary/5',
                    'features' => [
                        'Full Laravel / Livewire Core Application',
                        'Filament Admin Panel Dashboard',
                        'Database Schema & Migration Setup',
                        'Standard REST / GraphQL API Contract',
                        '2-3 Weeks Delivery Lifecycle',
                    ],
                ],
                [
                    'badge' => 'Full Architecture',
                    'title' => 'Enterprise Production',
                    'description' => 'End-to-end web applications, custom API pipelines, WebXR/3D components, and containerized deployment setups.',
                    'price' => '$7,500',
                    'billing_period' => '/ complete system',
                    'is_featured' => true,
                    'featured_badge' => 'Most Popular',
                    'badge_color' => 'text-primary',
                    'border_style' => 'border-2 border-primary shadow-xl',
                    'icon_color' => 'text-emerald-600',
                    'button_text' => 'Start Enterprise System',
                    'button_class' => 'bg-primary text-white hover:bg-primary-hover shadow-lg shadow-primary/20',
                    'features' => [
                        'Everything in MVP Tier',
                        'Docker Containerization & CapRover Setup',
                        'Atomic Transactions & Queue Processing',
                        'WebXR / 3D Model Rendering Integration',
                        '30-Day Post-Launch Maintenance',
                    ],
                ],
                [
                    'badge' => 'Continuous Support',
                    'title' => 'DevOps & Retainer',
                    'description' => 'Dedicated ongoing engineering, server health maintenance, performance tuning, and feature iterations.',
                    'price' => '$1,800',
                    'billing_period' => '/ per month',
                    'is_featured' => false,
                    'badge_color' => 'text-accent',
                    'border_style' => 'border-border/80',
                    'icon_color' => 'text-accent',
                    'button_text' => 'Inquire Retainer',
                    'button_class' => 'border border-accent text-accent hover:bg-accent/5',
                    'features' => [
                        'Dedicated Monthly Development Hours',
                        'CapRover Server & Nginx Monitoring',
                        'Sub-Hour Emergency Patch SLAs',
                        'Query Optimizations & Security Updates',
                    ],
                ],
            ],
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