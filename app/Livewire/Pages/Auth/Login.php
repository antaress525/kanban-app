<?php

namespace App\Livewire\Pages\Auth;

use App\Livewire\Forms\Auth\LoginForm;
use App\Livewire\Layout\GuestLayout;
use Illuminate\Support\Facades\Auth;
use Livewire\Attributes\Title;
use Livewire\Attributes\Validate;

#[Title('Se connecter')]
class Login extends GuestLayout
{
    public LoginForm $form;

    public function login(): void
    {
        $this->validate();

        if (!Auth::attempt(['email' => $this->form->email, 'password' => $this->form->password], $this->form->remember)) {
            $this->addError('email', 'Les informations d’identification sont incorrectes.');
        }

        $this->redirectIntended('/', true);
    }

    public function render()
    {
        return view('livewire.pages.auth.login');
    }
}
