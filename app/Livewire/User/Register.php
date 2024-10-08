<?php

namespace App\Livewire\User;

use Illuminate\View\View;
use Livewire\Component;

class Register extends Component
{

    public string $name = '';
    public string $email = '';
    public string $password = '';
    public string $password_confirmation = '';
    public bool $remember = false;

    public function render(): View
    {
        return view('livewire.user.register');
    }
}
