<?php

namespace App\Http\Controllers;

use Illuminate\View\View;

class ProcessController extends Controller
{
    /**
     * Get process, methodology, quality assurance, and code snippet data.
     */
    private function getProcessData(): array
    {
        return [
            'hero' => [
                'badge' => 'Predictable, High-Speed Delivery',
                'title_prefix' => 'How We Engineer',
                'title_highlight' => 'Production-Grade Software',
                'description' => 'Our structured software engineering lifecycle moves your ideas from initial system specs to containerized cloud deployments seamlessly and securely.',
            ],
            'methodology' => [
                'badge' => 'Methodology',
                'title' => 'The 4-Phase Engineering Framework',
                'description' => 'Built to reduce friction, maintain clean code standards, and deliver reliable product milestones on schedule.',
            ],
            'phases' => [
                [
                    'number' => '01',
                    'label' => 'Phase I',
                    'title' => 'Discovery & Specs',
                    'description' => 'System architecture mapping, schema design, relational database planning, and critical tech stack evaluation.',
                    'bg_color' => 'bg-primary',
                    'text_color' => 'text-primary',
                    'shadow_color' => 'shadow-primary/20',
                    'checklist' => [
                        'Database Schema Mapping',
                        'REST / GraphQL Contracts',
                        'Technical Specification Docs',
                    ],
                ],
                [
                    'number' => '02',
                    'label' => 'Phase II',
                    'title' => 'UI & System Prototype',
                    'description' => 'Component design, atomic UI patterns, high-fidelity responsive styling, interactive wireframes, and admin layouts.',
                    'bg_color' => 'bg-accent',
                    'text_color' => 'text-accent',
                    'shadow_color' => 'shadow-accent/20',
                    'checklist' => [
                        'Responsive Tailwind Layouts',
                        'Filament Admin Mockups',
                        'Interactive Wireframing',
                    ],
                ],
                [
                    'number' => '03',
                    'label' => 'Phase III',
                    'title' => 'Development & Integration',
                    'description' => 'Clean backend code, custom API endpoints, atomic database transactions, thorough unit testing, and security checks.',
                    'bg_color' => 'bg-indigo-600',
                    'text_color' => 'text-indigo-600',
                    'shadow_color' => 'shadow-indigo-500/20',
                    'checklist' => [
                        'Modular Laravel / Python Code',
                        'Queue & Task Workers',
                        'Secure API Authentication',
                    ],
                ],
                [
                    'number' => '04',
                    'label' => 'Phase IV',
                    'title' => 'Deployment & Scaling',
                    'description' => 'Docker container orchestration, CapRover production configuration, SSL provisioning, and monitoring setup.',
                    'bg_color' => 'bg-secondary',
                    'text_color' => 'text-secondary',
                    'shadow_color' => 'shadow-secondary/20',
                    'checklist' => [
                        'Docker Image Containerization',
                        'Zero-Downtime Deployment',
                        'Telemetry & Uptime Monitoring',
                    ],
                ],
            ],
            'quality_assurance' => [
                'badge' => 'Quality Assurance',
                'title' => 'Built-in Rigor at Every Layer',
                'description' => "We don't leave performance, security, or reliability to chance. Every build pipeline incorporates automated checks and standards to guarantee stability in production.",
                'features' => [
                    [
                        'title' => 'Atomic Database Transactions',
                        'description' => 'Prevent data corruption with strict database rollback triggers on multi-step API workflows.',
                        'icon' => 'shield-check',
                        'bg_color' => 'bg-emerald-500/10',
                        'icon_color' => 'text-emerald-400',
                    ],
                    [
                        'title' => 'Asynchronous Task Processing',
                        'description' => 'Offload heavy data manipulation, web scraping, and third-party webhooks to Redis queue workers.',
                        'icon' => 'cpu',
                        'bg_color' => 'bg-primary/10',
                        'icon_color' => 'text-primary-light',
                    ],
                    [
                        'title' => 'Strict Security & Rate Limiting',
                        'description' => 'Protects against authorization bypasses, brute force traffic, and common web vulnerabilities.',
                        'icon' => 'lock',
                        'bg_color' => 'bg-accent/10',
                        'icon_color' => 'text-accent',
                    ],
                ],
            ],
            'code_preview' => [
                'filename' => 'DeploymentPipelineTest.php',
                'status' => 'PASSING',
                'class_name' => 'DeploymentPipelineTest',
                'extends_class' => 'TestCase',
                'comment' => '// Ensures all endpoints pass automated verification',
                'method_name' => 'test_system_health_and_db_rollback',
                'endpoint' => '/api/v1/deploy',
                'table' => 'deployments',
                'test_summary' => 'Unit Tests: 100% Passed',
                'coverage' => 'Coverage: 98.4%',
            ],
            'cta' => [
                'title' => 'Ready to Start Phase 01?',
                'description' => "Send over your project requirements or system goals, and we'll prepare a full technical roadmap and implementation scope.",
                'button_text' => 'Initiate Project Specs',
            ],
        ];
    }

    /**
     * Display the process view.
     */
    public function index(): View
    {
        $data = $this->getProcessData();

        return view('pages.process', $data);
    }
}