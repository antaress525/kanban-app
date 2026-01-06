<?php

namespace App\Livewire\Forms\Auth;

use Livewire\Attributes\Validate;
use Livewire\Form;

class LoginForm extends Form
{
    public string $email = '';
    public string $password = '';
    public bool $remember = false;

    protected function rules(): array
    {
        return [
            'email' => ['required', 'string', 'email'],
            'password' => ['required', 'string'],
        ];
    }
}
