<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\View\View;

class BlogController extends Controller
{
    public function index(): View
    {
        return view('pages.blog.index', [
            'metaTitle' => 'Relationship Insights & Clinical Notes | Jefna Hameed',
            'metaDescription' => 'Practical clinical psychology articles, marriage guidance frameworks, and emotional boundary strategies by family counselor Jefna Hameed.',
        ]);
    }

    public function show(string $slug): View
    {
        $post = Post::published()->where('slug', $slug)->firstOrFail();

        $relatedPosts = Post::published()
            ->where('id', '!=', $post->id)
            ->where('category', $post->category)
            ->take(3)
            ->get();

        if ($relatedPosts->isEmpty()) {
            $relatedPosts = Post::published()->where('id', '!=', $post->id)->take(3)->get();
        }

        // Convert simple Markdown to formatted HTML safely
        $formattedBody = Str::markdown($post->body);

        return view('pages.blog.show', [
            'post' => $post,
            'formattedBody' => $formattedBody,
            'relatedPosts' => $relatedPosts,
            'metaTitle' => $post->meta_title ?? ($post->title . ' | Jefna Hameed'),
            'metaDescription' => $post->meta_description ?? $post->excerpt,
        ]);
    }
}
