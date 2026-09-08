@extends('layouts.app')

@section('title', 'Why Us | Engineering Excellence & Technical Rigor')

@section('content')
    <!-- Hero Section -->
    <section class="relative z-10 pt-12 pb-16 lg:pt-16 lg:pb-20 overflow-hidden">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <div class="inline-flex items-center gap-2 px-3.5 py-1.5 rounded-full bg-primary-light/60 border border-primary/20 text-primary text-xs sm:text-sm font-semibold mb-6">
                <span class="flex h-2 w-2 rounded-full bg-primary animate-ping"></span>
                <span class="flex h-2 w-2 rounded-full bg-primary -ml-4"></span>
                {{ $pageData['hero']['badge'] }}
            </div>

            <h1 class="text-4xl sm:text-5xl lg:text-6xl font-extrabold text-heading tracking-tight leading-[1.15] mb-6 max-w-4xl mx-auto">
                {{ $pageData['hero']['title_prefix'] }} <br class="hidden sm:inline"/>
                <span class="text-transparent bg-clip-text bg-gradient-to-r from-primary via-accent to-secondary">
                    {{ $pageData['hero']['title_highlight'] }}
                </span>
            </h1>

            <p class="text-lg sm:text-xl text-body font-normal leading-relaxed mb-8 max-w-2xl mx-auto">
                {{ $pageData['hero']['description'] }}
            </p>
        </div>
    </section>

    <!-- Core Overview & Metrics Panel -->
    <section class="pb-20 bg-white relative z-10">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-center">
                
                <!-- Left: Content & Core Philosophy -->
                <div class="lg:col-span-6 space-y-6">
                    <div class="text-xs font-bold text-primary tracking-widest uppercase">{{ $pageData['core_philosophy']['tag'] }}</div>
                    <h2 class="text-3xl sm:text-4xl font-extrabold text-heading tracking-tight">
                        {{ $pageData['core_philosophy']['heading'] }}
                    </h2>
                    <p class="text-body leading-relaxed text-sm">
                        {{ $pageData['core_philosophy']['description'] }}
                    </p>

                    <div class="space-y-3 pt-2">
                        @foreach($pageData['core_philosophy']['highlights'] as $highlight)
                            <div class="flex items-start gap-3">
                                <div class="w-6 h-6 rounded-full bg-{{ $highlight['color'] }}/10 text-{{ $highlight['color'] }} flex items-center justify-center shrink-0 mt-0.5">
                                    <i data-lucide="{{ $highlight['icon'] }}" class="w-4 h-4"></i>
                                </div>
                                <div>
                                    <h4 class="text-sm font-bold text-heading">{{ $highlight['title'] }}</h4>
                                    <p class="text-xs text-muted mt-0.5">{{ $highlight['description'] }}</p>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>

                <!-- Right: Stats Grid -->
                <div class="lg:col-span-6">
                    <div class="glass-panel p-8 rounded-3xl border border-border shadow-xl grid grid-cols-2 gap-6 bg-gradient-to-br from-white via-background to-primary-light/10">
                        @foreach($pageData['metrics'] as $metric)
                            <div class="p-6 bg-white rounded-2xl border border-border/60 shadow-sm hover:shadow-md transition-shadow">
                                <div class="text-3xl sm:text-4xl font-extrabold {{ $metric['color'] }} font-heading">{{ $metric['value'] }}</div>
                                <div class="text-xs font-bold text-heading mt-2">{{ $metric['label'] }}</div>
                                <div class="text-[11px] text-muted mt-1">{{ $metric['detail'] }}</div>
                            </div>
                        @endforeach
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- Architectural Pillars Section -->
    <section class="py-20 bg-background relative z-10 border-t border-border/60">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center max-w-3xl mx-auto mb-16">
                <div class="text-xs font-bold text-primary tracking-widest uppercase mb-3">Differentiators</div>
                <h2 class="text-3xl sm:text-4xl font-extrabold text-heading tracking-tight mb-4">The Engineering Standards We Live By</h2>
                <p class="text-base text-body">Our software systems are crafted using key pillars designed to guarantee long-term stability and maintainability.</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                @foreach($pageData['pillars'] as $pillar)
                    <div class="bg-white p-8 rounded-2xl border border-border/80 shadow-sm hover:shadow-md transition-all">
                        <div class="w-12 h-12 rounded-xl bg-{{ $pillar['color'] }}/10 text-{{ $pillar['color'] }} flex items-center justify-center mb-6">
                            <i data-lucide="{{ $pillar['icon'] }}" class="w-6 h-6"></i>
                        </div>
                        <h3 class="text-lg font-bold text-heading mb-3">{{ $pillar['title'] }}</h3>
                        <p class="text-xs text-body leading-relaxed mb-4">
                            {{ $pillar['description'] }}
                        </p>
                        <span class="text-[11px] font-mono text-{{ $pillar['color'] }} font-semibold">{{ $pillar['stack'] }}</span>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Comparison Table Section -->
    <section class="py-16 bg-slate-900 text-white relative z-10">
        <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center max-w-3xl mx-auto mb-12">
                <h2 class="text-xs font-semibold text-accent uppercase tracking-wider mb-2">The Standard Difference</h2>
                <h3 class="text-2xl sm:text-3xl font-extrabold tracking-tight">How JoSTech Compares</h3>
            </div>

            <div class="overflow-x-auto">
                <table class="w-full text-left text-xs border-collapse">
                    <thead>
                        <tr class="border-b border-slate-800 text-slate-400 uppercase tracking-wider">
                            <th class="py-4 px-4 font-semibold">Engineering Metric</th>
                            <th class="py-4 px-4 font-semibold text-slate-400">Traditional Agency</th>
                            <th class="py-4 px-4 font-semibold text-accent">JoSTech Engineering</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-slate-800/80 text-slate-300">
                        @foreach($pageData['comparisons'] as $row)
                            <tr>
                                <td class="py-4 px-4 font-bold text-white">{{ $row['metric'] }}</td>
                                <td class="py-4 px-4 text-slate-400">{{ $row['traditional'] }}</td>
                                <td class="py-4 px-4 text-emerald-400 font-semibold">{{ $row['jostech'] }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </section>

    <!-- Call to Action Banner -->
    <section class="py-20 relative z-10">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="bg-gradient-to-r from-primary via-primary-dark to-slate-900 rounded-3xl p-10 sm:p-16 text-center text-white shadow-2xl relative overflow-hidden">
                <div class="max-w-3xl mx-auto relative z-10 space-y-6">
                    <h2 class="text-3xl sm:text-4xl font-extrabold tracking-tight">
                        {{ $pageData['cta']['heading'] }}
                    </h2>
                    <p class="text-blue-100 text-base sm:text-lg">
                        {{ $pageData['cta']['description'] }}
                    </p>
                    <div class="pt-4 flex justify-center">
                        <a href="{{ route('contact') }}" class="inline-flex items-center justify-center text-base font-semibold text-heading bg-white hover:bg-slate-100 px-8 py-4 rounded-xl transition-all shadow-lg hover:shadow-xl">
                            {{ $pageData['cta']['button_text'] }}
                            <i data-lucide="arrow-right" class="w-5 h-5 ml-2 text-primary"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection