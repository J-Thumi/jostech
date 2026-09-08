@extends('layouts.app')

@section('title', $post['title'] . ' | Engineering Journal')

@section('content')
    <article class="py-20 bg-background relative z-10">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
            <!-- Breadcrumb Navigation -->
            <div class="mb-8">
                <a href="{{ route('blog.index') }}" class="inline-flex items-center text-xs font-semibold text-muted hover:text-primary transition-colors">
                    <i data-lucide="arrow-left" class="w-4 h-4 mr-1.5"></i> Back to Journal
                </a>
            </div>

            <!-- Post Header -->
            <header class="mb-12">
                <div class="flex items-center gap-2 text-xs font-mono text-primary mb-4">
                    <span>{{ $post['category'] }}</span> • <span>{{ $post['read_time'] }}</span>
                </div>
                <h1 class="text-3xl sm:text-4xl lg:text-5xl font-extrabold text-heading tracking-tight leading-tight mb-6">
                    {{ $post['title'] }}
                </h1>
                <div class="flex items-center justify-between border-y border-border py-4 text-xs font-mono text-muted">
                    <div>Published by <span class="text-heading font-semibold">{{ $post['author'] }}</span></div>
                    <div>{{ $post['published_at'] }}</div>
                </div>
            </header>

            <!-- Post Content -->
            <div class="prose prose-slate max-w-none text-body leading-relaxed text-sm sm:text-base space-y-6">
                {!! $post['content'] !!}
            </div>

            <!-- Tags Footer -->
            <footer class="mt-12 pt-6 border-t border-border flex flex-wrap items-center gap-2">
                <span class="text-xs font-mono text-muted mr-2">Tags:</span>
                @foreach($post['tags'] as $tag)
                    <span class="text-xs bg-slate-100 text-slate-700 px-3 py-1 rounded-md font-mono">{{ $tag }}</span>
                @endforeach
            </footer>
        </div>
    </article>
@endsection