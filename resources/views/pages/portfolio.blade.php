@extends('layouts.app')

@section('title', 'Portfolio | Case Studies')

@section('content')
    <section class="py-24 bg-white relative z-10">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex flex-col md:flex-row md:items-end justify-between mb-16 section-title">
                <div>
                    <div class="text-xs font-bold text-primary tracking-widest uppercase mb-3">Selected Work</div>
                    <h2 class="text-3xl sm:text-4xl font-extrabold text-heading tracking-tight">Recent Digital Solutions Built by JoSTech</h2>
                </div>
            </div>

            <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
                @foreach($projects as $project)
                    <div class="group bg-background rounded-2xl border border-border overflow-hidden card-hover-effect flex flex-col justify-between">
                        <div>
                            <div class="p-8 bg-slate-900 text-white relative min-h-[220px] flex flex-col justify-between overflow-hidden">
                                <div class="absolute -right-8 -bottom-8 w-48 h-48 {{ $project['bg_glow'] }} rounded-full blur-2xl transition-colors"></div>
                                <div class="flex justify-between items-start relative z-10">
                                    <span class="text-xs font-mono px-3 py-1 bg-white/10 rounded-full backdrop-blur">{{ $project['category'] }}</span>
                                    <span class="{{ $project['status_color'] }} text-xs font-bold font-mono">{{ $project['status'] }}</span>
                                </div>
                                <div class="relative z-10">
                                    <h3 class="text-2xl font-bold font-heading text-white {{ $project['title_hover'] }} transition-colors">
                                        <a href="{{ $project['url'] }}" @if($project['external']) target="_blank" rel="noopener noreferrer" @endif>
                                            {{ $project['title'] }}
                                        </a>
                                    </h3>
                                    <p class="text-xs text-slate-300 mt-2 font-mono">{{ $project['tech_stack'] }}</p>
                                </div>
                            </div>
                            <div class="p-8">
                                <p class="text-sm text-body leading-relaxed mb-6">{{ $project['description'] }}</p>
                            </div>
                        </div>

                        <div class="px-8 pb-8 pt-0 mt-auto">
                            <a href="{{ $project['url'] }}" 
                                @if($project['external']) target="_blank" rel="noopener noreferrer" @endif
                                class="inline-flex items-center text-xs font-bold text-primary hover:text-primary-hover uppercase tracking-wider gap-2 group/link transition-colors">
                                View Project
                                <i data-lucide="arrow-up-right" class="w-4 h-4 transition-transform group-hover/link:-translate-y-0.5 group-hover/link:translate-x-0.5"></i>
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection