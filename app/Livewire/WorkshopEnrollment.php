<?php

namespace App\Livewire;

use App\Models\Workshop;
use App\Models\WorkshopRegistration;
use Livewire\Component;

class WorkshopEnrollment extends Component
{
    public Workshop $workshop;
    public string $name = '';
    public string $phone = '';
    public string $email = '';
    public string $selectedBatch = '';
    public string $notes = '';
    public bool $isEnrolled = false;
    public ?string $whatsappUrl = null;

    protected array $rules = [
        'name' => 'required|min:2|max:100',
        'phone' => 'required|min:8|max:20',
        'email' => 'nullable|email|max:150',
        'selectedBatch' => 'required|string',
    ];

    public function mount(?Workshop $workshop = null)
    {
        if ($workshop && $workshop->exists) {
            $this->workshop = $workshop;
        } else {
            $this->workshop = Workshop::where('slug', 'how-to-heal-toxic-relationships')->first()
                ?? Workshop::where('slug', 'avoid-toxic-relationships')->first()
                ?? Workshop::where('is_featured', true)->first()
                ?? new Workshop();
        }

        if (!empty($this->workshop->upcoming_batches) && is_array($this->workshop->upcoming_batches) && count($this->workshop->upcoming_batches) > 0) {
            $this->selectedBatch = $this->workshop->upcoming_batches[0];
        } else {
            $this->selectedBatch = 'Next Announced Cohort (Priority Waitlist)';
        }
    }

    public function enroll()
    {
        $validated = $this->validate([
            'name' => 'required|min:2|max:100',
            'phone' => 'required|min:8|max:20',
            'email' => 'nullable|email|max:150',
            'selectedBatch' => 'required|string',
        ]);

        $hasBatches = !empty($this->workshop->upcoming_batches) && is_array($this->workshop->upcoming_batches) && count($this->workshop->upcoming_batches) > 0;

        $registration = WorkshopRegistration::create([
            'workshop_id' => $this->workshop->id ?? null,
            'name' => $validated['name'],
            'phone' => $validated['phone'],
            'email' => $validated['email'] ?? null,
            'batch_selection' => $hasBatches ? $validated['selectedBatch'] : 'Next Announced Cohort (Priority Waitlist)',
            'payment_status' => 'pending',
            'status' => 'confirmed',
            'notes' => $this->notes,
        ]);

        if ($hasBatches) {
            $waText = "Hello Jefna Hameed,%0A%0AI would like to join the masterclass: *" . urlencode($this->workshop->title ?? 'Masterclass') . "*%0A%0A*Name:* " . urlencode($this->name) .
                "%0A*Phone:* " . urlencode($this->phone) .
                "%0A*Batch:* " . urlencode($this->selectedBatch) .
                "%0A*Fee:* ₹" . number_format($this->workshop->fee ?? 999, 0) .
                "%0A%0APlease share the registration link & payment details.";
        } else {
            $waText = "Hello Jefna Hameed,%0A%0APlease add me to the *Priority Waitlist* for the next *" . urlencode($this->workshop->title ?? 'Masterclass') . "* cohort.%0A%0A*Name:* " . urlencode($this->name) .
                "%0A*Phone:* " . urlencode($this->phone) .
                "%0A%0APlease notify me as soon as new dates are announced!";
        }

        $this->whatsappUrl = "https://wa.me/918590415943?text=" . $waText;
        $this->isEnrolled = true;
    }

    public function resetForm()
    {
        $this->name = '';
        $this->phone = '';
        $this->email = '';
        $this->isEnrolled = false;
        $this->whatsappUrl = null;
    }

    public function render()
    {
        return view('livewire.workshop-enrollment');
    }
}
