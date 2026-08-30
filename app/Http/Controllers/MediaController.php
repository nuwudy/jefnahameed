<?php

namespace App\Http\Controllers;

use App\Models\MediaItem;
use Illuminate\Http\Request;
use Illuminate\View\View;

class MediaController extends Controller
{
    /**
     * Public Media Gallery Page
     */
    public function index(): View
    {
        return view('pages.media', [
            'metaTitle' => 'Media & Gallery | Jefna Hameed — Family Counselor',
            'metaDescription' => 'Explore photos, interactive masterclasses, relationship guidance videos, and counseling moments with Jefna Hameed.',
        ]);
    }

    /**
     * Media Library Management Dashboard
     */
    public function manage(): View
    {
        return view('pages.media-admin', [
            'metaTitle' => 'Media Library Manager | Jefna Hameed',
        ]);
    }
}
