<?php

namespace App\Http\Controllers;

use Illuminate\View\View;

class ServicesController extends Controller
{
    /**
     * Display the Services page with dynamic capabilities and delivery metrics.
     */
    public function __invoke(): View
    {
        $servicesData = [
            'hero' => [
                'badge' => 'End-to-End Technical Capabilities',
                'title_prefix' => 'Architected for Speed,',
                'title_highlight' => 'Scale, and Reliability',
                'description' => 'We turn complex enterprise requirements into modular, low-latency, and containerized digital solutions that scale seamlessly.',
            ],
            'capabilities' => [
                [
                    'title' => 'Full-Stack Web Engineering',
                    'description' => 'High-performance web applications built with Laravel, Livewire, Django, and Next.js. Optimized for low response latency and seamless UI state synchronization.',
                    'icon' => 'globe',
                    'color' => 'text-primary',
                    'bg_color' => 'bg-primary/10',
                    'check_color' => 'text-primary',
                    'tags' => ['Laravel', 'Livewire', 'Django', 'Next.js'],
                    'features' => [
                        'Reactive Single-Page UI Workflows',
                        'Tailored Blade & Tailwind Components',
                    ],
                ],
                [
                    'title' => 'Admin Panels & Backoffices',
                    'description' => 'Rapid construction of internal operations tools, real-time metrics dashboards, and resource management interfaces using Filament PHP.',
                    'icon' => 'layout-dashboard',
                    'color' => 'text-indigo-600',
                    'bg_color' => 'bg-indigo-500/10',
                    'check_color' => 'text-indigo-600',
                    'tags' => ['Filament PHP', 'Livewire', 'RBAC'],
                    'features' => [
                        'Role-Based Access Control & Auditing',
                        'Automated Resource Tables & Exporting',
                    ],
                ],
                [
                    'title' => 'DevOps & Containerization',
                    'description' => 'Production deployment setups leveraging Docker, CapRover PaaS, Nginx reverse proxies, SSL certificate provisioning, and persistent volume handling.',
                    'icon' => 'cloud-cog',
                    'color' => 'text-accent',
                    'bg_color' => 'bg-accent/10',
                    'check_color' => 'text-accent',
                    'tags' => ['Docker', 'CapRover', 'Nginx', 'SSL'],
                    'features' => [
                        'Zero-Downtime Application Deployment',
                        'Container Security & Volume Mapping',
                    ],
                ],
                [
                    'title' => 'API & Database Engineering',
                    'description' => 'Custom RESTful and GraphQL API contracts, atomic database transactions, complex JSON extractions, and performance indexing in MySQL/MariaDB.',
                    'icon' => 'database',
                    'color' => 'text-emerald-600',
                    'bg_color' => 'bg-emerald-500/10',
                    'check_color' => 'text-emerald-600',
                    'tags' => ['MySQL', 'GraphQL', 'REST API', 'Redis'],
                    'features' => [
                        'Atomic Transaction Guarantee',
                        'Sub-10ms Indexing & Query Tuning',
                    ],
                ],
                [
                    'title' => '3D & WebXR Visualizations',
                    'description' => 'Interactive browser-based 3D model rendering (.glb), custom Three.js canvas integrations, and 360-degree virtual tour viewers.',
                    'icon' => 'box',
                    'color' => 'text-amber-600',
                    'bg_color' => 'bg-amber-500/10',
                    'check_color' => 'text-amber-600',
                    'tags' => ['Three.js', 'GLTF / GLB', 'Pannellum'],
                    'features' => [
                        'Mobile-Optimized Model Rendering',
                        'Interactive 360 Panorama Viewers',
                    ],
                ],
                [
                    'title' => 'AI & Pipeline Automation',
                    'description' => 'Python automated document generation, automated web scraping using Selenium, and n8n workflow integrations connecting external APIs.',
                    'icon' => 'bot',
                    'color' => 'text-secondary',
                    'bg_color' => 'bg-secondary/10',
                    'check_color' => 'text-secondary',
                    'tags' => ['Python', 'n8n', 'Selenium', 'FPDF'],
                    'features' => [
                        'Automated Document Parsing & Generation',
                        'Scraping & Event Automation Pipelines',
                    ],
                ],
            ],
            'matrix' => [
                [
                    'area' => 'Core Web App',
                    'stack' => 'Laravel / Livewire / Tailwind',
                    'deliverables' => 'Responsive SaaS web applications, portal platforms',
                    'use_case' => 'High-interaction platforms requiring rapid SSR',
                ],
                [
                    'area' => 'Backoffice Solutions',
                    'stack' => 'Filament PHP / MariaDB',
                    'deliverables' => 'Admin panels, resource CRUD, user permissions',
                    'use_case' => 'Operations monitoring and content management',
                ],
                [
                    'area' => 'Cloud Deployment',
                    'stack' => 'Docker / CapRover / Nginx',
                    'deliverables' => 'Dockerfile, compose setup, SSL, automated deploys',
                    'use_case' => 'Scalable server hosting and containerization',
                ],
                [
                    'area' => 'API Integrations',
                    'stack' => 'REST / GraphQL / Python',
                    'deliverables' => 'Endpoints, webhook handlers, payment gateway sync',
                    'use_case' => 'Interoperable microservices & third-party tools',
                ],
            ],
            'cta' => [
                'heading' => 'Need a Custom Engineering Solution?',
                'description' => "Let's discuss your architectural requirements and design a system built specifically for your application needs.",
                'button_text' => 'Request Technical Consultation',
            ],
        ];

        return view('pages.services', compact('servicesData'));
    }
}