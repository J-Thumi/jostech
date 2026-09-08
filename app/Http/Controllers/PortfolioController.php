<?php

namespace App\Http\Controllers;

use App\Models\PortfolioProject;
use Illuminate\View\View;

class PortfolioController extends Controller
{
    /**
     * Display the portfolio view.
     */
    public function index(): View
    {
        $projects = PortfolioProject::ordered()->get([
            'title', 'category', 'status', 'status_color', 'bg_glow',
            'title_hover', 'tech_stack', 'description', 'url', 'external',
        ])->toArray();

        return view('pages.portfolio', compact('projects'));
    }
}
