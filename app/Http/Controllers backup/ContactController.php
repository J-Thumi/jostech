<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\View\View;

class ContactController extends Controller
{
    /**
     * Get dynamic page content.
     */
    private function getPageContent(): array
    {
        return [
            'hero' => [
                'badge' => 'Let’s Build Something Scalable',
                'title_prefix' => 'Ready to Engineer Your Next',
                'title_highlight' => 'Digital Solution?',
                'description' => 'Whether you need a custom web application, automated cloud architecture, or complex API integrations, we deliver production-ready software systems.',
            ],
            'contact_info' => [
                'email' => 'thumijosphat47@gmail.com',
                'response_time' => 'Average response: < 4 hours',
                'turnaround' => '24-48 Hours Proposal',
                'turnaround_detail' => 'Detailed scope break-down and cost estimations',
                'confidentiality' => 'Strict Confidentiality',
                'confidentiality_detail' => 'Mutual NDAs available prior to code/design audits',
            ],
            'terminal' => [
                'status' => 'system.ready',
                'version' => 'v2.4.0',
                'command' => '$ jostech-cli init-project --client="new"',
                'success_msg' => '[SUCCESS] Initializing architectural requirements template...',
                'info_msg' => '[INFO] Ready to ingest API design, database schemas, or cloud migration requests.',
            ],
            'services' => [
                ['key' => 'web-app', 'label' => 'Web Application', 'icon' => 'code', 'color' => 'text-primary'],
                ['key' => 'api', 'label' => 'REST / GraphQL API', 'icon' => 'server', 'color' => 'text-accent'],
                ['key' => 'devops', 'label' => 'DevOps / Cloud', 'icon' => 'cloud', 'color' => 'text-secondary'],
                ['key' => 'ai', 'label' => 'AI Pipelines', 'icon' => 'cpu', 'color' => 'text-rose-500'],
                ['key' => '3d-xr', 'label' => '3D / WebXR', 'icon' => 'box', 'color' => 'text-amber-500'],
                ['key' => 'audit', 'label' => 'System Audit', 'icon' => 'shield-check', 'color' => 'text-indigo-500'],
            ],
            'budget_tiers' => [
                'small' => '< $2,500 (Small Feature / Code Review)',
                'medium' => '$2,500 - $7,500 (MVP / Full Application)',
                'large' => '$7,500 - $15,000+ (Enterprise Platform Architecture)',
            ],
            'faqs' => [
                [
                    'question' => 'What happens after I submit this brief?',
                    'answer' => 'Our lead technical team reviews your scope requirements and prepares an architecture plan, suggested tech stack, and cost breakdown within 24 to 48 hours.',
                ],
                [
                    'question' => 'What technologies do you specialize in?',
                    'answer' => 'We specialize in Laravel/PHP, Livewire, Filament admin panels, Python/Django, Next.js, Docker containerization, and cloud server provisioning on platforms like CapRover.',
                ],
                [
                    'question' => 'Can you work with existing legacy codebases?',
                    'answer' => 'Yes. We perform initial system audits, query optimizations, security patches, and refactoring to modernize older software infrastructure smoothly.',
                ],
                [
                    'question' => 'Do you provide ongoing maintenance?',
                    'answer' => 'We offer long-term DevOps support, server health monitoring, continuous deployment setup, and feature updates following product launches.',
                ],
            ],
        ];
    }

    /**
     * Display the contact form view with dynamic content.
     */
    public function create(): View
    {
        $content = $this->getPageContent();

        return view('pages.contact', $content);
    }

    /**
     * Handle incoming project brief submissions.
     */
    public function store(Request $request): RedirectResponse
    {
        $validated = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'email', 'max:255'],
            'services' => ['required', 'array', 'min:1'],
            'services.*' => ['string', 'in:web-app,api,devops,ai,3d-xr,audit'],
            'budget' => ['nullable', 'string', 'in:small,medium,large'],
            'details' => ['required', 'string', 'min:20', 'max:5000'],
        ], [
            'services.required' => 'Please select at least one project scope or service requirement.',
            'details.min' => 'Please provide a brief overview of at least 20 characters regarding your project requirements.',
        ]);

        Log::info('New Project Brief Submitted', $validated);

        return redirect()->route('contact')
            ->with('success', 'Your project brief has been received! Our lead engineering team will review your requirements and respond within 24-48 hours.');
    }
}