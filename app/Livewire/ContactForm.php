<?php

namespace App\Livewire;

use App\Models\Inquiry;
use Livewire\Component;

class ContactForm extends Component
{
    public string $name = '';
    public string $phone = '';
    public string $email = '';
    public string $service_type = 'Family & Couple Counselling';
    public string $preferred_slot = 'Evening (5:30 PM - 8:30 PM)';
    public string $session_mode = 'Online (Video/Audio)';
    public string $message = '';
    public bool $isSuccess = false;

    protected array $rules = [
        'name' => 'required|min:2|max:100',
        'phone' => 'required|min:8|max:20',
        'email' => 'nullable|email|max:150',
        'service_type' => 'required|string',
        'preferred_slot' => 'required|string',
        'session_mode' => 'required|string',
        'message' => 'required|min:5|max:1000',
    ];

    public function submit()
    {
        $validated = $this->validate();

        Inquiry::create([
            'name' => $validated['name'],
            'phone' => $validated['phone'],
            'email' => $validated['email'] ?? null,
            'service_type' => $validated['service_type'],
            'preferred_slot' => $validated['preferred_slot'],
            'session_mode' => $validated['session_mode'],
            'message' => $validated['message'],
            'status' => 'new',
            'ip_address' => request()->ip(),
        ]);

        $this->isSuccess = true;
    }

    public function resetForm()
    {
        $this->name = '';
        $this->phone = '';
        $this->email = '';
        $this->message = '';
        $this->isSuccess = false;
    }

    public function render()
    {
        return view('livewire.contact-form');
    }
}
