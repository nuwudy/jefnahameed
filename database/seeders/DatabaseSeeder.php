<?php

namespace Database\Seeders;

use App\Models\MediaItem;
use App\Models\Testimonial;
use App\Models\User;
use App\Models\Workshop;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // 0. Default Admin User
        User::updateOrCreate(
            ['email' => 'admin@jefnahameed.com'],
            [
                'name' => 'Jefna Hameed',
                'password' => Hash::make('Jefna@2026!'),
            ]
        );

        // 1. Featured Masterclass: "Avoid Toxic Relationships"
        Workshop::updateOrCreate(
            ['slug' => 'avoid-toxic-relationships'],
            [
                'title' => 'Avoid Toxic Relationships',
                'subtitle' => 'A Practical, Psychological Masterclass for Women to Recognize Red Flags, Break Cycles & Heal',
                'badge' => 'Live Interactive Masterclass',
                'description' => 'A step-by-step guidance workshop designed to help women recognize manipulation, set unwavering personal boundaries, recover their self-worth, and foster emotionally safe relationships.',
                'curriculum' => [
                    [
                        'title' => 'Identifying Toxic Patterns & Subtle Red Flags',
                        'desc' => 'Understand gaslighting, emotional breadcrumbing, guilt-tripping, and intermittent reinforcement in relationships.',
                    ],
                    [
                        'title' => 'Boundary Setting Without Guilt',
                        'desc' => 'Master practical assertiveness scripts and emotional boundaries to protect your peace without unnecessary confrontation.',
                    ],
                    [
                        'title' => 'Rebuilding Deep Self-Worth & Identity',
                        'desc' => 'Overcome people-pleasing tendencies and anchor your validation internally rather than seeking it from toxic partners.',
                    ],
                    [
                        'title' => 'Healing from Emotional Abuse & Trauma Bonds',
                        'desc' => 'Proven strategies to break neurological trauma bonds and recover mental clarity and self-trust.',
                    ],
                    [
                        'title' => 'Cultivating Safe & Reciprocal Connections',
                        'desc' => 'Learn the green flags, emotional readiness, and communication frameworks of healthy, nurturing relationships.',
                    ],
                ],
                'duration' => '2.5 Hours Live + 30 Mins Confidential Q&A',
                'schedule' => 'Upcoming Weekend Batch — Online via Private Zoom',
                'fee' => 999.00,
                'original_fee' => 1999.00,
                'language' => 'Malayalam & English (Bilingual friendly)',
                'target_audience' => 'Women, Young Adults & Anyone Seeking Clarity in Relationships',
                'upcoming_batches' => [
                    'Saturday, 14th September 2024 • 7:30 PM - 10:00 PM IST',
                    'Sunday, 22nd September 2024 • 10:00 AM - 12:30 PM IST',
                    'Saturday, 28th September 2024 • 7:30 PM - 10:00 PM IST',
                ],
                'is_featured' => true,
                'is_active' => true,
            ]
        );

        // 2. Additional Workshop 2: Premarital & Couple Synergy
        Workshop::updateOrCreate(
            ['slug' => 'premarital-relationship-synergy'],
            [
                'title' => 'Premarital & Couples Synergy Masterclass',
                'subtitle' => 'Building a Foundation of Mutual Respect, Emotional Intimacy, and Healthy Communication',
                'badge' => 'Couples & Singles',
                'description' => 'ഭാര്യയും ഭർത്താവും — സ്നേഹം മനസ്സിലാക്കുമ്പോൾ ജീവിതം മനോഹരമാവും. A guided framework for couples and individuals preparing for marriage to navigate finances, emotional expectations, and conflict resolution.',
                'curriculum' => [
                    ['title' => 'Navigating Expectations vs Reality', 'desc' => 'Aligning life goals, family dynamics, and personal autonomy.'],
                    ['title' => 'Conflict Resolution Frameworks', 'desc' => 'How to argue constructively without hurting emotional safety.'],
                    ['title' => 'Financial & Emotional Transparency', 'desc' => 'Creating shared values and mutual respect in daily life.'],
                ],
                'duration' => '3 Hours Intensive',
                'schedule' => 'Monthly Weekend Cohort',
                'fee' => 1499.00,
                'original_fee' => 2499.00,
                'language' => 'Malayalam & English',
                'target_audience' => 'Couples, Engaged Individuals & Newlyweds',
                'upcoming_batches' => [
                    'Sunday, 29th September 2024 • 4:00 PM - 7:00 PM IST',
                ],
                'is_featured' => false,
                'is_active' => true,
            ]
        );

        // 3. Media Items (Photos, Masterclass Moments & Video Talks)
        $mediaItems = [
            [
                'title' => 'Jefna Hameed — Relationship Transformation & Clinical Consultation',
                'slug' => 'jefna-hameed-portrait-consultation',
                'type' => 'image',
                'category' => 'Counselling & Therapy',
                'file_path' => '/images/jefna-hameed.webp',
                'caption' => 'Confidential 1-on-1 personal guidance and couple counseling sessions conducted both in-person and online worldwide.',
                'is_featured' => true,
                'is_public' => true,
                'sort_order' => 1,
            ],
            [
                'title' => 'Avoid Toxic Relationships — Masterclass Highlights',
                'slug' => 'avoid-toxic-relationships-masterclass-highlights',
                'type' => 'image',
                'category' => 'Workshops & Events',
                'file_path' => '/images/jefna-hameed.webp',
                'caption' => 'An empowering interactive workshop guiding women to recognize subtle gaslighting, guilt-tripping, and restore inner emotional security.',
                'is_featured' => true,
                'is_public' => true,
                'sort_order' => 2,
            ],
            [
                'title' => 'Couples Synergy & Communication Frameworks',
                'slug' => 'couples-synergy-communication-frameworks',
                'type' => 'embed',
                'category' => 'Moments & Talks',
                'embed_url' => 'https://www.youtube.com/watch?v=dQw4w9WgXcQ',
                'thumbnail_path' => '/images/jefna-hameed.webp',
                'duration' => '08:45',
                'caption' => 'Key insights on navigating expectations, daily emotional transparency, and constructive disagreement for married couples.',
                'is_featured' => true,
                'is_public' => true,
                'sort_order' => 3,
            ],
            [
                'title' => 'Breaking Trauma Bonds & Emotional Boundary Setting',
                'slug' => 'breaking-trauma-bonds-emotional-boundaries',
                'type' => 'image',
                'category' => 'Relationship Guidance',
                'file_path' => '/images/jefna-hameed.webp',
                'caption' => 'Psychological tools and assertiveness scripts to maintain healthy personal boundaries without feeling guilty.',
                'is_featured' => true,
                'is_public' => true,
                'sort_order' => 4,
            ],
        ];

        foreach ($mediaItems as $item) {
            MediaItem::updateOrCreate(
                ['slug' => $item['slug']],
                $item
            );
        }

        // 4. Testimonials
        $testimonials = [
            [
                'client_name' => 'Fathima S.',
                'client_tag' => 'Workshop Participant — Avoid Toxic Relationships',
                'location' => 'Kochi / Online',
                'rating' => 5,
                'quote' => 'Jefna’s workshop opened my eyes to patterns I had normalized for years. Her empathetic, practical breakdown of gaslighting and emotional boundaries gave me the courage to choose my peace first.',
                'quote_ml' => 'ജെഫ്നയുടെ സെഷൻ എന്റെ ജീവിതത്തിലെ വലിയൊരു വഴിത്തിരിവായിരുന്നു. റിലേഷൻഷിപ്പിൽ അനുഭവപ്പെട്ടിരുന്ന മാനസിക ബുദ്ധിമുട്ടുകൾ തിരിച്ചറിയാനും സ്വന്തം ആത്മാഭിമാനം വീണ്ടെടുക്കാനും ഇത് എന്നെ സഹായിച്ചു.',
                'service_category' => 'Relationship Masterclass',
                'is_featured' => true,
                'sort_order' => 1,
            ],
            [
                'client_name' => 'Rahul & Deepa M.',
                'client_tag' => 'Couples Counselling Client',
                'location' => 'Calicut / In-Person & Online',
                'rating' => 5,
                'quote' => 'We were struggling with persistent miscommunication in our 4-year marriage. Jefna created a completely non-judgmental, balanced space where both of us felt heard. Our bond feels rejuvenated.',
                'quote_ml' => 'ഞങ്ങളുടെ ദാമ്പത്യത്തിലെ ആശയവിനിമയ പ്രശ്നങ്ങൾ മാറ്റിയെടുക്കാൻ ജെഫ്ന മാമിന്റെ കൗൺസിലിംഗ് വലിയ പങ്കുവഹിച്ചു. പരസ്പരം മനസ്സിലാക്കാൻ കഴിഞ്ഞത് ജീവിതം കൂടുതൽ മനോഹരമാക്കി.',
                'service_category' => 'Couples Counselling',
                'is_featured' => true,
                'sort_order' => 2,
            ],
            [
                'client_name' => 'Ananya K.',
                'client_tag' => '1-on-1 Personal Counselling Client',
                'location' => 'Dubai / Online',
                'rating' => 5,
                'quote' => 'Living abroad while dealing with relationship burnout felt overwhelming. Jefna’s structured guidance and warm presence made all the difference in my emotional recovery.',
                'quote_ml' => 'പ്രവാസജീവിതത്തിലെ സമ്മർദ്ദങ്ങളും വ്യക്തിജീവിതത്തിലെ ബുദ്ധിമുട്ടുകളും കൈകാര്യം ചെയ്യാൻ ജെഫ്നയുടെ കൗൺസിലിംഗ് സെഷനുകൾ വളരെ സഹായകരമായി. മികച്ച ഗൈഡൻസ് ആണ് ലഭിച്ചത്.',
                'service_category' => 'Personal Guidance',
                'is_featured' => true,
                'sort_order' => 3,
            ],
            [
                'client_name' => 'Dr. Shereen T.',
                'client_tag' => 'Personal Growth & Boundary Coaching',
                'location' => 'Trivandrum',
                'rating' => 5,
                'quote' => 'As a professional, setting boundaries with family and workplace was always guilt-inducing. Jefna helped me understand that boundary setting is an act of self-care and respect.',
                'quote_ml' => 'കുറ്റബോധമില്ലാതെ സ്വന്തം അതിരുകൾ നിശ്ചയിക്കാനും പോസിറ്റീവായ മാറ്റങ്ങൾ ഉണ്ടാക്കാനും ജെഫ്ന മാമിന്റെ ക്ലാസുകൾ എന്നെ പ്രാപ്തയാക്കി.',
                'service_category' => 'Boundary Coaching',
                'is_featured' => true,
                'sort_order' => 4,
            ],
        ];

        foreach ($testimonials as $t) {
            Testimonial::updateOrCreate(
                ['client_name' => $t['client_name']],
                $t
            );
        }
    }
}
