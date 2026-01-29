<?php

use Livewire\Component;
use Illuminate\Support\Facades\Auth;

new class extends Component {
    public $email, $password;

    public function login()
    {
        $this->resetErrorBag();

        $this->validate(
            [
                'email' => 'required|email|string|max:255',
                'password' => 'required|string|min:8',
            ],
            [
                'email.required' => 'Email address is required.',
                'email.email' => 'Please enter a valid email address.',
                'email.max' => 'Your email is too long.',
                'password.required' => 'Password is required.',
                'password.min' => 'Password must be at least 8 characters.'
            ]
        );

        if (!Auth::attempt(['email' => $this->email, 'password' => $this->password])) {
            $this->addError('password', 'The provided credentials do not match our records.');
            return;
        }

        session()->regenerate();
    }
};
?>

<div>
    {{-- Happiness is not something readymade. It comes from your own actions. - Dalai Lama --}}
</div>
