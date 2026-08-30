<?php

namespace Database\Seeders;

use App\Models\MediaItem;
use App\Models\Post;
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

        // 3. Media Items (Transformation Photos, Masterclass Moments & Video Talks)
        $mediaItems = [
            [
                'title' => 'Backwater Houseboat Honeymoon in Kerala',
                'slug' => 'backwater-houseboat-honeymoon-kerala',
                'type' => 'image',
                'category' => 'Moments & Talks',
                'file_path' => '/images/gallery/houseboat-honeymoon-backwaters.webp',
                'caption' => 'Rediscovering joy, shared laughter, and peaceful intimacy floating along the serene backwaters.',
                'is_featured' => true,
                'is_public' => true,
                'sort_order' => 1,
            ],
            [
                'title' => 'Hillside Honeymoon Suite in Munnar',
                'slug' => 'hillside-honeymoon-suite-munnar',
                'type' => 'image',
                'category' => 'Marriage Guidance',
                'file_path' => '/images/gallery/munnar-hillside-resort-honeymoon.webp',
                'caption' => 'Reconnecting with romance, tea-garden views, and celebration of a revived marital bond.',
                'is_featured' => true,
                'is_public' => true,
                'sort_order' => 2,
            ],
            [
                'title' => 'Peaceful Storytime & Family Harmony',
                'slug' => 'peaceful-storytime-family-harmony',
                'type' => 'image',
                'category' => 'Counselling & Therapy',
                'file_path' => '/images/gallery/kerala-muslim-family-home.webp',
                'caption' => 'A joyful, warm home evening with parents and children sharing stories in comfort and gratitude.',
                'is_featured' => true,
                'is_public' => true,
                'sort_order' => 3,
            ],
            [
                'title' => 'From Family Court to Restored Marriage',
                'slug' => 'from-family-court-to-restored-marriage',
                'type' => 'image',
                'category' => 'Marriage Guidance',
                'file_path' => '/images/gallery/family-court-reconciliation.webp',
                'caption' => 'A courageous couple walking hand-in-hand out of Kerala Family Court, having overcome divorce talks and restored their lifelong marital bond.',
                'is_featured' => true,
                'is_public' => true,
                'sort_order' => 4,
            ],
            [
                'title' => 'Sunset Cliff Honeymoon Moment in Varkala',
                'slug' => 'sunset-cliff-honeymoon-moment',
                'type' => 'image',
                'category' => 'Moments & Talks',
                'file_path' => '/images/gallery/sunset-cliff-honeymoon.webp',
                'caption' => 'Experiencing peaceful intimacy, mutual laughter, and honeymoon days once again overlooking the golden sunset coast.',
                'is_featured' => true,
                'is_public' => true,
                'sort_order' => 5,
            ],
            [
                'title' => 'Reconnected in Warm Luxury Resort Sanctuary',
                'slug' => 'reconnected-in-luxury-resort-sanctuary',
                'type' => 'image',
                'category' => 'Counselling & Therapy',
                'file_path' => '/images/gallery/luxury-resort-connection.webp',
                'caption' => 'Smiling, holding hands, and enjoying deep, uninterrupted quality conversation in a calm, comforting atmosphere.',
                'is_featured' => true,
                'is_public' => true,
                'sort_order' => 6,
            ],
            [
                'title' => 'Joyful Beach Celebration with Family',
                'slug' => 'joyful-beach-celebration-family',
                'type' => 'image',
                'category' => 'Marriage Guidance',
                'file_path' => '/images/gallery/kovalam-beach-celebration.webp',
                'caption' => 'Celebrating restored marital harmony, love, and family blessing along the serene Kerala coastline.',
                'is_featured' => true,
                'is_public' => true,
                'sort_order' => 7,
            ],
            [
                'title' => 'Peaceful and Loving Family Home Life',
                'slug' => 'peaceful-loving-family-home-life',
                'type' => 'image',
                'category' => 'Counselling & Therapy',
                'file_path' => '/images/gallery/loving-family-home.webp',
                'caption' => 'A secure, harmonious family evening at home where parents and children bond in warmth, safety, and mutual joy.',
                'is_featured' => true,
                'is_public' => true,
                'sort_order' => 8,
            ],
            [
                'title' => 'Couples Synergy & Communication Frameworks',
                'slug' => 'couples-synergy-communication-frameworks',
                'type' => 'embed',
                'category' => 'Moments & Talks',
                'embed_url' => 'https://www.youtube.com/watch?v=dQw4w9WgXcQ',
                'thumbnail_path' => '/images/gallery/luxury-resort-connection.webp',
                'duration' => '08:45',
                'caption' => 'Key insights on navigating expectations, daily emotional transparency, and constructive disagreement for married couples.',
                'is_featured' => true,
                'is_public' => true,
                'sort_order' => 9,
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

        // 5. Educational Blog Articles
        $posts = [
            [
                'title' => 'From Divorce Talks to Honeymoon Days: How We Guide Strained Marriages to Lasting Peace',
                'slug' => 'from-divorce-talks-to-honeymoon-days',
                'category' => 'Marriage Guidance',
                'read_time' => '6 min read',
                'is_featured' => true,
                'is_published' => true,
                'published_at' => now()->subDays(2),
                'cover_image' => '/images/gallery/family-court-reconciliation.webp',
                'excerpt' => 'When couples reach the edge of separation, miscommunication and unhealed emotional wounds often mask deep, underlying love. Discover the clinical framework that helps couples dismantle resentment and rekindle intimacy.',
                'meta_title' => 'From Divorce Talks to Honeymoon Days | Marriage Guidance by Jefna Hameed',
                'meta_description' => 'Discover how professional couples counseling dismantles toxic cycles and restores lasting emotional intimacy in marriage.',
                'body' => <<<MARKDOWN
When a couple arrives at the difficult crossroad of discussing separation or divorce, emotions are running high, trust has eroded, and exhaustion has set in. Yet, in over a decade of clinical relationship counseling, one truth remains consistently clear:

> *"Most marriages do not break because love disappeared; they break because miscommunication, defensiveness, and unresolved hurt built walls too high to climb alone."*

---

### The Three Silent Killers of Marital Intimacy

Before couples contemplate legal separation, their daily relationship dynamics typically undergo three subtle, destructive phases:

1. **The Stonewalling Pattern:** Rather than resolving disagreements, one or both partners withdraw emotionally, creating an icy wall of silence.
2. **Hidden Resentment & Scorekeeping:** Small compromises made without genuine consent accumulate into bitterness, where every past mistake is brought up in arguments.
3. **Loss of Emotional Safety:** When opening up about vulnerabilities is met with criticism or dismissiveness, partners stop sharing their authentic feelings.

---

### The 4-Step Clinical Framework to Restore Your Marriage

Through structured, non-judgmental guidance, we guide couples through four essential milestones:

* **Step 1: De-escalation & Safe Ground Rules:** Halting destructive arguments and replacing blame with neutral, curiosity-based communication.
* **Step 2: Identifying Core Attachment Needs:** Understanding why specific behaviors trigger deep fear, loneliness, or frustration in each partner.
* **Step 3: Intentional Emotional Transparency:** Structured dialogue where both partners share hidden fears without defensiveness.
* **Step 4: Rebuilding Romance & Honeymoon Connection:** Cultivating weekly rituals, shared appreciation, and rekindled emotional and physical intimacy.

---

### Taking the First Courageous Step

Healing a marriage does not require both partners to have 100% confidence on day one; it simply requires the willingness of one person to say: *"I care enough to explore a healthier way forward."*

Whether your spouse is hesitant or eager to join, beginning with a confidential individual assessment provides the clarity and direction needed to transform your home.
MARKDOWN
            ],
            [
                'title' => 'Recognizing the 5 Subtle Red Flags in Toxic Relationships Before It\'s Too Late',
                'slug' => '5-subtle-red-flags-in-toxic-relationships',
                'category' => 'Toxic Relationship Recovery',
                'read_time' => '5 min read',
                'is_featured' => true,
                'is_published' => true,
                'published_at' => now()->subDays(5),
                'cover_image' => '/images/gallery/sunset-cliff-honeymoon.webp',
                'excerpt' => 'Gaslighting, intermittent reinforcement, and emotional breadcrumbing are rarely obvious on day one. Learn how to identify toxic behavioral patterns and protect your mental well-being.',
                'meta_title' => '5 Subtle Red Flags in Toxic Relationships | Jefna Hameed',
                'meta_description' => 'Learn the psychological warning signs of manipulative and emotionally draining relationships from certified family counselor Jefna Hameed.',
                'body' => <<<MARKDOWN
Toxic relationships rarely start with open hostility. In the beginning, they often feel intense, deeply romantic, and full of promises. Psychologically, this initial phase is known as "love bombing."

However, over time, subtle patterns begin to emerge that slowly erode your self-esteem, self-trust, and mental peace.

---

### 1. Chronic Gaslighting & Reality Invalidation
When you express hurt or point out an inconsistency, a toxic partner rarely acknowledges your feelings. Instead, you hear:
* *"You are overreacting."*
* *"That never happened; you are imagining things."*
* *"You are too sensitive to handle a normal joke."*

Over months, this constant invalidation causes you to doubt your own memory and judgment.

---

### 2. Intermittent Reinforcement (The Rollercoaster)
One day they are affectionate, attentive, and warm; the next day they are cold, distant, and critical without explanation. This unpredictability creates an addictive neurochemical cycle (trauma bond) where you are constantly walking on eggshells just to earn their approval.

---

### 3. Gradual Isolation from Family & Friends
A manipulative partner subtly creates friction between you and your support network:
* Questioning your friends' loyalty.
* Making you feel guilty for spending time with your parents or siblings.
* Ensuring they become your sole emotional anchor.

---

### 4. Zero Accountability & Perpetual Victimhood
Notice how they apologize. Toxic apologies usually shift blame back onto you: *"I only raised my voice because you provoked me."* There is never true remorse or lasting behavioral change.

---

### 5. Weaponized Silent Treatment
Healthy adults take space to cool down, but communicate when they will return. Toxic silent treatment is used as a punitive weapon to force you into apologizing, even when you did nothing wrong.

---

### Breaking the Cycle

If you recognize these dynamics in your relationship, remember that awareness is the first and most powerful step towards reclaiming your self-worth and peace of mind.
MARKDOWN
            ],
            [
                'title' => 'Setting Unshakable Emotional Boundaries Without Feeling Guilty: A Practical Guide for Women',
                'slug' => 'setting-emotional-boundaries-without-guilt',
                'category' => 'Women\'s Empowerment',
                'read_time' => '4 min read',
                'is_featured' => false,
                'is_published' => true,
                'published_at' => now()->subDays(9),
                'cover_image' => '/images/gallery/luxury-resort-connection.webp',
                'excerpt' => 'Why saying \'no\' is an act of deep self-respect rather than selfishness. Practical assertiveness scripts to protect your peace in family and marital relationships.',
                'meta_title' => 'Setting Emotional Boundaries Without Guilt | Jefna Hameed',
                'meta_description' => 'Practical psychology guide on setting healthy personal boundaries for women in relationships and family life.',
                'body' => <<<MARKDOWN
In our culture, women are often conditioned to believe that sacrifice, constant accommodation, and silencing their own needs are proof of love and dedication.

Yet, chronic self-abandonment leads to emotional burnout, deep resentment, and physical anxiety.

---

### What a Healthy Boundary Truly Is

A boundary is **not** an ultimatum to control another person. A boundary is simply a clear, respectful declaration of **what you will and will not participate in to protect your own peace.**

> *"Boundaries are the distance at which I can love you and love myself simultaneously."*

---

### 3 Practical Boundary Scripts for Everyday Life

#### Scenario 1: When a relative or partner speaks disrespectfully
* **Old Response:** Staying quiet while holding back tears, or exploding in anger later.
* **Empowered Boundary:** *"I want to hear your perspective, but I will not continue this conversation if you raise your voice. Let's speak when we can talk calmly."*

#### Scenario 2: When overwhelmed with unmanageable demands
* **Old Response:** Saying yes out of fear of conflict, then feeling bitter and exhausted.
* **Empowered Boundary:** *"I care about supporting the family, but I do not have the bandwidth to take this on right now."*

#### Scenario 3: Unsolicited criticism about your life choices or parenting
* **Old Response:** Defending and over-explaining yourself.
* **Empowered Boundary:** *"I appreciate your concern, but my partner and I have made our decision on this."*

---

### Overcoming the Guilt Wave

When you start setting boundaries, people accustomed to your silence may react with guilt-tripping or anger. **This does not mean your boundary is wrong; it means the boundary was necessary.**
MARKDOWN
            ],
            [
                'title' => 'Cross-Cultural & NRI Marital Stress: Navigating Family Expectations Across Distance',
                'slug' => 'nri-marital-stress-family-expectations',
                'category' => 'Family Systems',
                'read_time' => '5 min read',
                'is_featured' => false,
                'is_published' => true,
                'published_at' => now()->subDays(14),
                'cover_image' => '/images/gallery/houseboat-honeymoon-backwaters.webp',
                'excerpt' => 'Couples living abroad or balancing joint family traditions often face unique pressures. How structured counselling creates a unified marital sanctuary.',
                'meta_title' => 'NRI & Cross-Cultural Marital Guidance | Jefna Hameed',
                'meta_description' => 'Expert relationship counseling for NRI couples and families navigating long-distance strain and dual cultural dynamics.',
                'body' => <<<MARKDOWN
For thousands of Malayali couples living in the UAE, GCC countries, the UK, Europe, or the Americas, married life carries unique systemic challenges.

While professional careers and living standards thrive abroad, the lack of immediate family support, long working hours, and differing expectations regarding extended families back home can strain even the strongest marital bonds.

---

### Common NRI Marital Challenges

1. **The Double Burden of Domestic & Professional Roles:** In nuclear setups abroad without household assistance, daily division of labor often sparks recurring resentment.
2. **Financial Pressures & Remittance Conflicts:** Disagreements on supporting extended family or investments back in Kerala.
3. **Emotional Loneliness in Distance:** When one spouse works long hours or travels frequently, the staying partner can feel isolated and unsupported.
4. **Vacation Stress vs. Quality Time:** Spending annual leaves visiting relatives under pressure rather than rejuvenating marital romance.

---

### Establishing the "Marital First" Principle

A resilient marriage requires both partners to view their marital bond as the primary team. Online confidential counseling allows couples anywhere in the world to schedule sessions in their local time zone and align on core values.
MARKDOWN
            ],
            [
                'title' => 'ഭാര്യയും ഭർത്താവും: ദാമ്പത്യത്തിലെ ആശയവിനിമയ വിള്ളലുകൾ എങ്ങനെ മാറ്റിയെടുക്കാം?',
                'slug' => 'kerala-marriage-communication-malayalam-guidance',
                'category' => 'Malayalam Guidance',
                'read_time' => '5 min read',
                'is_featured' => true,
                'is_published' => true,
                'published_at' => now()->subDays(18),
                'cover_image' => '/images/gallery/kerala-muslim-family-home.webp',
                'excerpt' => 'വിവാഹജീവിതത്തിൽ വഴക്കുകൾ സ്വാഭാവികമാണ്, എന്നാൽ നിരന്തരമായ നിശബ്ദതയും പരസ്പരമുള്ള പഴിചാരലും ബന്ധങ്ങളെ തകർക്കും. ശാസ്ത്രീയമായ കൗൺസിലിംഗിലൂടെ സന്തോഷമുള്ള കുടുംബജീവിതം എങ്ങനെ വീണ്ടെടുക്കാം.',
                'meta_title' => 'ഭാര്യയും ഭർത്താവും: ദാമ്പത്യ മാർഗ്ഗനിർദ്ദേശം | Jefna Hameed',
                'meta_description' => 'കുടുംബ കൗൺസിലർ ജെഫ്ന ഹമീദിന്റെ ദാമ്പത്യ മാർഗ്ഗനിർദ്ദേശങ്ങൾ — ബന്ധങ്ങളിലെ ആശയവിനിമയം എങ്ങനെ മെച്ചപ്പെടുത്താം.',
                'body' => <<<MARKDOWN
വിവാഹജീവിതത്തിൽ അഭിപ്രായവ്യത്യാസങ്ങളും ചെറിയ വഴക്കുകളും സ്വാഭാവികമാണ്. എന്നാൽ ആ വഴക്കുകൾ പരിഹരിക്കപ്പെടാതെ മനസ്സിൽ കുമിഞ്ഞുകൂടുമ്പോൾ, അത് ദാമ്പത്യത്തിലെ സ്നേഹത്തെയും സമാധാനത്തെയും ഇല്ലാതാക്കുന്നു.

> *"പരസ്പരം കുറ്റപ്പെടുത്തലുകൾക്ക് പകരം, പങ്കാളിയുടെ മാനസികാവസ്ഥ മനസ്സിലാക്കാനും കേൾക്കാനും തയ്യാറാവുമ്പോൾ ഏത് വലിയ പ്രശ്നവും പരിഹരിക്കാൻ സാധിക്കും."*

---

### ദാമ്പത്യത്തിൽ ശ്രദ്ധിക്കേണ്ട പ്രധാന കാര്യങ്ങൾ:

1. **കേൾക്കാനുള്ള മനസ്സ് (Active Listening):** പങ്കാളി സംസാരിക്കുമ്പോൾ മറുപടി കൊടുക്കാൻ വേണ്ടി മാത്രം കേൾക്കാതെ, അവരുടെ വികാരങ്ങളെ മനസ്സിലാക്കാൻ ശ്രമിക്കുക.
2. **പഴയ കാര്യങ്ങൾ വലിച്ചിഴയ്ക്കാതിരിക്കുക:** ഇന്നത്തെ പ്രശ്നത്തിന് ഇന്നത്തെ കാരണം മാത്രം ചർച്ച ചെയ്യുക. കഴിഞ്ഞുപോയ തെറ്റുകൾ വീണ്ടും കുത്തിപ്പൊക്കാതിരിക്കുക.
3. **നിശബ്ദതയുടെ മതിൽ തകർക്കുക:** വഴക്കിനു ശേഷം ദിവസങ്ങളോളം മിണ്ടാതിരിക്കുന്നത് (Silent Treatment) പ്രശ്നം കൂടുതൽ വഷളാക്കുകയേ ഉള്ളൂ.
4. **പരസ്പര ബഹുമാനം:** ദേഷ്യം വരുമ്പോഴും വാക്കുകളിൽ മാന്യത പുലർത്തുക.

---

### പ്രൊഫഷണൽ കൗൺസിലിംഗിന്റെ പ്രാധാന്യം

ദാമ്പത്യത്തിലെ പ്രശ്നങ്ങൾ വഷളായി വിവാഹമോചനത്തിന്റെ വക്കിൽ എത്തുന്നതിനു മുൻപ് തന്നെ, ശാസ്ത്രീയമായ കൗൺസിലിംഗിലൂടെ പരസ്പര ധാരണ വീണ്ടെടുക്കാൻ കഴിയും.

നിങ്ങളുടെ ദാമ്പത്യത്തിൽ വ്യക്തതയും സമാധാനവും ആഗ്രഹിക്കുന്നുവെങ്കിൽ, തികച്ചും സ്വകാര്യവും വിശ്വസനീയവുമായ ഒരു കൗൺസിലിംഗ് സെഷൻ ബുക്ക് ചെയ്യാം.
MARKDOWN
            ],
        ];

        foreach ($posts as $post) {
            Post::updateOrCreate(
                ['slug' => $post['slug']],
                $post
            );
        }
    }
}

