<?php

use App\Livewire\BookConsultationModal;
use App\Livewire\ContactForm;
use App\Livewire\NewsletterForm;
use App\Livewire\WorkshopEnrollment;
use App\Models\Inquiry;
use App\Models\NewsletterSubscriber;
use App\Models\Workshop;
use App\Models\WorkshopRegistration;
use Database\Seeders\DatabaseSeeder;
use Livewire\Livewire;

beforeEach(function () {
    $this->seed(DatabaseSeeder::class);
});

test('landing page loads successfully with essential branding and sections', function () {
    $response = $this->get('/');

    $response->assertStatus(200);
    $response->assertSee('Jefna Hameed');
    $response->assertSee('From Divorce Talks to Honeymoon Days');
    $response->assertSee('Reclaim Your Marriage');
    $response->assertSee('Relationship Transformation by Jefna Hameed');
    $response->assertSee('Avoid Toxic Relationships');
    $response->assertSee('Family Counselor');
    $response->assertSee('Family &amp; Couple Counselling', false);
});

test('sitemap xml endpoint returns valid xml content', function () {
    $response = $this->get('/sitemap.xml');

    $response->assertStatus(200);
    $response->assertHeader('Content-Type', 'application/xml');
    $response->assertSee('<urlset', false);
});

test('book consultation modal component submits and saves to database', function () {
    Livewire::test(BookConsultationModal::class)
        ->set('name', 'Deepa Nair')
        ->set('phone', '+919847012345')
        ->set('email', 'deepa@example.com')
        ->set('service_type', 'Family & Couple Counselling')
        ->set('preferred_slot', 'Evening (5:30 PM - 8:30 PM)')
        ->set('session_mode', 'Online (Confidential Video/Audio)')
        ->set('message', 'Looking for individual relationship support.')
        ->call('submit')
        ->assertSet('isSuccess', true);

    expect(Inquiry::where('email', 'deepa@example.com')->exists())->toBeTrue();
});

test('workshop enrollment component registers participant for selected batch', function () {
    $workshop = Workshop::first();

    Livewire::test(WorkshopEnrollment::class, ['workshop' => $workshop])
        ->set('name', 'Ranya K.')
        ->set('phone', '+919895012345')
        ->set('email', 'ranya@example.com')
        ->set('selectedBatch', $workshop->upcoming_batches[0] ?? 'Saturday Batch')
        ->call('enroll')
        ->assertSet('isEnrolled', true);

    expect(WorkshopRegistration::where('email', 'ranya@example.com')->exists())->toBeTrue();
});

test('contact form submits inquiry successfully', function () {
    Livewire::test(ContactForm::class)
        ->set('name', 'Sameer Ali')
        ->set('phone', '+919447012345')
        ->set('email', 'sameer@example.com')
        ->set('service_type', 'Family & Couple Counselling')
        ->set('message', 'Would like to inquire about couples counselling slots.')
        ->call('submit')
        ->assertSet('isSuccess', true);

    expect(Inquiry::where('email', 'sameer@example.com')->exists())->toBeTrue();
});

test('newsletter subscription registers new subscriber', function () {
    Livewire::test(NewsletterForm::class)
        ->set('email', 'newsletter.reader@example.com')
        ->call('subscribe')
        ->assertSet('isSubscribed', true);

    expect(NewsletterSubscriber::where('email', 'newsletter.reader@example.com')->exists())->toBeTrue();
});

test('media gallery page loads successfully with media items', function () {
    $response = $this->get('/media');

    $response->assertStatus(200);
    $response->assertSee('Media Library & Video Insights', false);
    $response->assertSee('Avoid Toxic Relationships');
});

test('media library manager allows adding and deleting media', function () {
    \Livewire\Livewire::test(\App\Livewire\MediaLibraryManager::class)
        ->set('title', 'Empowering Couple Harmony Masterclass')
        ->set('type', 'embed')
        ->set('category', 'Moments & Talks')
        ->set('embed_url', 'https://www.youtube.com/watch?v=dQw4w9WgXcQ')
        ->set('caption', 'A transformative talk for newlyweds.')
        ->call('save')
        ->assertSet('isSuccess', true);

    $item = \App\Models\MediaItem::where('title', 'Empowering Couple Harmony Masterclass')->first();
    expect($item)->not->toBeNull();

    \Livewire\Livewire::test(\App\Livewire\MediaLibraryManager::class)
        ->call('delete', $item->id)
        ->assertSet('isSuccess', true);

    expect(\App\Models\MediaItem::find($item->id))->toBeNull();
});

