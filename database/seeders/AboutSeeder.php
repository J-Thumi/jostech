<?php

namespace Database\Seeders;

use App\Models\AboutComparison;
use App\Models\AboutCorePhilosophy;
use App\Models\AboutHighlight;
use App\Models\AboutMetric;
use App\Models\AboutPillar;
use Illuminate\Database\Seeder;

class AboutSeeder extends Seeder
{
    public function run(): void
    {
        AboutCorePhilosophy::query()->delete();
        $philosophy = AboutCorePhilosophy::create([
            'tag' => 'Why Partner With Us',
            'heading' => 'Architecture First, No Bloat',
            'description' => 'Modern applications fail not because of missing features, but because of poor technical foundation. We focus on low-latency queries, atomic database transactions, isolated Docker containers, and clean, fully-typed codebases.',
        ]);

        AboutHighlight::query()->delete();
        foreach ([
            ['title' => 'Production-Ready Containers', 'description' => 'Pre-configured Docker containerization and CapRover setups for immediate cloud deployment.', 'icon' => 'check', 'color' => 'primary'],
            ['title' => 'Relational & API Precision', 'description' => 'Optimized database schemas, JSON extractions, and REST/GraphQL API integration contracts.', 'icon' => 'check', 'color' => 'accent'],
            ['title' => 'Full Technical Transparency', 'description' => 'Direct communication with lead backend developers without intermediary account management fluff.', 'icon' => 'check', 'color' => 'secondary'],
        ] as $i => $row) {
            AboutHighlight::create($row + ['sort_order' => $i]);
        }

        AboutMetric::query()->delete();
        foreach ([
            ['value' => '100%', 'label' => 'Clean Code & Docs', 'detail' => 'Modular architecture & full inline documentation.', 'color' => 'text-primary'],
            ['value' => 'CapRover', 'label' => 'Production Cloud Ready', 'detail' => 'Automated SSL, Nginx routing, and volume management.', 'color' => 'text-accent'],
            ['value' => '< 50ms', 'label' => 'Target API Latency', 'detail' => 'Database query tuning and Redis caching strategy.', 'color' => 'text-emerald-600'],
            ['value' => '0%', 'label' => 'Framework Lock-in', 'detail' => 'Standardized stacks built on Laravel, Python, and React.', 'color' => 'text-indigo-600'],
        ] as $i => $row) {
            AboutMetric::create($row + ['sort_order' => $i]);
        }

        AboutPillar::query()->delete();
        foreach ([
            ['title' => 'Modular Component Design', 'description' => 'We separate frontend components, API contracts, and database logic strictly. This ensures easy updates without risk of regression across your application.', 'stack' => 'Blade • Livewire • Tailwind', 'icon' => 'layers', 'color' => 'primary'],
            ['title' => 'Defensive System Security', 'description' => 'From SQL injection protection to rate-limited API routes and robust role-based access control (RBAC), security is integrated at the code level.', 'stack' => 'Sanctum • Auth Gates • SSL', 'icon' => 'shield-alert', 'color' => 'accent'],
            ['title' => 'Automated DevOps Pipelines', 'description' => 'Containerized builds mean your application runs identically in staging and production, eliminating environment mismatches and deployment downtime.', 'stack' => 'Docker • CapRover • Nginx', 'icon' => 'server', 'color' => 'secondary'],
        ] as $i => $row) {
            AboutPillar::create($row + ['sort_order' => $i]);
        }

        AboutComparison::query()->delete();
        foreach ([
            ['metric' => 'System Architecture', 'traditional' => 'Monolithic templates & page builders', 'jostech' => 'Custom Laravel / Python / WebXR / Docker'],
            ['metric' => 'Deployment Setup', 'traditional' => 'Shared hosting FTP upload', 'jostech' => 'Dockerized CapRover continuous delivery'],
            ['metric' => 'Database Strategy', 'traditional' => 'Unindexed queries & raw scripts', 'jostech' => 'Indexed schemas & atomic transactions'],
            ['metric' => 'Code Handover', 'traditional' => 'Undocumented, obfuscated source code', 'jostech' => '100% clean repository with spec docs'],
        ] as $i => $row) {
            AboutComparison::create($row + ['sort_order' => $i]);
        }
    }
}
