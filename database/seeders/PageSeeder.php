<?php

namespace Database\Seeders;

use App\Models\Page;
use Illuminate\Database\Seeder;

class PageSeeder extends Seeder
{
    public function run(): void
    {
        Page::updateOrCreate(['key' => 'home'], [
            'hero_badge' => 'Engineering Enterprise Digital Products',
            'hero_title_prefix' => 'Build Software That',
            'hero_title_highlight' => 'Moves Your Business',
            'hero_title_suffix' => 'Forward.',
            'hero_description' => 'We design and engineer scalable web applications, robust cloud infrastructure, and custom AI integrations tailored for high-growth enterprises and modern digital platforms.',
            'cta_heading' => 'Ready to Build Your Next Software Project?',
            'cta_description' => 'Let’s discuss your platform architecture, technological requirements, and development timeline today.',
            'cta_button_text' => 'Schedule Technical Consultation',
        ]);

        Page::updateOrCreate(['key' => 'about'], [
            'hero_badge' => 'Built for Technical Excellence',
            'hero_title_prefix' => 'Engineering Rigor Meets',
            'hero_title_highlight' => 'Modern Product Design',
            'hero_description' => 'We skip generic templates and bloat. Every system crafted by JoSTech is engineered with modularity, maintainability, and enterprise-grade performance in mind.',
            'cta_heading' => 'Engineered to Elevate Your Digital Products',
            'cta_description' => 'Ready to experience clear code standards and fast cloud deployments? Partner with us on your next project.',
            'cta_button_text' => 'Start Your Project',
        ]);

        Page::updateOrCreate(['key' => 'services'], [
            'hero_badge' => 'End-to-End Technical Capabilities',
            'hero_title_prefix' => 'Architected for Speed,',
            'hero_title_highlight' => 'Scale, and Reliability',
            'hero_description' => 'We turn complex enterprise requirements into modular, low-latency, and containerized digital solutions that scale seamlessly.',
            'cta_heading' => 'Need a Custom Engineering Solution?',
            'cta_description' => "Let's discuss your architectural requirements and design a system built specifically for your application needs.",
            'cta_button_text' => 'Request Technical Consultation',
        ]);

        Page::updateOrCreate(['key' => 'pricing'], [
            'hero_badge' => 'Transparent Technical Engagements',
            'hero_title_prefix' => 'Predictable Pricing Built for',
            'hero_title_highlight' => 'Scale and ROI',
            'hero_description' => 'Simple, scope-driven tiers or dedicated sprint engagements with zero hidden fees or licensing markups.',
        ]);

        Page::updateOrCreate(['key' => 'process'], [
            'hero_badge' => 'Predictable, High-Speed Delivery',
            'hero_title_prefix' => 'How We Engineer',
            'hero_title_highlight' => 'Production-Grade Software',
            'hero_description' => 'Our structured software engineering lifecycle moves your ideas from initial system specs to containerized cloud deployments seamlessly and securely.',
            'cta_heading' => 'Ready to Start Phase 01?',
            'cta_description' => "Send over your project requirements or system goals, and we'll prepare a full technical roadmap and implementation scope.",
            'cta_button_text' => 'Initiate Project Specs',
        ]);

        Page::updateOrCreate(['key' => 'contact'], [
            'hero_badge' => 'Let’s Build Something Scalable',
            'hero_title_prefix' => 'Ready to Engineer Your Next',
            'hero_title_highlight' => 'Digital Solution?',
            'hero_description' => 'Whether you need a custom web application, automated cloud architecture, or complex API integrations, we deliver production-ready software systems.',
        ]);

        Page::updateOrCreate(['key' => 'portfolio'], []);
    }
}
