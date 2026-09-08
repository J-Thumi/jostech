@extends('layouts.app')

@section('title', 'Engineering Journal | Insights')

@section('content')
    <section class="py-24 bg-background relative z-10">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center max-w-3xl mx-auto mb-16 section-title">
                <div class="text-xs font-bold text-primary tracking-widest uppercase mb-3">Engineering Journal</div>
                <h2 class="text-3xl sm:text-4xl font-extrabold text-heading tracking-tight mb-4">Latest Technical Insights</h2>
                <p class="text-body text-base">Architectural patterns, deployment workflows, and technical notes from active production engineering.</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                @foreach($posts as $post)
                    <article class="bg-white rounded-2xl p-6 border border-border hover:border-slate-300 shadow-sm hover:shadow-md transition-all flex flex-col justify-between group">
                        <div>
                            <div class="flex items-center gap-2 text-xs font-mono text-primary mb-3">
                                <span>{{ $post['category'] }}</span> • <span>{{ $post['read_time'] }}</span>
                            </div>
                            <h3 class="text-lg font-bold text-heading mb-3 group-hover:text-primary transition-colors">
                                <a href="{{ route('blog.show', $post['slug']) }}" class="focus:outline-none">
                                    {{ $post['title'] }}
                                </a>
                            </h3>
                            <p class="text-xs text-body leading-relaxed mb-6">
                                {{ $post['excerpt'] }}
                            </p>
                        </div>

                        <div class="pt-4 border-t border-border/60 flex items-center justify-between">
                            <span class="text-[11px] font-mono text-muted">{{ $post['published_at'] }}</span>
                            <a href="{{ route('blog.show', $post['slug']) }}" class="inline-flex items-center text-xs font-semibold text-primary group-hover:translate-x-0.5 transition-transform">
                                Read Article <i data-lucide="arrow-right" class="w-3.5 h-3.5 ml-1"></i>
                            </a>
                        </div>
                    </article>
                @endforeach
            </div>
        </div>
    </section>
@endsection