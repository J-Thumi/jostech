@extends('layouts.app')

@section('title', 'Engineering Journal | Insights')

@section('content')
    <section class="py-24 bg-background relative z-10">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center max-w-3xl mx-auto mb-16 section-title">
                <div class="text-xs font-bold text-primary tracking-widest uppercase mb-3">Engineering Journal</div>
                <h2 class="text-3xl sm:text-4xl font-extrabold text-heading tracking-tight mb-4">Latest Technical Insights</h2>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <article class="bg-white rounded-2xl p-6 border border-border card-hover-effect flex flex-col justify-between">
                    <div>
                        <div class="flex items-center gap-2 text-xs font-mono text-primary mb-3">
                            <span>Architecture</span> • <span>5 min read</span>
                        </div>
                        <h3 class="text-lg font-bold text-heading mb-3 hover:text-primary transition-colors">
                            <a href="#">Building Scalable RAG Pipelines with Vector Search & Speech Retrieval</a>
                        </h3>
                        <p class="text-xs text-body leading-relaxed mb-6">
                            How we structure context-aware document processing layers using Python and PostgreSQL vector extensions for enterprise applications.
                        </p>
                    </div>
                </article>
            </div>
        </div>
    </section>
@endsection