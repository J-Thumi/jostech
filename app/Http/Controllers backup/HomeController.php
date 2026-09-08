<?php

namespace App\Http\Controllers;

use Illuminate\View\View;

class HomeController extends Controller
{
    /**
     * Display the Home page with telemetry metrics, capabilities, and featured projects.
     */
    public function __invoke(): View
    {
        $homeData = [
            'hero' => [
                'badge' => 'Engineering Enterprise Digital Products',
                'title_prefix' => 'Build Software That',
                'title_highlight' => 'Moves Your Business',
                'title_suffix' => 'Forward.',
                'description' => 'We design and engineer scalable web applications, robust cloud infrastructure, and custom AI integrations tailored for high-growth enterprises and modern digital platforms.',
                'stats' => [
                    ['value' => '99.99%', 'label' => 'Uptime SLA'],
                    ['value' => '10x', 'label' => 'Scale Capacity'],
                    ['value' => '<100ms', 'label' => 'Avg Latency'],
                ],
            ],
            'technologies' => [
                ['name' => 'Next.js 16', 'icon' => 'layers', 'color' => 'text-primary'],
                ['name' => 'Laravel & Filament', 'icon' => 'code-2', 'color' => 'text-rose-500'],
                ['name' => 'Docker', 'icon' => 'container', 'color' => 'text-accent'],
                ['name' => 'Python & Django', 'icon' => 'terminal', 'color' => 'text-emerald-500'],
                ['name' => 'CapRover', 'icon' => 'cloud', 'color' => 'text-amber-500'],
                ['name' => 'AI & LLM Pipelines', 'icon' => 'cpu', 'color' => 'text-indigo-500'],
                ['name' => 'PostgreSQL / MySQL', 'icon' => 'database', 'color' => 'text-blue-600'],
            ],
            'capabilities' => [
                [
                    'title' => 'Custom Web Application Development',
                    'description' => 'Performant, scalable, and secure web systems built with modern frameworks like Laravel, Livewire, and React for high concurrency.',
                    'icon' => 'code',
                    'color' => 'text-primary',
                    'bg_color' => 'bg-primary/10',
                    'features' => ['Modular, clean architecture', 'Custom admin management panels'],
                ],
                [
                    'title' => 'REST & GraphQL API Architecture',
                    'description' => 'Designing fast, securely authenticated RESTful and GraphQL endpoints optimized for low latency and smooth client integrations.',
                    'icon' => 'server',
                    'color' => 'text-accent',
                    'bg_color' => 'bg-accent/10',
                    'features' => ['OAuth2 & JWT Security', 'Microservices & webhook orchestration'],
                ],
                [
                    'title' => 'DevOps & Cloud Infrastructure',
                    'description' => 'Containerizing deployments with Docker and CapRover to streamline automated CI/CD pipelines, SSL provisioning, and monitoring.',
                    'icon' => 'cloud-cog',
                    'color' => 'text-secondary',
                    'bg_color' => 'bg-secondary/10',
                    'features' => ['Zero-downtime deployment setups', 'Redis caching & database indexing'],
                ],
                [
                    'title' => 'AI & Automation Workflows',
                    'description' => 'Integrating machine learning models, natural language processing, and automation engines (like n8n and Python pipelines) into software.',
                    'icon' => 'cpu',
                    'color' => 'text-rose-500',
                    'bg_color' => 'bg-rose-500/10',
                    'features' => ['LLM API integrations', 'Automated scraping & data extraction'],
                ],
                [
                    'title' => '3D & Interactive Web Media',
                    'description' => 'Embedding interactive WebXR, 360-degree virtual tours, and <model-viewer> rendering for rich user engagement.',
                    'icon' => 'box',
                    'color' => 'text-amber-500',
                    'bg_color' => 'bg-amber-500/10',
                    'features' => ['GLB / Three.js 3D model viewer', 'Panoramic spatial visualization'],
                ],
                [
                    'title' => 'System Audits & Optimization',
                    'description' => 'Analyzing existing platforms to resolve performance bottlenecks, fix security vulnerabilities, and rewrite legacy database queries.',
                    'icon' => 'shield-check',
                    'color' => 'text-indigo-500',
                    'bg_color' => 'bg-indigo-500/10',
                    'features' => ['Query optimization & indexing', 'Security & vulnerability patches'],
                ],
            ],
            'process_steps' => [
                [
                    'number' => '1',
                    'title' => 'System Architecture & Design',
                    'description' => 'Detailed database schemas, REST contract definitions, and cloud resource planning.',
                ],
                [
                    'number' => '2',
                    'title' => 'Agile Modular Development',
                    'description' => 'Short sprint iterations with continuous test integration and code reviews.',
                ],
                [
                    'number' => '3',
                    'title' => 'Automated Cloud Deployment',
                    'description' => 'Containerized deployment with zero downtime via Docker and automated health checks.',
                ],
            ],
            'featured_projects' => [
                [
                    'badge' => 'PropTech Platform',
                    'badge_color' => 'bg-primary/20 text-primary-light border-primary/30',
                    'title' => 'CribSearch',
                    'subtitle' => 'Real estate discovery platform featuring 360 virtual tours and automated management panels.',
                    'description' => 'Built with Laravel, Livewire, Filament admin panels, and integrated Pannellum 360-degree panorama viewers to streamline tenant unit exploration.',
                    'icon' => 'building-2',
                    'tags' => ['Laravel', 'Filament', 'Docker', 'MySQL'],
                ],
                [
                    'badge' => 'Supply Chain Blockchain',
                    'badge_color' => 'bg-emerald-500/20 text-emerald-300 border-emerald-500/30',
                    'title' => 'Farm2Fork Protocol',
                    'subtitle' => 'Decentralized traceability protocol for agricultural produce tracking.',
                    'description' => 'Utilized Solidity smart contracts on the Ethereum network, custom GraphQL indexing via The Graph, and IPFS data storage for verifiable provenance.',
                    'icon' => 'git-branch',
                    'tags' => ['Solidity', 'GraphQL', 'IPFS', 'Web3'],
                ],
            ],
            'cta' => [
                'heading' => 'Ready to Build Your Next Software Project?',
                'description' => 'Let’s discuss your platform architecture, technological requirements, and development timeline today.',
                'button_text' => 'Schedule Technical Consultation',
            ],
        ];

        return view('pages.home', compact('homeData'));
    }
}