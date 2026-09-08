<?php

namespace App\Http\Controllers;

use Illuminate\View\View;

class AboutController extends Controller
{
    /**
     * Display the Why Us / Engineering Excellence page.
     */
    public function __invoke(): View
    {
        // Static array structure ready to be swapped with database models later
        $pageData = [
            'hero' => [
                'badge' => 'Built for Technical Excellence',
                'title_prefix' => 'Engineering Rigor Meets',
                'title_highlight' => 'Modern Product Design',
                'description' => 'We skip generic templates and bloat. Every system crafted by JoSTech is engineered with modularity, maintainability, and enterprise-grade performance in mind.',
            ],
            'core_philosophy' => [
                'tag' => 'Why Partner With Us',
                'heading' => 'Architecture First, No Bloat',
                'description' => 'Modern applications fail not because of missing features, but because of poor technical foundation. We focus on low-latency queries, atomic database transactions, isolated Docker containers, and clean, fully-typed codebases.',
                'highlights' => [
                    [
                        'title' => 'Production-Ready Containers',
                        'description' => 'Pre-configured Docker containerization and CapRover setups for immediate cloud deployment.',
                        'icon' => 'check',
                        'color' => 'primary',
                    ],
                    [
                        'title' => 'Relational & API Precision',
                        'description' => 'Optimized database schemas, JSON extractions, and REST/GraphQL API integration contracts.',
                        'icon' => 'check',
                        'color' => 'accent',
                    ],
                    [
                        'title' => 'Full Technical Transparency',
                        'description' => 'Direct communication with lead backend developers without intermediary account management fluff.',
                        'icon' => 'check',
                        'color' => 'secondary',
                    ],
                ],
            ],
            'metrics' => [
                [
                    'value' => '100%',
                    'label' => 'Clean Code & Docs',
                    'detail' => 'Modular architecture & full inline documentation.',
                    'color' => 'text-primary',
                ],
                [
                    'value' => 'CapRover',
                    'label' => 'Production Cloud Ready',
                    'detail' => 'Automated SSL, Nginx routing, and volume management.',
                    'color' => 'text-accent',
                ],
                [
                    'value' => '< 50ms',
                    'label' => 'Target API Latency',
                    'detail' => 'Database query tuning and Redis caching strategy.',
                    'color' => 'text-emerald-600',
                ],
                [
                    'value' => '0%',
                    'label' => 'Framework Lock-in',
                    'detail' => 'Standardized stacks built on Laravel, Python, and React.',
                    'color' => 'text-indigo-600',
                ],
            ],
            'pillars' => [
                [
                    'title' => 'Modular Component Design',
                    'description' => 'We separate frontend components, API contracts, and database logic strictly. This ensures easy updates without risk of regression across your application.',
                    'stack' => 'Blade • Livewire • Tailwind',
                    'icon' => 'layers',
                    'color' => 'primary',
                ],
                [
                    'title' => 'Defensive System Security',
                    'description' => 'From SQL injection protection to rate-limited API routes and robust role-based access control (RBAC), security is integrated at the code level.',
                    'stack' => 'Sanctum • Auth Gates • SSL',
                    'icon' => 'shield-alert',
                    'color' => 'accent',
                ],
                [
                    'title' => 'Automated DevOps Pipelines',
                    'description' => 'Containerized builds mean your application runs identically in staging and production, eliminating environment mismatches and deployment downtime.',
                    'stack' => 'Docker • CapRover • Nginx',
                    'icon' => 'server',
                    'color' => 'secondary',
                ],
            ],
            'comparisons' => [
                [
                    'metric' => 'System Architecture',
                    'traditional' => 'Monolithic templates & page builders',
                    'jostech' => 'Custom Laravel / Python / WebXR / Docker',
                ],
                [
                    'metric' => 'Deployment Setup',
                    'traditional' => 'Shared hosting FTP upload',
                    'jostech' => 'Dockerized CapRover continuous delivery',
                ],
                [
                    'metric' => 'Database Strategy',
                    'traditional' => 'Unindexed queries & raw scripts',
                    'jostech' => 'Indexed schemas & atomic transactions',
                ],
                [
                    'metric' => 'Code Handover',
                    'traditional' => 'Undocumented, obfuscated source code',
                    'jostech' => '100% clean repository with spec docs',
                ],
            ],
            'cta' => [
                'heading' => 'Engineered to Elevate Your Digital Products',
                'description' => 'Ready to experience clear code standards and fast cloud deployments? Partner with us on your next project.',
                'button_text' => 'Start Your Project',
            ],
        ];

        return view('pages.about', compact('pageData'));
    }
}