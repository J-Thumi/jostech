<?php

namespace Database\Seeders;

use App\Models\PricingTier;
use Illuminate\Database\Seeder;

class PricingSeeder extends Seeder
{
    public function run(): void
    {
        $tiers = [
            [
                'badge' => 'Scope Build', 'title' => 'MVP / Custom Feature',
                'description' => 'Ideal for startups needing rapid prototyping, standalone backend services, or complex Livewire/Filament modules.',
                'price' => '$2,500', 'billing_period' => '/ starting flat rate',
                'is_featured' => false, 'featured_badge' => null,
                'badge_color' => 'text-primary', 'border_style' => 'border-border/80', 'icon_color' => 'text-primary',
                'button_text' => 'Choose MVP Scope', 'button_class' => 'border border-primary text-primary hover:bg-primary/5',
                'features' => [
                    'Full Laravel / Livewire Core Application',
                    'Filament Admin Panel Dashboard',
                    'Database Schema & Migration Setup',
                    'Standard REST / GraphQL API Contract',
                    '2-3 Weeks Delivery Lifecycle',
                ],
            ],
            [
                'badge' => 'Full Architecture', 'title' => 'Enterprise Production',
                'description' => 'End-to-end web applications, custom API pipelines, WebXR/3D components, and containerized deployment setups.',
                'price' => '$7,500', 'billing_period' => '/ complete system',
                'is_featured' => true, 'featured_badge' => 'Most Popular',
                'badge_color' => 'text-primary', 'border_style' => 'border-2 border-primary shadow-xl', 'icon_color' => 'text-emerald-600',
                'button_text' => 'Start Enterprise System', 'button_class' => 'bg-primary text-white hover:bg-primary-hover shadow-lg shadow-primary/20',
                'features' => [
                    'Everything in MVP Tier',
                    'Docker Containerization & CapRover Setup',
                    'Atomic Transactions & Queue Processing',
                    'WebXR / 3D Model Rendering Integration',
                    '30-Day Post-Launch Maintenance',
                ],
            ],
            [
                'badge' => 'Continuous Support', 'title' => 'DevOps & Retainer',
                'description' => 'Dedicated ongoing engineering, server health maintenance, performance tuning, and feature iterations.',
                'price' => '$1,800', 'billing_period' => '/ per month',
                'is_featured' => false, 'featured_badge' => null,
                'badge_color' => 'text-accent', 'border_style' => 'border-border/80', 'icon_color' => 'text-accent',
                'button_text' => 'Inquire Retainer', 'button_class' => 'border border-accent text-accent hover:bg-accent/5',
                'features' => [
                    'Dedicated Monthly Development Hours',
                    'CapRover Server & Nginx Monitoring',
                    'Sub-Hour Emergency Patch SLAs',
                    'Query Optimizations & Security Updates',
                ],
            ],
        ];

        foreach ($tiers as $i => $row) {
            $features = $row['features'];
            unset($row['features']);
            $tier = PricingTier::updateOrCreate(['title' => $row['title']], $row + ['sort_order' => $i]);
            $tier->features()->delete();
            foreach ($features as $fi => $feature) {
                $tier->features()->create(['feature' => $feature, 'sort_order' => $fi]);
            }
        }
    }
}
