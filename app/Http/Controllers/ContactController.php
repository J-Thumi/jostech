<?php

namespace App\Http\Controllers;

use App\Models\ContactBudgetTier;
use App\Models\ContactDetail;
use App\Models\ContactFaq;
use App\Models\ContactService;
use App\Models\ContactSubmission;
use App\Models\Page;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class ContactController extends Controller
{
    /**
     * Build the dynamic page content from the database.
     */
    private function getPageContent(): array
    {
        $page = Page::where('key', 'contact')->firstOrFail();
        $details = ContactDetail::first();

        return [
            'hero' => [
                'badge' => $page->hero_badge,
                'title_prefix' => $page->hero_title_prefix,
                'title_highlight' => $page->hero_title_highlight,
                'description' => $page->hero_description,
            ],
            'contact_info' => [
                'email' => $details?->email,
                'response_time' => $details?->response_time,
                'turnaround' => $details?->turnaround,
                'turnaround_detail' => $details?->turnaround_detail,
                'confidentiality' => $details?->confidentiality,
                'confidentiality_detail' => $details?->confidentiality_detail,
            ],
            'terminal' => [
                'status' => $details?->terminal_status,
                'version' => $details?->terminal_version,
                'command' => $details?->terminal_command,
                'success_msg' => $details?->terminal_success_msg,
                'info_msg' => $details?->terminal_info_msg,
            ],
            'services' => ContactService::ordered()
                ->get(['key', 'label', 'icon', 'color'])
                ->toArray(),
            'budget_tiers' => ContactBudgetTier::ordered()
                ->get()
                ->pluck('label', 'key')
                ->toArray(),
            'faqs' => ContactFaq::ordered()
                ->get(['question', 'answer'])
                ->toArray(),
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

        ContactSubmission::create($validated);

        return redirect()->route('contact')
            ->with('success', 'Your project brief has been received! Our lead engineering team will review your requirements and respond within 24-48 hours.');
    }
}
