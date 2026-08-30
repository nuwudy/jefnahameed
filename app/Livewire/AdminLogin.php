<?php

namespace App\Livewire;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class AdminLogin extends Component
{
    public string $email = '';
    public string $password = '';
    public bool $remember = true;
    public string $errorMessage = '';

    protected function rules(): array
    {
        return [
            'email' => 'required|email',
            'password' => 'required|min:6',
        ];
    }

    public function login()
    {
        $this->validate();

        if (Auth::attempt(['email' => $this->email, 'password' => $this->password], $this->remember)) {
            session()->regenerate();
            return redirect()->intended(route('admin.dashboard'));
        }

        $this->errorMessage = 'Invalid email address or password. Please try again.';
    }

    public function render()
    {
        return view('livewire.admin-login');
    }
}
