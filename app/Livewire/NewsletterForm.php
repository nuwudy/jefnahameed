<?php

namespace App\Livewire;

use App\Models\NewsletterSubscriber;
use Livewire\Component;

class NewsletterForm extends Component
{
    public string $email = '';
    public bool $isSubscribed = false;

    protected array $rules = [
        'email' => 'required|email|max:150|unique:newsletter_subscribers,email',
    ];

    protected array $messages = [
        'email.required' => 'Please enter your email address.',
        'email.email' => 'Please provide a valid email.',
        'email.unique' => 'You are already subscribed to our newsletter!',
    ];

    public function subscribe()
    {
        $this->validate();

        NewsletterSubscriber::create([
            'email' => $this->email,
            'status' => 'subscribed',
            'ip_address' => request()->ip(),
        ]);

        $this->isSubscribed = true;
    }

    public function render()
    {
        return view('livewire.newsletter-form');
    }
}
