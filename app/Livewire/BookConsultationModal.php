<?php

namespace App\Livewire;

use App\Models\Inquiry;
use Livewire\Component;

class BookConsultationModal extends Component
{
    public bool $isOpen = false;
    public string $name = '';
    public string $phone = '';
    public string $email = '';
    public string $service_type = '1-on-1 Clinical Therapy';
    public string $preferred_slot = 'Morning (10:00 AM - 1:00 PM)';
    public string $session_mode = 'Online (Confidential Video/Audio)';
    public string $message = '';
    public bool $isSuccess = false;
    public ?string $whatsappUrl = null;

    protected array $rules = [
        'name' => 'required|min:2|max:100',
        'phone' => 'required|min:8|max:20',
        'email' => 'nullable|email|max:150',
        'service_type' => 'required|string',
        'preferred_slot' => 'required|string',
        'session_mode' => 'required|string',
        'message' => 'nullable|string|max:1000',
    ];

    protected $listeners = [
        'open-booking-modal' => 'openModalWithService',
    ];

    public function openModalWithService(?string $service = null): void
    {
        if ($service) {
            $this->service_type = $service;
        }
        $this->isOpen = true;
        $this->isSuccess = false;
    }

    public function closeModal(): void
    {
        $this->isOpen = false;
    }

    public function submit(): void
    {
        $validated = $this->validate();

        Inquiry::create([
            'name' => $validated['name'],
            'phone' => $validated['phone'],
            'email' => $validated['email'] ?? null,
            'service_type' => $validated['service_type'],
            'preferred_slot' => $validated['preferred_slot'],
            'session_mode' => $validated['session_mode'],
            'message' => $validated['message'] ?? null,
            'status' => 'new',
            'ip_address' => request()->ip(),
        ]);

        // Generate WhatsApp fast-dispatch message
        $waText = "Hello Jefna Hameed,%0A%0AI would like to book a consultation session.%0A%0A*Name:* " . urlencode($validated['name']) .
            "%0A*Phone:* " . urlencode($validated['phone']) .
            "%0A*Service:* " . urlencode($validated['service_type']) .
            "%0A*Preferred Slot:* " . urlencode($validated['preferred_slot']) .
            "%0A*Mode:* " . urlencode($validated['session_mode']) .
            ($validated['message'] ? ("%0A*Note:* " . urlencode($validated['message'])) : "");

        $this->whatsappUrl = "https://wa.me/918590415943?text=" . $waText;
        $this->isSuccess = true;
    }

    public function render()
    {
        return view('livewire.book-consultation-modal');
    }
}
