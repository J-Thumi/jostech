@extends('layouts.app')

@section('title', 'JoSTech | Enterprise Software Engineering & Cloud Solutions')

@section('content')
    <!-- Hero Section -->
    <section class="relative z-10 pt-12 pb-20 lg:pt-20 lg:pb-32 overflow-hidden">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 lg:gap-8 items-center">
                
                <div class="lg:col-span-7 flex flex-col items-start hero-text-container">
                    <div class="inline-flex items-center gap-2 px-3.5 py-1.5 rounded-full bg-primary-light/60 border border-primary/20 text-primary text-xs sm:text-sm font-semibold mb-6">
                        <span class="flex h-2 w-2 rounded-full bg-primary animate-ping"></span>
                        <span class="flex h-2 w-2 rounded-full bg-primary -ml-4"></span>
                        {{ $homeData['hero']['badge'] }}
                    </div>

                    <h1 class="text-4xl sm:text-5xl lg:text-6xl font-extrabold text-heading tracking-tight leading-[1.15] mb-6">
                        {{ $homeData['hero']['title_prefix'] }} <br class="hidden sm:inline"/>
                        <span class="text-transparent bg-clip-text bg-gradient-to-r from-primary via-accent to-secondary">
                            {{ $homeData['hero']['title_highlight'] }}
                        </span> {{ $homeData['hero']['title_suffix'] }}
                    </h1>

                    <p class="text-lg sm:text-xl text-body font-normal leading-relaxed mb-8 max-w-2xl">
                        {{ $homeData['hero']['description'] }}
                    </p>

                    <div class="flex flex-col sm:flex-row items-stretch sm:items-center gap-4 w-full sm:w-auto mb-12">
                        <a href="{{ route('contact') }}" class="inline-flex items-center justify-center text-base font-semibold text-white bg-primary hover:bg-primary-hover px-8 py-4 rounded-xl transition-all shadow-lg shadow-primary/25 hover:shadow-xl hover:shadow-primary/35 hover:-translate-y-0.5">
                            Start Your Project
                            <i data-lucide="arrow-right" class="w-5 h-5 ml-2"></i>
                        </a>
                        <a href="{{ route('portfolio') }}" class="inline-flex items-center justify-center text-base font-semibold text-heading bg-white hover:bg-background border border-border px-8 py-4 rounded-xl transition-all hover:border-slate-300 shadow-sm hover:shadow">
                            View Work
                            <i data-lucide="external-link" class="w-4 h-4 ml-2 text-muted"></i>
                        </a>
                    </div>

                    <div class="grid grid-cols-3 gap-6 pt-8 border-t border-border w-full max-w-lg">
                        @foreach($homeData['hero']['stats'] as $stat)
                            <div>
                                <div class="text-2xl sm:text-3xl font-extrabold text-heading font-heading">{{ $stat['value'] }}</div>
                                <div class="text-xs sm:text-sm font-medium text-muted mt-1">{{ $stat['label'] }}</div>
                            </div>
                        @endforeach
                    </div>
                </div>

                <!-- Dashboard Graphic -->
                <div class="lg:col-span-5 relative hero-dashboard">
                    <div class="relative mx-auto w-full max-w-md lg:max-w-none">
                        <div class="rounded-2xl border border-border/80 bg-white shadow-2xl shadow-slate-900/10 overflow-hidden relative z-10">
                            <div class="bg-slate-900 px-4 py-3 flex items-center justify-between border-b border-slate-800">
                                <div class="flex items-center gap-2">
                                    <span class="w-3 h-3 rounded-full bg-rose-500/80 inline-block"></span>
                                    <span class="w-3 h-3 rounded-full bg-amber-500/80 inline-block"></span>
                                    <span class="w-3 h-3 rounded-full bg-emerald-500/80 inline-block"></span>
                                </div>
                                <div class="text-xs font-mono text-slate-400 flex items-center gap-1.5 bg-slate-800/80 px-3 py-1 rounded-md">
                                    <i data-lucide="lock" class="w-3 h-3 text-emerald-400"></i>
                                    api.jostech.io/v1/telemetry
                                </div>
                                <div class="w-4"></div>
                            </div>

                            <div class="p-6 bg-slate-950 text-white font-mono text-xs space-y-6">
                                <div class="flex items-center justify-between bg-slate-900/90 p-3 rounded-xl border border-slate-800">
                                    <div class="flex items-center gap-3">
                                        <div class="w-2.5 h-2.5 rounded-full bg-emerald-400 animate-pulse"></div>
                                        <span class="text-slate-200 font-sans font-semibold text-sm">System Health</span>
                                    </div>
                                    <span class="text-emerald-400 bg-emerald-500/10 border border-emerald-500/20 px-2 py-0.5 rounded text-[11px] font-sans">OPTIMAL</span>
                                </div>

                                <div class="grid grid-cols-2 gap-3">
                                    <div class="bg-slate-900/60 p-3.5 rounded-xl border border-slate-800/80">
                                        <div class="text-slate-400 text-[11px] font-sans mb-1">Throughput</div>
                                        <div class="text-lg font-bold font-sans text-white">48.2k req/s</div>
                                        <div class="text-emerald-400 text-[10px] font-sans mt-1 flex items-center gap-1">
                                            <i data-lucide="trending-up" class="w-3 h-3"></i> +18.4%
                                        </div>
                                    </div>
                                    <div class="bg-slate-900/60 p-3.5 rounded-xl border border-slate-800/80">
                                        <div class="text-slate-400 text-[11px] font-sans mb-1">AI Pipeline</div>
                                        <div class="text-lg font-bold font-sans text-white">Active</div>
                                        <div class="text-accent text-[10px] font-sans mt-1 flex items-center gap-1">
                                            <i data-lucide="cpu" class="w-3 h-3"></i> 12 Nodes
                                        </div>
                                    </div>
                                </div>

                                <div class="bg-slate-900/60 p-4 rounded-xl border border-slate-800/80 space-y-2">
                                    <div class="flex justify-between text-[11px] font-sans text-slate-400 mb-2">
                                        <span>Latency Distribution</span>
                                        <span class="text-primary-light">12ms avg</span>
                                    </div>
                                    <div class="h-16 flex items-end gap-1.5 pt-2">
                                        <div class="w-full bg-primary/40 h-[40%] rounded-t"></div>
                                        <div class="w-full bg-primary/60 h-[65%] rounded-t"></div>
                                        <div class="w-full bg-primary h-[85%] rounded-t"></div>
                                        <div class="w-full bg-accent h-[50%] rounded-t"></div>
                                        <div class="w-full bg-primary h-[95%] rounded-t"></div>
                                        <div class="w-full bg-secondary h-[70%] rounded-t"></div>
                                        <div class="w-full bg-primary/80 h-[60%] rounded-t"></div>
                                    </div>
                                </div>

                                <div class="text-[11px] text-slate-400 space-y-1 pt-1 border-t border-slate-800/60">
                                    <div class="flex items-center gap-2 text-emerald-400">
                                        <span>[OK]</span> <span class="text-slate-300">Deploying cluster to CapRover region...</span>
                                    </div>
                                    <div class="flex items-center gap-2">
                                        <span class="text-accent">[INFO]</span> <span>Cache synchronized via Redis cluster</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- Trusted Technologies Strip -->
    <section class="py-12 border-y border-border/80 bg-background/50 relative z-10 overflow-hidden">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 mb-6 text-center">
            <p class="text-xs font-semibold text-muted uppercase tracking-wider">Engineered with Modern, Production-Grade Technology</p>
        </div>
        <div class="flex overflow-hidden [mask-image:_linear-gradient(to_right,transparent_0,_black_128px,_black_calc(100%-128px),transparent_100%)]">
            <div class="flex items-center gap-12 sm:gap-16 whitespace-nowrap animate-infinite-scroll">
                @foreach($homeData['technologies'] as $tech)
                    <div class="flex items-center gap-2.5 text-heading font-semibold text-base">
                        <i data-lucide="{{ $tech['icon'] }}" class="w-5 h-5 {{ $tech['color'] }}"></i> {{ $tech['name'] }}
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Core Engineering Services -->
    <section class="py-20 lg:py-28 relative z-10">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center max-w-3xl mx-auto mb-16">
                <h2 class="text-xs font-semibold text-primary uppercase tracking-wider mb-2">Our Capabilities</h2>
                <p class="text-3xl sm:text-4xl font-extrabold text-heading tracking-tight">
                    End-to-End Software Engineering for Scale
                </p>
                <p class="mt-4 text-base sm:text-lg text-body">
                    We cover the complete product lifecycle—from system architecture and backend design to cloud deployment and ongoing maintenance.
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                @foreach($homeData['capabilities'] as $capability)
                    <div class="bg-white p-8 rounded-2xl border border-border/80 shadow-sm hover:shadow-md transition-all hover:-translate-y-1">
                        <div class="w-12 h-12 rounded-xl {{ $capability['bg_color'] }} flex items-center justify-center {{ $capability['color'] }} mb-6">
                            <i data-lucide="{{ $capability['icon'] }}" class="w-6 h-6"></i>
                        </div>
                        <h3 class="text-xl font-bold text-heading mb-3">{{ $capability['title'] }}</h3>
                        <p class="text-body text-sm leading-relaxed mb-4">
                            {{ $capability['description'] }}
                        </p>
                        <ul class="text-xs text-muted space-y-2">
                            @foreach($capability['features'] as $feature)
                                <li class="flex items-center gap-2">
                                    <i data-lucide="check-circle" class="w-4 h-4 text-emerald-500"></i> {{ $feature }}
                                </li>
                            @endforeach
                        </ul>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Architecture & Process Section -->
    <section class="py-20 bg-slate-900 text-white relative z-10 overflow-hidden">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-center">
                <div class="lg:col-span-5">
                    <h2 class="text-xs font-semibold text-accent uppercase tracking-wider mb-2">Engineering Standard</h2>
                    <h3 class="text-3xl sm:text-4xl font-extrabold tracking-tight mb-6">
                        How We Build Reliable Software Systems
                    </h3>
                    <p class="text-slate-300 text-base leading-relaxed mb-8">
                        Our engineering workflow minimizes downtime, maintains clean codebase structures, and delivers reliable product deployments every time.
                    </p>
                    
                    <div class="space-y-6">
                        @foreach($homeData['process_steps'] as $step)
                            <div class="flex items-start gap-4">
                                <div class="w-8 h-8 rounded-lg bg-slate-800 border border-slate-700 flex items-center justify-center text-accent font-bold text-sm shrink-0">
                                    {{ $step['number'] }}
                                </div>
                                <div>
                                    <h4 class="font-semibold text-white">{{ $step['title'] }}</h4>
                                    <p class="text-slate-400 text-sm mt-1">{{ $step['description'] }}</p>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>

                <div class="lg:col-span-7 bg-slate-950 p-6 sm:p-8 rounded-2xl border border-slate-800 shadow-2xl">
                    <div class="flex items-center justify-between pb-4 border-b border-slate-800 mb-6">
                        <span class="text-xs font-mono text-slate-400">architectural-workflow.config</span>
                        <span class="text-xs font-mono text-emerald-400">READY</span>
                    </div>
                    
                    <div class="space-y-4 font-mono text-xs text-slate-300">
                        <div class="p-4 rounded-lg bg-slate-900 border border-slate-800">
                            <div class="text-accent font-bold mb-1">// Frontend & Client Interface</div>
                            <div class="text-slate-400">Responsive UI Framework (Tailwind, Livewire, Alpine.js / Next.js)</div>
                        </div>
                        <div class="flex justify-center text-slate-600"><i data-lucide="arrow-down" class="w-4 h-4"></i></div>
                        <div class="p-4 rounded-lg bg-slate-900 border border-slate-800">
                            <div class="text-emerald-400 font-bold mb-1">// API Gateway & Middleware</div>
                            <div class="text-slate-400">Laravel / Python Backend Service | OAuth Verification | Rate Limiting</div>
                        </div>
                        <div class="flex justify-center text-slate-600"><i data-lucide="arrow-down" class="w-4 h-4"></i></div>
                        <div class="p-4 rounded-lg bg-slate-900 border border-slate-800">
                            <div class="text-indigo-400 font-bold mb-1">// Data & Cache Tier</div>
                            <div class="text-slate-400">MySQL / PostgreSQL + Redis Data Store + Asynchronous Queue Jobs</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Project Showcase Highlights -->
    <section class="py-20 lg:py-28 relative z-10 bg-background/30">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex flex-col md:flex-row md:items-end justify-between mb-16">
                <div>
                    <h2 class="text-xs font-semibold text-primary uppercase tracking-wider mb-2">Featured Work</h2>
                    <p class="text-3xl sm:text-4xl font-extrabold text-heading tracking-tight">
                        Proven Production Deliveries
                    </p>
                </div>
                <a href="{{ route('portfolio') }}" class="mt-4 md:mt-0 text-primary font-semibold text-sm hover:underline inline-flex items-center">
                    Explore full portfolio <i data-lucide="arrow-right" class="w-4 h-4 ml-1"></i>
                </a>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                @foreach($homeData['featured_projects'] as $project)
                    <div class="bg-white rounded-2xl border border-border/80 overflow-hidden shadow-sm hover:shadow-md transition-all">
                        <div class="h-48 bg-slate-900 p-6 flex flex-col justify-between relative overflow-hidden">
                            <div class="absolute right-0 top-0 opacity-10 p-4">
                                <i data-lucide="{{ $project['icon'] }}" class="w-48 h-48 text-white"></i>
                            </div>
                            <span class="{{ $project['badge_color'] }} border text-xs px-3 py-1 rounded-full w-fit font-semibold">
                                {{ $project['badge'] }}
                            </span>
                            <div>
                                <h3 class="text-2xl font-bold text-white mb-1">{{ $project['title'] }}</h3>
                                <p class="text-slate-400 text-xs">{{ $project['subtitle'] }}</p>
                            </div>
                        </div>
                        <div class="p-6 space-y-4">
                            <p class="text-body text-sm">
                                {{ $project['description'] }}
                            </p>
                            <div class="flex flex-wrap gap-2 pt-2 border-t border-border">
                                @foreach($project['tags'] as $tag)
                                    <span class="text-[11px] bg-slate-100 text-slate-700 px-2.5 py-1 rounded-md font-medium">{{ $tag }}</span>
                                @endforeach
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Call to Action Banner -->
    <section class="py-20 relative z-10">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="bg-gradient-to-r from-slate-900 via-primary-dark to-slate-900 rounded-3xl p-10 sm:p-16 text-center relative overflow-hidden shadow-2xl">
                <div class="max-w-3xl mx-auto relative z-10 space-y-6">
                    <h2 class="text-3xl sm:text-4xl font-extrabold text-white tracking-tight">
                        {{ $homeData['cta']['heading'] }}
                    </h2>
                    <p class="text-slate-300 text-base sm:text-lg">
                        {{ $homeData['cta']['description'] }}
                    </p>
                    <div class="pt-4 flex flex-col sm:flex-row justify-center gap-4">
                        <a href="{{ route('contact') }}" class="inline-flex items-center justify-center text-base font-semibold text-slate-900 bg-white hover:bg-slate-100 px-8 py-4 rounded-xl transition-all shadow-lg hover:shadow-xl">
                            {{ $homeData['cta']['button_text'] }}
                            <i data-lucide="arrow-right" class="w-5 h-5 ml-2"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection