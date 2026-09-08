@extends('layouts.app')

@section('title', 'Process | JoSTech Agile Delivery Model')

@section('content')
    <!-- Hero Header -->
    <section class="relative z-10 pt-12 pb-16 lg:pt-16 lg:pb-20 overflow-hidden">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <div class="inline-flex items-center gap-2 px-3.5 py-1.5 rounded-full bg-primary-light/60 border border-primary/20 text-primary text-xs sm:text-sm font-semibold mb-6">
                <span class="flex h-2 w-2 rounded-full bg-primary animate-ping"></span>
                <span class="flex h-2 w-2 rounded-full bg-primary -ml-4"></span>
                {{ $hero['badge'] }}
            </div>

            <h1 class="text-4xl sm:text-5xl lg:text-6xl font-extrabold text-heading tracking-tight leading-[1.15] mb-6 max-w-4xl mx-auto">
                {{ $hero['title_prefix'] }} <br class="hidden sm:inline"/>
                <span class="text-transparent bg-clip-text bg-gradient-to-r from-primary via-accent to-secondary">
                    {{ $hero['title_highlight'] }}
                </span>
            </h1>

            <p class="text-lg sm:text-xl text-body font-normal leading-relaxed mb-8 max-w-2xl mx-auto">
                {{ $hero['description'] }}
            </p>
        </div>
    </section>

    <!-- Detailed 4-Step Process Grid -->
    <section class="py-16 bg-background relative z-10">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center max-w-3xl mx-auto mb-16 section-title">
                <div class="text-xs font-bold text-primary tracking-widest uppercase mb-3">{{ $methodology['badge'] }}</div>
                <h2 class="text-3xl sm:text-4xl font-extrabold text-heading tracking-tight mb-4">{{ $methodology['title'] }}</h2>
                <p class="text-base sm:text-lg text-body">{{ $methodology['description'] }}</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                @foreach($phases as $phase)
                    <div class="relative bg-white p-8 rounded-2xl border border-border/80 shadow-sm hover:shadow-md transition-all hover:-translate-y-1 flex flex-col justify-between">
                        <div>
                            <div class="flex items-center justify-between mb-6">
                                <div class="w-12 h-12 rounded-xl {{ $phase['bg_color'] }} text-white font-bold flex items-center justify-center font-heading text-lg shadow-md {{ $phase['shadow_color'] }}">
                                    {{ $phase['number'] }}
                                </div>
                                <span class="text-xs font-mono text-muted bg-slate-100 px-2.5 py-1 rounded-md">{{ $phase['label'] }}</span>
                            </div>
                            <h3 class="text-xl font-bold text-heading mb-3">{{ $phase['title'] }}</h3>
                            <p class="text-xs text-body leading-relaxed mb-6">
                                {{ $phase['description'] }}
                            </p>
                        </div>
                        <ul class="text-xs text-muted space-y-2 pt-4 border-t border-border/80">
                            @foreach($phase['checklist'] as $item)
                                <li class="flex items-center gap-2">
                                    <i data-lucide="check" class="w-4 h-4 {{ $phase['text_color'] }}"></i> 
                                    {{ $item }}
                                </li>
                            @endforeach
                        </ul>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Engineering Standards & Quality Assurance -->
    <section class="py-20 bg-slate-900 text-white relative z-10 overflow-hidden">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-center">
                
                <div class="lg:col-span-6 space-y-6">
                    <h2 class="text-xs font-semibold text-accent uppercase tracking-wider">{{ $quality_assurance['badge'] }}</h2>
                    <h3 class="text-3xl sm:text-4xl font-extrabold tracking-tight">
                        {{ $quality_assurance['title'] }}
                    </h3>
                    <p class="text-slate-300 text-base leading-relaxed">
                        {{ $quality_assurance['description'] }}
                    </p>

                    <div class="space-y-4 pt-2">
                        @foreach($quality_assurance['features'] as $feature)
                            <div class="p-4 rounded-xl bg-slate-950 border border-slate-800 flex items-start gap-4">
                                <div class="w-10 h-10 rounded-lg {{ $feature['bg_color'] }} {{ $feature['icon_color'] }} flex items-center justify-center shrink-0">
                                    <i data-lucide="{{ $feature['icon'] }}" class="w-5 h-5"></i>
                                </div>
                                <div>
                                    <h4 class="font-bold text-sm text-white">{{ $feature['title'] }}</h4>
                                    <p class="text-slate-400 text-xs mt-1">{{ $feature['description'] }}</p>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>

                <!-- Code Terminal Preview -->
                <div class="lg:col-span-6 bg-slate-950 p-6 sm:p-8 rounded-2xl border border-slate-800 shadow-2xl font-mono text-xs">
                    <div class="flex items-center justify-between pb-4 border-b border-slate-800 mb-4 text-slate-400">
                        <span class="flex items-center gap-2">
                            <span class="w-3 h-3 rounded-full bg-rose-500"></span>
                            <span class="w-3 h-3 rounded-full bg-amber-500"></span>
                            <span class="w-3 h-3 rounded-full bg-emerald-500"></span>
                            <span class="ml-2">{{ $code_preview['filename'] }}</span>
                        </span>
                        <span class="text-emerald-400">{{ $code_preview['status'] }}</span>
                    </div>

                    <div class="space-y-3 text-slate-300">
                        <div><span class="text-accent">class</span> <span class="text-amber-300">{{ $code_preview['class_name'] }}</span> <span class="text-accent">extends</span> <span class="text-amber-300">{{ $code_preview['extends_class'] }}</span></div>
                        <div class="pl-4">{</div>
                        <div class="pl-8 text-slate-500">{{ $code_preview['comment'] }}</div>
                        <div class="pl-8"><span class="text-accent">public function</span> <span class="text-blue-400">{{ $code_preview['method_name'] }}</span>(): <span class="text-accent">void</span></div>
                        <div class="pl-8">{</div>
                        <div class="pl-12">$response = $this-&gt;<span class="text-blue-400">postJson</span>(<span class="text-emerald-300">'{{ $code_preview['endpoint'] }}'</span>, $payload);</div>
                        <div class="pl-12">$response-&gt;<span class="text-blue-400">assertStatus</span>(<span class="text-amber-400">200</span>);</div>
                        <div class="pl-12">$this-&gt;<span class="text-blue-400">assertDatabaseHas</span>(<span class="text-emerald-300">'{{ $code_preview['table'] }}'</span>, [<span class="text-emerald-300">'status'</span> =&gt; <span class="text-emerald-300">'active'</span>]);</div>
                        <div class="pl-8">}</div>
                        <div class="pl-4">}</div>
                    </div>

                    <div class="mt-6 pt-4 border-t border-slate-800 flex items-center justify-between text-[11px] text-slate-400">
                        <span>{{ $code_preview['test_summary'] }}</span>
                        <span class="text-emerald-400">{{ $code_preview['coverage'] }}</span>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- Call to Action Banner -->
    <section class="py-20 relative z-10">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="bg-gradient-to-r from-primary via-primary-dark to-slate-900 rounded-3xl p-10 sm:p-16 text-center text-white shadow-2xl relative overflow-hidden">
                <div class="max-w-3xl mx-auto relative z-10 space-y-6">
                    <h2 class="text-3xl sm:text-4xl font-extrabold tracking-tight">
                        {{ $cta['title'] }}
                    </h2>
                    <p class="text-blue-100 text-base sm:text-lg">
                        {{ $cta['description'] }}
                    </p>
                    <div class="pt-4 flex justify-center">
                        <a href="{{ route('contact') }}" class="inline-flex items-center justify-center text-base font-semibold text-heading bg-white hover:bg-slate-100 px-8 py-4 rounded-xl transition-all shadow-lg hover:shadow-xl">
                            {{ $cta['button_text'] }}
                            <i data-lucide="arrow-right" class="w-5 h-5 ml-2 text-primary"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection