<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title', 'Jefna Hameed | Family Counselor & Relationship Guidance')</title>
    <meta name="description" content="@yield('meta_description', 'Break free from toxic patterns, rebuild self-worth, and foster healthy family bonds with Jefna Hameed, Family Counselor. Confidential online and in-person counselling.')">
    <meta name="keywords" content="Family Counselor Kerala, Family Counsellor, Marriage Counselor Kerala, Toxic Relationship Workshop, Couples Therapy Kochi, Marriage Counselling Malayalam, Boundary Coaching Women, Jefna Hameed">
    <link rel="canonical" href="{{ url()->current() }}">

    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:title" content="@yield('title', 'Jefna Hameed | Family Counselor & Relationship Specialist')">
    <meta property="og:description" content="@yield('meta_description', 'Professional family counseling and relationship guidance with Jefna Hameed.')">
    <meta property="og:image" content="{{ asset('images/og-preview.webp') }}">

    <!-- Twitter Card -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="@yield('title', 'Jefna Hameed | Family Counselor & Relationship Specialist')">
    <meta name="twitter:description" content="@yield('meta_description', 'Professional family counseling and relationship guidance with Jefna Hameed.')">
    <meta name="twitter:image" content="{{ asset('images/og-preview.webp') }}">

    <!-- Favicons & Theme Color -->
    <meta name="theme-color" content="#3B4E3B">

    <!-- Google Fonts Preconnect -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,500;0,600;0,700;1,400;1,600&family=Noto+Serif+Malayalam:wght@400;500;600;700&family=Playfair+Display:ital,wght@0,500;0,600;0,700;0,800;1,400;1,600&family=Plus+Jakarta+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,400&display=swap" rel="stylesheet">

    <!-- Schema.org JSON-LD -->
    <script type="application/ld+json">
    {!! json_encode([
      '@context' => 'https://schema.org',
      '@graph' => [
        [
          '@type' => 'LocalBusiness',
          '@id' => url('/') . '/#business',
          'name' => 'Jefna Hameed — Family Counselor & Relationship Guidance',
          'description' => 'Family counselor specializing in relationship dynamics, couples therapy, toxic relationship recovery, and women\'s boundary coaching.',
          'url' => url('/'),
          'telephone' => '+918590415943',
          'priceRange' => '$$',
          'areaServed' => ['Kerala', 'India', 'United Arab Emirates', 'Worldwide (Online)'],
          'availableService' => [
            ['@type' => 'Service', 'name' => 'Family & Couple Counselling'],
            ['@type' => 'Service', 'name' => '1-on-1 Personal Counselling'],
            ['@type' => 'Service', 'name' => 'Women\'s Personal Growth & Boundary Coaching']
          ]
        ],
        [
          '@type' => 'Course',
          '@id' => url('/') . '/#workshop',
          'name' => 'Avoid Toxic Relationships: Masterclass for Women',
          'description' => 'A practical relationship masterclass for women to identify red flags, establish healthy boundaries, and heal from toxic dynamics.',
          'provider' => [
            '@type' => 'Person',
            'name' => 'Jefna Hameed',
            'jobTitle' => 'Family Counselor & Relationship Specialist'
          ]
        ]
      ]
    ], JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT) !!}
    </script>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @livewireStyles
</head>
<body class="bg-[#FAF6F0] text-[#261B14] font-sans antialiased min-h-screen flex flex-col selection:bg-[#54321A] selection:text-[#FAF6F0]">
    <!-- Top Emergency Helpline Strip -->
    <x-emergency-banner />

    <!-- Main Navigation Header -->
    <x-navbar />

    <!-- Main Page Content -->
    <main class="flex-grow">
        @yield('content')
    </main>

    <!-- Global Livewire Booking Modal -->
    <livewire:book-consultation-modal />

    <!-- Floating WhatsApp CTA -->
    <x-floating-whatsapp />

    <!-- Global Footer -->
    <x-footer />

    @livewireScripts
</body>
</html>
