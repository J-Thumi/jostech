@extends('layouts.app')

@section('title', 'Pricing & Engagement Models | JoSTech Engineering')

@section('content')
    <!-- Hero Section -->
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

    <!-- Pricing Tiers Grid -->
    <section class="pb-20 relative z-10">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-8 items-stretch">
                
                @foreach($tiers as $tier)
                    <div class="bg-white rounded-3xl p-8 border {{ $tier['border_style'] }} shadow-sm hover:shadow-md transition-all flex flex-col justify-between relative">
                        @if($tier['is_featured'] && isset($tier['featured_badge']))
                            <div class="absolute -top-3.5 left-1/2 -translate-x-1/2 bg-primary text-white text-[10px] font-bold uppercase px-3 py-1 rounded-full tracking-wider shadow-md">
                                {{ $tier['featured_badge'] }}
                            </div>
                        @endif

                        <div>
                            <div class="text-xs font-bold {{ $tier['badge_color'] }} uppercase tracking-wider mb-2">
                                {{ $tier['badge'] }}
                            </div>
                            <h2 class="text-2xl font-bold text-heading">{{ $tier['title'] }}</h2>
                            <p class="text-xs text-body mt-2 mb-6 leading-relaxed">
                                {{ $tier['description'] }}
                            </p>
                            <div class="flex items-baseline gap-1 mb-6">
                                <span class="text-4xl font-extrabold text-heading">{{ $tier['price'] }}</span>
                                <span class="text-xs text-muted font-medium">{{ $tier['billing_period'] }}</span>
                            </div>
                            <ul class="space-y-3 text-xs text-heading pt-6 border-t border-border/80">
                                @foreach($tier['features'] as $feature)
                                    <li class="flex items-center gap-2">
                                        <i data-lucide="check-circle-2" class="w-4 h-4 {{ $tier['icon_color'] }}"></i> 
                                        {{ $feature }}
                                    </li>
                                @endforeach
                            </ul>
                        </div>

                        <div class="pt-8">
                            <a href="{{ route('contact') }}" class="w-full inline-flex items-center justify-center px-6 py-3.5 rounded-xl font-semibold text-xs transition-all {{ $tier['button_class'] }}">
                                {{ $tier['button_text'] }}
                            </a>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
    </section>
@endsection