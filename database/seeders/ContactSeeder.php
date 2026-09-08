<?php

namespace Database\Seeders;

use App\Models\ContactBudgetTier;
use App\Models\ContactDetail;
use App\Models\ContactFaq;
use App\Models\ContactService;
use Illuminate\Database\Seeder;

class ContactSeeder extends Seeder
{
    public function run(): void
    {
        ContactDetail::query()->delete();
        ContactDetail::create([
            'email' => 'thumijosphat47@gmail.com',
            'response_time' => 'Average response: < 4 hours',
            'turnaround' => '24-48 Hours Proposal',
            'turnaround_detail' => 'Detailed scope break-down and cost estimations',
            'confidentiality' => 'Strict Confidentiality',
            'confidentiality_detail' => 'Mutual NDAs available prior to code/design audits',
            'terminal_status' => 'system.ready',
            'terminal_version' => 'v2.4.0',
            'terminal_command' => '$ jostech-cli init-project --client="new"',
            'terminal_success_msg' => '[SUCCESS] Initializing architectural requirements template...',
            'terminal_info_msg' => '[INFO] Ready to ingest API design, database schemas, or cloud migration requests.',
        ]);

        foreach ([
            ['key' => 'web-app', 'label' => 'Web Application', 'icon' => 'code', 'color' => 'text-primary'],
            ['key' => 'api', 'label' => 'REST / GraphQL API', 'icon' => 'server', 'color' => 'text-accent'],
            ['key' => 'devops', 'label' => 'DevOps / Cloud', 'icon' => 'cloud', 'color' => 'text-secondary'],
            ['key' => 'ai', 'label' => 'AI Pipelines', 'icon' => 'cpu', 'color' => 'text-rose-500'],
            ['key' => '3d-xr', 'label' => '3D / WebXR', 'icon' => 'box', 'color' => 'text-amber-500'],
            ['key' => 'audit', 'label' => 'System Audit', 'icon' => 'shield-check', 'color' => 'text-indigo-500'],
        ] as $i => $row) {
            ContactService::updateOrCreate(['key' => $row['key']], $row + ['sort_order' => $i]);
        }

        foreach ([
            ['key' => 'small', 'label' => '< $2,500 (Small Feature / Code Review)'],
            ['key' => 'medium', 'label' => '$2,500 - $7,500 (MVP / Full Application)'],
            ['key' => 'large', 'label' => '$7,500 - $15,000+ (Enterprise Platform Architecture)'],
        ] as $i => $row) {
            ContactBudgetTier::updateOrCreate(['key' => $row['key']], $row + ['sort_order' => $i]);
        }

        ContactFaq::query()->delete();
        foreach ([
            ['question' => 'What happens after I submit this brief?', 'answer' => 'Our lead technical team reviews your scope requirements and prepares an architecture plan, suggested tech stack, and cost breakdown within 24 to 48 hours.'],
            ['question' => 'What technologies do you specialize in?', 'answer' => 'We specialize in Laravel/PHP, Livewire, Filament admin panels, Python/Django, Next.js, Docker containerization, and cloud server provisioning on platforms like CapRover.'],
            ['question' => 'Can you work with existing legacy codebases?', 'answer' => 'Yes. We perform initial system audits, query optimizations, security patches, and refactoring to modernize older software infrastructure smoothly.'],
            ['question' => 'Do you provide ongoing maintenance?', 'answer' => 'We offer long-term DevOps support, server health monitoring, continuous deployment setup, and feature updates following product launches.'],
        ] as $i => $row) {
            ContactFaq::create($row + ['sort_order' => $i]);
        }
    }
}
