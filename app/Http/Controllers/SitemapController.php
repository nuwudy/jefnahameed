<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Workshop;
use Illuminate\Http\Response;

class SitemapController extends Controller
{
    public function index(): Response
    {
        $posts = Post::published()->get();
        $workshops = Workshop::where('is_active', true)->get();
        $baseUrl = config('app.url', 'https://jefnahameed.com');

        $xml = '<?xml version="1.0" encoding="UTF-8"?>';
        $xml .= '<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">';

        // Main Home
        $xml .= '<url>';
        $xml .= '<loc>' . $baseUrl . '/</loc>';
        $xml .= '<lastmod>' . date('Y-m-d') . '</lastmod>';
        $xml .= '<changefreq>weekly</changefreq>';
        $xml .= '<priority>1.0</priority>';
        $xml .= '</url>';

        // Blog Main Index
        $xml .= '<url>';
        $xml .= '<loc>' . $baseUrl . '/blog</loc>';
        $xml .= '<lastmod>' . date('Y-m-d') . '</lastmod>';
        $xml .= '<changefreq>daily</changefreq>';
        $xml .= '<priority>0.9</priority>';
        $xml .= '</url>';

        // Individual Blog Posts
        foreach ($posts as $post) {
            $xml .= '<url>';
            $xml .= '<loc>' . $baseUrl . '/blog/' . $post->slug . '</loc>';
            $xml .= '<lastmod>' . ($post->published_at ? $post->published_at->format('Y-m-d') : date('Y-m-d')) . '</lastmod>';
            $xml .= '<changefreq>monthly</changefreq>';
            $xml .= '<priority>0.85</priority>';
            $xml .= '</url>';
        }

        // Media Gallery
        $xml .= '<url>';
        $xml .= '<loc>' . $baseUrl . '/media</loc>';
        $xml .= '<lastmod>' . date('Y-m-d') . '</lastmod>';
        $xml .= '<changefreq>weekly</changefreq>';
        $xml .= '<priority>0.8</priority>';
        $xml .= '</url>';

        // Services Anchor
        $xml .= '<url>';
        $xml .= '<loc>' . $baseUrl . '/#counselling-services</loc>';
        $xml .= '<lastmod>' . date('Y-m-d') . '</lastmod>';
        $xml .= '<changefreq>monthly</changefreq>';
        $xml .= '<priority>0.8</priority>';
        $xml .= '</url>';

        // Workshops Anchor
        $xml .= '<url>';
        $xml .= '<loc>' . $baseUrl . '/#workshops</loc>';
        $xml .= '<lastmod>' . date('Y-m-d') . '</lastmod>';
        $xml .= '<changefreq>weekly</changefreq>';
        $xml .= '<priority>0.9</priority>';
        $xml .= '</url>';

        // About Anchor
        $xml .= '<url>';
        $xml .= '<loc>' . $baseUrl . '/#about</loc>';
        $xml .= '<lastmod>' . date('Y-m-d') . '</lastmod>';
        $xml .= '<changefreq>monthly</changefreq>';
        $xml .= '<priority>0.7</priority>';
        $xml .= '</url>';

        // Contact Anchor
        $xml .= '<url>';
        $xml .= '<loc>' . $baseUrl . '/#contact</loc>';
        $xml .= '<lastmod>' . date('Y-m-d') . '</lastmod>';
        $xml .= '<changefreq>monthly</changefreq>';
        $xml .= '<priority>0.8</priority>';
        $xml .= '</url>';

        $xml .= '</urlset>';

        return response($xml, 200, [
            'Content-Type' => 'application/xml',
        ]);
    }
}
