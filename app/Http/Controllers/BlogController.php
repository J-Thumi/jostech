<?php

namespace App\Http\Controllers;

use Illuminate\View\View;

class BlogController extends Controller
{
    /**
     * Get the static repository of blog posts.
     */
    private function getPosts(): array
    {
        return [
            'building-scalable-rag-pipelines' => [
                'slug' => 'building-scalable-rag-pipelines',
                'title' => 'Building Scalable RAG Pipelines with Vector Search & Speech Retrieval',
                'category' => 'Architecture',
                'read_time' => '5 min read',
                'published_at' => 'Sep 02, 2026',
                'author' => 'JoSTech Engineering',
                'excerpt' => 'How we structure context-aware document processing layers using Python and PostgreSQL vector extensions for enterprise applications.',
                'tags' => ['Python', 'pgvector', 'RAG', 'AI'],
                'content' => '
                    <p>Retrieval-Augmented Generation (RAG) has matured from simple embeddings lookup into complex data pipeline architectures required for production enterprise systems.</p>
                    <h3>1. Chunking and Embedding Generation</h3>
                    <p>When indexing large corpora of unstructured documents, naive fixed-size chunking often loses crucial semantic context. We utilize dynamic semantic chunking that respects document headers, code blocks, and logical section boundaries.</p>
                    <h3>2. Vector Storage with pgvector</h3>
                    <p>Instead of managing isolated third-party vector databases, integrating vector search directly into PostgreSQL via <code>pgvector</code> simplifies ACID compliance and data synchronization.</p>
                    <h3>3. HyDE and Contextual Reranking</h3>
                    <p>To improve precision, initial query embeddings pass through Hypothetical Document Embeddings (HyDE) generation followed by cross-encoder reranking before prompt synthesis.</p>
                ',
            ],
            'deploying-laravel-caprover-docker' => [
                'slug' => 'deploying-laravel-caprover-docker',
                'title' => 'Zero-Downtime Laravel Deployments via CapRover & Docker',
                'category' => 'DevOps',
                'read_time' => '7 min read',
                'published_at' => 'Aug 18, 2026',
                'author' => 'JoSTech Engineering',
                'excerpt' => 'Configuring automated deployment workflows, persistent storage volumes, and Nginx reverse proxies for PHP microservices.',
                'tags' => ['Laravel', 'Docker', 'CapRover', 'DevOps'],
                'content' => '
                    <p>Deploying production Laravel applications without heavy infrastructure overhead can be achieved smoothly using CapRover and custom Docker containers.</p>
                    <h3>1. Container Optimization</h3>
                    <p>Multi-stage Dockerfiles allow us to compile frontend assets and install Composer dependencies in temporary build stages, keeping the final runtime image lightweight and secure.</p>
                    <h3>2. Persistent Volume Mapping</h3>
                    <p>Ensuring uploaded media and application logs remain intact across deployments requires mapping persistent storage paths in CapRover for Laravel storage directories.</p>
                ',
            ],
            'smart-contracts-the-graph-indexing' => [
                'slug' => 'smart-contracts-the-graph-indexing',
                'title' => 'Indexing Decentralized Event Data with The Graph & GraphQL',
                'category' => 'Blockchain',
                'read_time' => '6 min read',
                'published_at' => 'Jul 24, 2026',
                'author' => 'JoSTech Engineering',
                'excerpt' => 'Designing subgraphs to parse, aggregate, and query smart contract events efficiently on Ethereum testnets.',
                'tags' => ['Solidity', 'GraphQL', 'The Graph', 'Web3'],
                'content' => '
                    <p>Querying raw EVM logs directly from RPC nodes is inefficient for real-time applications. Custom subgraphs built on The Graph allow fast GraphQL querying of smart contract state changes.</p>
                    <h3>1. Event Declaration & Schema Design</h3>
                    <p>Defining clear entity schemas in <code>schema.graphql</code> enables indexing of complex state updates like supply chain transfers or asset provenance histories.</p>
                ',
            ],
        ];
    }

    /**
     * Display the index listing of engineering posts.
     */
    public function index(): View
    {
        $posts = $this->getPosts();

        return view('blog.index', compact('posts'));
    }

    /**
     * Display a single blog post by slug.
     */
    public function show(string $slug): View
    {
        $posts = $this->getPosts();

        if (!isset($posts[$slug])) {
            abort(404);
        }

        $post = $posts[$slug];

        return view('blog.show', compact('post'));
    }
}