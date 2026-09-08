@extends('layouts.app')

@section('title', 'Start Your Project | JoSTech Engineering & Cloud Solutions')

@section('content')
   
        <!-- Header Hero Section -->
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

    <!-- Main Contact & Project Details Form Section -->
    <section class="pb-20 lg:pb-28 relative z-10">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-12">
                
                <!-- Left Column: Contact Info & Value Props -->
                <div class="lg:col-span-5 space-y-8">
                    <div>
                        <h2 class="text-xs font-semibold text-primary uppercase tracking-wider mb-2">Direct Channels</h2>
                        <h3 class="text-2xl font-bold text-heading">Talk directly with lead engineering</h3>
                        <p class="text-body text-sm mt-2">
                            Skip the middleman. Your project requirements will be reviewed directly by lead software architects.
                        </p>
                    </div>

                    <!-- Info Cards -->
                    <div class="space-y-4">
                        <div class="p-5 bg-white rounded-2xl border border-border/80 shadow-sm flex items-start gap-4">
                            <div class="w-10 h-10 rounded-xl bg-primary/10 flex items-center justify-center text-primary shrink-0">
                                <i data-lucide="mail" class="w-5 h-5"></i>
                            </div>
                            <div>
                                <div class="text-xs font-semibold text-muted uppercase">Email Inquiries</div>
                                <a href="mailto:{{ $contact_info['email'] }}" class="text-heading font-bold text-base hover:text-primary transition-colors">
                                    {{ $contact_info['email'] }}
                                </a>
                                <div class="text-xs text-muted mt-0.5">{{ $contact_info['response_time'] }}</div>
                            </div>
                        </div>

                        <div class="p-5 bg-white rounded-2xl border border-border/80 shadow-sm flex items-start gap-4">
                            <div class="w-10 h-10 rounded-xl bg-emerald-500/10 flex items-center justify-center text-emerald-500 shrink-0">
                                <i data-lucide="clock" class="w-5 h-5"></i>
                            </div>
                            <div>
                                <div class="text-xs font-semibold text-muted uppercase">Turnaround Time</div>
                                <div class="text-heading font-bold text-base">{{ $contact_info['turnaround'] }}</div>
                                <div class="text-xs text-muted mt-0.5">{{ $contact_info['turnaround_detail'] }}</div>
                            </div>
                        </div>

                        <div class="p-5 bg-white rounded-2xl border border-border/80 shadow-sm flex items-start gap-4">
                            <div class="w-10 h-10 rounded-xl bg-accent/10 flex items-center justify-center text-accent shrink-0">
                                <i data-lucide="shield-check" class="w-5 h-5"></i>
                            </div>
                            <div>
                                <div class="text-xs font-semibold text-muted uppercase">NDA & Security</div>
                                <div class="text-heading font-bold text-base">{{ $contact_info['confidentiality'] }}</div>
                                <div class="text-xs text-muted mt-0.5">{{ $contact_info['confidentiality_detail'] }}</div>
                            </div>
                        </div>
                    </div>

                    <!-- Terminal Card Graphic -->
                    <div class="bg-slate-950 p-6 rounded-2xl border border-slate-800 text-white font-mono text-xs space-y-3 shadow-xl">
                        <div class="flex items-center justify-between pb-3 border-b border-slate-800 text-slate-400">
                            <span class="flex items-center gap-2">
                                <span class="w-2.5 h-2.5 rounded-full bg-emerald-400"></span> 
                                {{ $terminal['status'] }}
                            </span>
                            <span>{{ $terminal['version'] }}</span>
                        </div>
                        <div class="text-slate-300">{{ $terminal['command'] }}</div>
                        <div class="text-emerald-400">{{ $terminal['success_msg'] }}</div>
                        <div class="text-slate-400">{{ $terminal['info_msg'] }}</div>
                    </div>
                </div>

                <!-- Right Column: Interactive Project Brief Form -->
                <div class="lg:col-span-7 bg-white p-8 sm:p-10 rounded-3xl border border-border/80 shadow-xl relative">
                    
                    <!-- Flash Message Feedback -->
                    @if(session('success'))
                        <div class="mb-6 p-4 rounded-2xl bg-emerald-500/10 border border-emerald-500/20 text-emerald-800 text-sm flex items-start gap-3">
                            <i data-lucide="check-circle" class="w-5 h-5 text-emerald-600 shrink-0 mt-0.5"></i>
                            <div>
                                <span class="font-bold block text-emerald-900">Brief Submitted Successfully</span>
                                {{ session('success') }}
                            </div>
                        </div>
                    @endif

                    @if($errors->any())
                        <div class="mb-6 p-4 rounded-2xl bg-rose-500/10 border border-rose-500/20 text-rose-800 text-sm flex items-start gap-3">
                            <i data-lucide="alert-triangle" class="w-5 h-5 text-rose-600 shrink-0 mt-0.5"></i>
                            <div>
                                <span class="font-bold block text-rose-900">Please review form inputs:</span>
                                <ul class="list-disc list-inside text-xs mt-1 space-y-1">
                                    @foreach($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    @endif

                    <form action="{{ route('contact.store') }}" method="POST" class="space-y-6">
                        @csrf
                        
                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                            <div>
                                <label for="name" class="block text-xs font-bold text-heading uppercase tracking-wider mb-2">Full Name *</label>
                                <input type="text" id="name" name="name" value="{{ old('name') }}" required placeholder="John Doe" 
                                    class="w-full px-4 py-3 rounded-xl border @error('name') border-rose-500 @else border-border @enderror bg-background/50 text-heading text-sm focus:outline-none focus:border-primary focus:bg-white transition-all">
                                @error('name')
                                    <span class="text-xs text-rose-500 mt-1 block">{{ $message }}</span>
                                @enderror
                            </div>

                            <div>
                                <label for="email" class="block text-xs font-bold text-heading uppercase tracking-wider mb-2">Work Email *</label>
                                <input type="email" id="email" name="email" value="{{ old('email') }}" required placeholder="john@company.com" 
                                    class="w-full px-4 py-3 rounded-xl border @error('email') border-rose-500 @else border-border @enderror bg-background/50 text-heading text-sm focus:outline-none focus:border-primary focus:bg-white transition-all">
                                @error('email')
                                    <span class="text-xs text-rose-500 mt-1 block">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                        <!-- Project Capabilities/Services Needed -->
                        <div>
                            <label class="block text-xs font-bold text-heading uppercase tracking-wider mb-3">Project Type / Scope *</label>
                            <div class="grid grid-cols-2 sm:grid-cols-3 gap-3">
                                @foreach($services as $service)
                                    <label class="cursor-pointer border border-border rounded-xl p-3 text-center transition-all hover:border-primary has-[:checked]:border-primary has-[:checked]:bg-primary/5">
                                        <input type="checkbox" name="services[]" value="{{ $service['key'] }}" {{ is_array(old('services')) && in_array($service['key'], old('services')) ? 'checked' : '' }} class="sr-only">
                                        <i data-lucide="{{ $service['icon'] }}" class="w-5 h-5 mx-auto {{ $service['color'] }} mb-1"></i>
                                        <span class="block text-xs font-semibold text-heading">{{ $service['label'] }}</span>
                                    </label>
                                @endforeach
                            </div>
                            @error('services')
                                <span class="text-xs text-rose-500 mt-1 block">{{ $message }}</span>
                            @enderror
                        </div>

                        <!-- Budget Range -->
                        <div>
                            <label for="budget" class="block text-xs font-bold text-heading uppercase tracking-wider mb-2">Estimated Budget Tier</label>
                            <select id="budget" name="budget" 
                                class="w-full px-4 py-3 rounded-xl border border-border bg-background/50 text-heading text-sm focus:outline-none focus:border-primary focus:bg-white transition-all">
                                <option value="">Select an estimated budget range</option>
                                @foreach($budget_tiers as $key => $label)
                                    <option value="{{ $key }}" {{ old('budget') == $key ? 'selected' : '' }}>{{ $label }}</option>
                                @endforeach
                            </select>
                        </div>

                        <!-- Message / Brief -->
                        <div>
                            <label for="details" class="block text-xs font-bold text-heading uppercase tracking-wider mb-2">Project Overview & Goals *</label>
                            <textarea id="details" name="details" rows="5" required 
                                placeholder="Tell us about the project, target audience, timeline expectations, and core tech stack requirements..." 
                                class="w-full px-4 py-3 rounded-xl border @error('details') border-rose-500 @else border-border @enderror bg-background/50 text-heading text-sm focus:outline-none focus:border-primary focus:bg-white transition-all">{{ old('details') }}</textarea>
                            @error('details')
                                <span class="text-xs text-rose-500 mt-1 block">{{ $message }}</span>
                            @enderror
                        </div>

                        <button type="submit" 
                            class="w-full inline-flex items-center justify-center text-base font-semibold text-white bg-primary hover:bg-primary-hover px-8 py-4 rounded-xl transition-all shadow-lg shadow-primary/25 hover:shadow-xl hover:shadow-primary/35 hover:-translate-y-0.5">
                            Submit Project Brief
                            <i data-lucide="send" class="w-5 h-5 ml-2"></i>
                        </button>

                        <p class="text-xs text-muted text-center pt-2">
                            We respect your privacy. Information submitted is kept strictly confidential.
                        </p>
                    </form>
                </div>

            </div>
        </div>
    </section>

    <!-- Frequently Asked Questions -->
    <section class="py-16 bg-slate-900 text-white relative z-10">
        <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <h2 class="text-xs font-semibold text-accent uppercase tracking-wider mb-2">Common Inquiries</h2>
                <h3 class="text-2xl sm:text-3xl font-extrabold tracking-tight">Frequently Asked Questions</h3>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                @foreach($faqs as $faq)
                    <div class="p-6 bg-slate-950 rounded-2xl border border-slate-800 hover:border-slate-700 transition-colors">
                        <h4 class="font-bold text-base text-white mb-2">{{ $faq['question'] }}</h4>
                        <p class="text-slate-400 text-sm leading-relaxed">
                            {{ $faq['answer'] }}
                        </p>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection