<?php

namespace App\Http\Controllers;

use App\Models\Page;
use App\Models\ProcessCodePreview;
use App\Models\ProcessMethodology;
use App\Models\ProcessPhase;
use App\Models\ProcessQualityAssurance;
use App\Models\ProcessQualityFeature;
use Illuminate\View\View;

class ProcessController extends Controller
{
    /**
     * Build the process, methodology, quality assurance, and code snippet data.
     */
    private function getProcessData(): array
    {
        $page = Page::where('key', 'process')->firstOrFail();
        $methodology = ProcessMethodology::first();
        $qa = ProcessQualityAssurance::first();
        $codePreview = ProcessCodePreview::first();

        return [
            'hero' => [
                'badge' => $page->hero_badge,
                'title_prefix' => $page->hero_title_prefix,
                'title_highlight' => $page->hero_title_highlight,
                'description' => $page->hero_description,
            ],
            'methodology' => [
                'badge' => $methodology?->badge,
                'title' => $methodology?->title,
                'description' => $methodology?->description,
            ],
            'phases' => ProcessPhase::ordered()
                ->with('checklistItems')
                ->get()
                ->map(fn (ProcessPhase $phase) => [
                    'number' => $phase->number,
                    'label' => $phase->label,
                    'title' => $phase->title,
                    'description' => $phase->description,
                    'bg_color' => $phase->bg_color,
                    'text_color' => $phase->text_color,
                    'shadow_color' => $phase->shadow_color,
                    'checklist' => $phase->checklistItems->pluck('item')->toArray(),
                ])
                ->toArray(),
            'quality_assurance' => [
                'badge' => $qa?->badge,
                'title' => $qa?->title,
                'description' => $qa?->description,
                'features' => ProcessQualityFeature::ordered()
                    ->get(['title', 'description', 'icon', 'bg_color', 'icon_color'])
                    ->toArray(),
            ],
            'code_preview' => [
                'filename' => $codePreview?->filename,
                'status' => $codePreview?->status,
                'class_name' => $codePreview?->class_name,
                'extends_class' => $codePreview?->extends_class,
                'comment' => $codePreview?->comment,
                'method_name' => $codePreview?->method_name,
                'endpoint' => $codePreview?->endpoint,
                'table' => $codePreview?->table_name,
                'test_summary' => $codePreview?->test_summary,
                'coverage' => $codePreview?->coverage,
            ],
            'cta' => [
                'title' => $page->cta_heading,
                'description' => $page->cta_description,
                'button_text' => $page->cta_button_text,
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
