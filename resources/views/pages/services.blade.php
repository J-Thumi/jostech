@extends('layouts.app')

@section('title', 'Services | JoSTech Engineering & Cloud Architecture')

@section('content')
    <!-- Hero Header -->
    <section class="relative z-10 pt-12 pb-16 lg:pt-16 lg:pb-20 overflow-hidden">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <div class="inline-flex items-center gap-2 px-3.5 py-1.5 rounded-full bg-primary-light/60 border border-primary/20 text-primary text-xs sm:text-sm font-semibold mb-6">
                <span class="flex h-2 w-2 rounded-full bg-primary animate-ping"></span>
                <span class="flex h-2 w-2 rounded-full bg-primary -ml-4"></span>
                {{ $servicesData['hero']['badge'] }}
            </div>

            <h1 class="text-4xl sm:text-5xl lg:text-6xl font-extrabold text-heading tracking-tight leading-[1.15] mb-6 max-w-4xl mx-auto">
                {{ $servicesData['hero']['title_prefix'] }} <br class="hidden sm:inline"/>
                <span class="text-transparent bg-clip-text bg-gradient-to-r from-primary via-accent to-secondary">
                    {{ $servicesData['hero']['title_highlight'] }}
                </span>
            </h1>

            <p class="text-lg sm:text-xl text-body font-normal leading-relaxed mb-8 max-w-2xl mx-auto">
                {{ $servicesData['hero']['description'] }}
            </p>
        </div>
    </section>

    <!-- Dynamic Capabilities Grid -->
    <section class="pb-20 relative z-10">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center max-w-3xl mx-auto mb-16">
                <div class="text-xs font-bold text-primary tracking-widest uppercase mb-3">Core Expertise</div>
                <h2 class="text-3xl sm:text-4xl font-extrabold text-heading tracking-tight mb-4">Engineering Capabilities</h2>
                <p class="text-base text-body">Production-grade stack implementations designed for resilience and performance.</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                @foreach($servicesData['capabilities'] as $service)
                    <div class="bg-white rounded-2xl p-8 border border-border shadow-sm hover:shadow-md transition-all hover:-translate-y-1 flex flex-col justify-between">
                        <div>
                            <div class="w-12 h-12 rounded-xl {{ $service['bg_color'] }} {{ $service['color'] }} flex items-center justify-center mb-6">
                                <i data-lucide="{{ $service['icon'] }}" class="w-6 h-6"></i>
                            </div>
                            <h3 class="text-xl font-bold text-heading mb-3">{{ $service['title'] }}</h3>
                            <p class="text-xs text-body leading-relaxed mb-6">
                                {{ $service['description'] }}
                            </p>
                        </div>
                        <div>
                            <div class="flex flex-wrap gap-1.5 mb-6">
                                @foreach($service['tags'] as $tag)
                                    <span class="px-2.5 py-1 rounded-md bg-slate-100 text-slate-700 text-[11px] font-mono font-medium">{{ $tag }}</span>
                                @endforeach
                            </div>
                            <ul class="text-xs font-medium text-heading space-y-2 pt-4 border-t border-border/80">
                                @foreach($service['features'] as $feature)
                                    <li class="flex items-center gap-2">
                                        <i data-lucide="check-circle-2" class="w-4 h-4 {{ $service['check_color'] }}"></i> 
                                        {{ $feature }}
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Technical Delivery Standards Table -->
    <section class="py-16 bg-slate-900 text-white relative z-10">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center max-w-3xl mx-auto mb-12">
                <h2 class="text-xs font-semibold text-accent uppercase tracking-wider mb-2">Delivery Matrix</h2>
                <h3 class="text-2xl sm:text-3xl font-extrabold tracking-tight">Technical Stack & Output Standards</h3>
            </div>

            <div class="overflow-x-auto">
                <table class="w-full text-left text-xs border-collapse">
                    <thead>
                        <tr class="border-b border-slate-800 text-slate-400 uppercase tracking-wider">
                            <th class="py-4 px-4 font-semibold">Service Area</th>
                            <th class="py-4 px-4 font-semibold">Primary Stack</th>
                            <th class="py-4 px-4 font-semibold">Key Deliverables</th>
                            <th class="py-4 px-4 font-semibold">Target Use Case</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-slate-800/80 text-slate-300">
                        @foreach($servicesData['matrix'] as $row)
                            <tr>
                                <td class="py-4 px-4 font-bold text-white">{{ $row['area'] }}</td>
                                <td class="py-4 px-4 font-mono text-emerald-400">{{ $row['stack'] }}</td>
                                <td class="py-4 px-4">{{ $row['deliverables'] }}</td>
                                <td class="py-4 px-4">{{ $row['use_case'] }}</td>
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
                        {{ $servicesData['cta']['heading'] }}
                    </h2>
                    <p class="text-blue-100 text-base sm:text-lg">
                        {{ $servicesData['cta']['description'] }}
                    </p>
                    <div class="pt-4 flex justify-center">
                        <a href="{{ route('contact') }}" class="inline-flex items-center justify-center text-base font-semibold text-heading bg-white hover:bg-slate-100 px-8 py-4 rounded-xl transition-all shadow-lg hover:shadow-xl">
                            {{ $servicesData['cta']['button_text'] }}
                            <i data-lucide="arrow-right" class="w-5 h-5 ml-2 text-primary"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection