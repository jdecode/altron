<?php

namespace App\Livewire\User;

use Illuminate\View\View;
use Livewire\Component;

class Login extends Component
{

    public string $email = '';
    public string $password = '';

    public function render(): View
    {
        return view('livewire.user.login');
    }
}
