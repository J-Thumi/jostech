<?php

namespace App\Http\Controllers;

use App\Models\BlogPost;
use Illuminate\View\View;

class BlogController extends Controller
{
    /**
     * Display the index listing of engineering posts.
     */
    public function index(): View
    {
        $posts = BlogPost::published()
            ->with('tags')
            ->get()
            ->keyBy('slug')
            ->map(fn (BlogPost $post) => $this->formatPost($post))
            ->toArray();

        return view('blog.index', compact('posts'));
    }

    /**
     * Display a single blog post by slug.
     */
    public function show(string $slug): View
    {
        $post = BlogPost::with('tags')
            ->where('slug', $slug)
            ->where('is_published', true)
            ->firstOrFail();

        $post = $this->formatPost($post);

        return view('blog.show', compact('post'));
    }

    /**
     * Shape a BlogPost model into the array structure the views expect.
     */
    private function formatPost(BlogPost $post): array
    {
        return [
            'slug' => $post->slug,
            'title' => $post->title,
            'category' => $post->category,
            'read_time' => $post->read_time,
            'published_at' => $post->published_at?->format('M d, Y'),
            'author' => $post->author,
            'excerpt' => $post->excerpt,
            'tags' => $post->tags->pluck('tag')->toArray(),
            'content' => $post->content,
        ];
    }
}
