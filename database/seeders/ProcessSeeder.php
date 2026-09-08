<?php

namespace Database\Seeders;

use App\Models\ProcessCodePreview;
use App\Models\ProcessMethodology;
use App\Models\ProcessPhase;
use App\Models\ProcessQualityAssurance;
use App\Models\ProcessQualityFeature;
use Illuminate\Database\Seeder;

class ProcessSeeder extends Seeder
{
    public function run(): void
    {
        ProcessMethodology::query()->delete();
        ProcessMethodology::create([
            'badge' => 'Methodology',
            'title' => 'The 4-Phase Engineering Framework',
            'description' => 'Built to reduce friction, maintain clean code standards, and deliver reliable product milestones on schedule.',
        ]);

        ProcessPhase::query()->delete();
        $phases = [
            [
                'number' => '01', 'label' => 'Phase I', 'title' => 'Discovery & Specs',
                'description' => 'System architecture mapping, schema design, relational database planning, and critical tech stack evaluation.',
                'bg_color' => 'bg-primary', 'text_color' => 'text-primary', 'shadow_color' => 'shadow-primary/20',
                'checklist' => ['Database Schema Mapping', 'REST / GraphQL Contracts', 'Technical Specification Docs'],
            ],
            [
                'number' => '02', 'label' => 'Phase II', 'title' => 'UI & System Prototype',
                'description' => 'Component design, atomic UI patterns, high-fidelity responsive styling, interactive wireframes, and admin layouts.',
                'bg_color' => 'bg-accent', 'text_color' => 'text-accent', 'shadow_color' => 'shadow-accent/20',
                'checklist' => ['Responsive Tailwind Layouts', 'Filament Admin Mockups', 'Interactive Wireframing'],
            ],
            [
                'number' => '03', 'label' => 'Phase III', 'title' => 'Development & Integration',
                'description' => 'Clean backend code, custom API endpoints, atomic database transactions, thorough unit testing, and security checks.',
                'bg_color' => 'bg-indigo-600', 'text_color' => 'text-indigo-600', 'shadow_color' => 'shadow-indigo-500/20',
                'checklist' => ['Modular Laravel / Python Code', 'Queue & Task Workers', 'Secure API Authentication'],
            ],
            [
                'number' => '04', 'label' => 'Phase IV', 'title' => 'Deployment & Scaling',
                'description' => 'Docker container orchestration, CapRover production configuration, SSL provisioning, and monitoring setup.',
                'bg_color' => 'bg-secondary', 'text_color' => 'text-secondary', 'shadow_color' => 'shadow-secondary/20',
                'checklist' => ['Docker Image Containerization', 'Zero-Downtime Deployment', 'Telemetry & Uptime Monitoring'],
            ],
        ];

        foreach ($phases as $i => $row) {
            $checklist = $row['checklist'];
            unset($row['checklist']);
            $phase = ProcessPhase::create($row + ['sort_order' => $i]);
            foreach ($checklist as $ci => $item) {
                $phase->checklistItems()->create(['item' => $item, 'sort_order' => $ci]);
            }
        }

        ProcessQualityAssurance::query()->delete();
        ProcessQualityAssurance::create([
            'badge' => 'Quality Assurance',
            'title' => 'Built-in Rigor at Every Layer',
            'description' => "We don't leave performance, security, or reliability to chance. Every build pipeline incorporates automated checks and standards to guarantee stability in production.",
        ]);

        ProcessQualityFeature::query()->delete();
        foreach ([
            ['title' => 'Atomic Database Transactions', 'description' => 'Prevent data corruption with strict database rollback triggers on multi-step API workflows.', 'icon' => 'shield-check', 'bg_color' => 'bg-emerald-500/10', 'icon_color' => 'text-emerald-400'],
            ['title' => 'Asynchronous Task Processing', 'description' => 'Offload heavy data manipulation, web scraping, and third-party webhooks to Redis queue workers.', 'icon' => 'cpu', 'bg_color' => 'bg-primary/10', 'icon_color' => 'text-primary-light'],
            ['title' => 'Strict Security & Rate Limiting', 'description' => 'Protects against authorization bypasses, brute force traffic, and common web vulnerabilities.', 'icon' => 'lock', 'bg_color' => 'bg-accent/10', 'icon_color' => 'text-accent'],
        ] as $i => $row) {
            ProcessQualityFeature::create($row + ['sort_order' => $i]);
        }

        ProcessCodePreview::query()->delete();
        ProcessCodePreview::create([
            'filename' => 'DeploymentPipelineTest.php',
            'status' => 'PASSING',
            'class_name' => 'DeploymentPipelineTest',
            'extends_class' => 'TestCase',
            'comment' => '// Ensures all endpoints pass automated verification',
            'method_name' => 'test_system_health_and_db_rollback',
            'endpoint' => '/api/v1/deploy',
            'table_name' => 'deployments',
            'test_summary' => 'Unit Tests: 100% Passed',
            'coverage' => 'Coverage: 98.4%',
        ]);
    }
}
