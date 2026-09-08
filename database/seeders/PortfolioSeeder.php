<?php

namespace Database\Seeders;

use App\Models\PortfolioProject;
use Illuminate\Database\Seeder;

class PortfolioSeeder extends Seeder
{
    public function run(): void
    {
        $projects = [
            [
                'title' => 'Farm2Fork Traceability Platform',
                'category' => 'Decentralized Web App',
                'status' => 'Live Demo', 'status_color' => 'text-emerald-400',
                'bg_glow' => 'bg-primary/20 group-hover:bg-primary/40',
                'title_hover' => 'group-hover:text-primary-light',
                'tech_stack' => 'Ethereum Sepolia • IPFS • The Graph • Smart Contracts',
                'description' => 'An end-to-end supply chain tracking solution anchoring produce state logs to immutable smart contracts, complete with IPFS verification for transparent log auditing.',
                'url' => 'https://farm2fork.example.com',
                'external' => true,
            ],
            [
                'title' => 'CribSearch Location Platform',
                'category' => 'Real Estate Discovery',
                'status' => 'Production', 'status_color' => 'text-accent',
                'bg_glow' => 'bg-accent/20 group-hover:bg-accent/40',
                'title_hover' => 'group-hover:text-accent',
                'tech_stack' => 'Laravel • Tailwind CSS • Filament Admin • MySQL',
                'description' => 'A map-first property platform with multi-image gallery processing, secure upload directories, dynamic filter logic, and role-based management dashboards.',
                'url' => 'https://cribsearch.jostech.co.ke',
                'external' => true,
            ],
        ];

        foreach ($projects as $i => $row) {
            PortfolioProject::updateOrCreate(['title' => $row['title']], $row + ['sort_order' => $i]);
        }
    }
}
