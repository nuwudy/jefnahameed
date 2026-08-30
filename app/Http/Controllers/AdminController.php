<?php

namespace App\Http\Controllers;

use App\Models\Inquiry;
use App\Models\MediaItem;
use App\Models\NewsletterSubscriber;
use App\Models\WorkshopRegistration;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class AdminController extends Controller
{
    public function login()
    {
        if (Auth::check()) {
            return redirect()->route('admin.dashboard');
        }

        return view('pages.admin.login', [
            'metaTitle' => 'Admin Portal Login | Jefna Hameed',
        ]);
    }

    public function dashboard(): View
    {
        $inquiriesCount = Inquiry::count();
        $recentInquiries = Inquiry::orderBy('created_at', 'desc')->take(10)->get();
        $registrationsCount = WorkshopRegistration::count();
        $subscribersCount = NewsletterSubscriber::count();
        $mediaCount = MediaItem::count();

        return view('pages.admin.dashboard', [
            'metaTitle' => 'Admin Management Dashboard | Jefna Hameed',
            'inquiriesCount' => $inquiriesCount,
            'recentInquiries' => $recentInquiries,
            'registrationsCount' => $registrationsCount,
            'subscribersCount' => $subscribersCount,
            'mediaCount' => $mediaCount,
        ]);
    }

    public function inquiries(): View
    {
        $inquiries = Inquiry::orderBy('created_at', 'desc')->paginate(20);

        return view('pages.admin.inquiries', [
            'metaTitle' => 'Consultation Inquiries | Admin Portal',
            'inquiries' => $inquiries,
        ]);
    }

    public function registrations(): View
    {
        $registrations = WorkshopRegistration::with('workshop')->orderBy('created_at', 'desc')->paginate(20);

        return view('pages.admin.registrations', [
            'metaTitle' => 'Workshop Enrollments | Admin Portal',
            'registrations' => $registrations,
        ]);
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('admin.login');
    }
}
