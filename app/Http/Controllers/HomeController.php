<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Testimonial;
use App\Models\Workshop;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $featuredWorkshop = Workshop::where('is_featured', true)
            ->where('is_active', true)
            ->first();

        $allWorkshops = Workshop::where('is_active', true)
            ->orderBy('is_featured', 'desc')
            ->get();

        $testimonials = Testimonial::where('is_featured', true)
            ->orderBy('sort_order', 'asc')
            ->get();

        $recentPosts = Post::published()->take(3)->get();

        $services = [
            [
                'id' => 'couple-counselling',
                'title' => 'Family & Couple Counselling',
                'malayalam_title' => 'ഭാര്യയും ഭർത്താവും — സ്നേഹം മനസ്സിലാക്കുമ്പോൾ ജീവിതം മനോഹരമാവും',
                'badge' => 'High Demand',
                'tagline' => 'Bridging gaps in communication, restoring emotional intimacy, and navigating marital transitions.',
                'description' => 'A safe, structured, and non-judgmental therapeutic space for couples and families. Whether dealing with repetitive arguments, infidelity, intimacy decline, or in-law expectations, we help you understand emotional blueprints and reconnect deeply.',
                'benefits' => [
                    'De-escalating recurring marital conflicts',
                    'Rebuilding eroded trust & emotional transparency',
                    'Parenting & extended family dynamic alignment',
                    'Premarital readiness and expectations mapping'
                ],
                'icon' => 'couple'
            ],
            [
                'id' => 'clinical-therapy',
                'title' => '1-on-1 Clinical Therapy Sessions',
                'malayalam_title' => 'വ്യക്തിഗത കൗൺസിലിംഗും മാനസികാരോഗ്യ പിന്തുണയും',
                'badge' => 'Evidence Based',
                'tagline' => 'Confidential therapy for anxiety, depression, emotional exhaustion, and past trauma.',
                'description' => 'Tailored individual therapy sessions utilizing Cognitive Behavioral Therapy (CBT), Acceptance and Commitment Therapy (ACT), and compassion-focused psychological frameworks to help you process pain and regain equilibrium.',
                'benefits' => [
                    'Overcoming chronic anxiety & panic triggers',
                    'Managing clinical burnout & depressive mood episodes',
                    'Healing grief, loss, and emotional distress',
                    'Structured coping strategies for life transitions'
                ],
                'icon' => 'therapy'
            ],
            [
                'id' => 'boundary-coaching',
                'title' => "Women's Growth & Boundary Coaching",
                'malayalam_title' => 'സ്വന്തം ആത്മാഭിമാനവും ആരോഗ്യകരമായ അതിരുകളും',
                'badge' => 'Empowerment Focus',
                'tagline' => 'Overcome people-pleasing, rebuild self-esteem, and set guilt-free boundaries in relationships.',
                'description' => 'Specialized psychological coaching focused on helping women reclaim their emotional autonomy, identify narcissistic abuse and manipulative dynamics, and build unwavering self-worth without guilt.',
                'benefits' => [
                    'Overcoming people-pleasing and chronic guilt',
                    'Recognizing gaslighting and subtle control tactics',
                    'Assertive communication in family and marriage',
                    'Rebuilding identity and authentic self-confidence'
                ],
                'icon' => 'boundary'
            ]
        ];

        return view('pages.home', compact('featuredWorkshop', 'allWorkshops', 'testimonials', 'services', 'recentPosts'));
    }
}
