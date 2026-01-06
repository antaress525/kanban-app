<?php

namespace App\Livewire\Forms\Auth;

use App\Actions\Auth\RegisterUser;
use Livewire\Attributes\Validate;
use Livewire\Form;

class Register extends Form
{
    public string $name = '';
    public string $email = '';
    public string $password = '';

    protected function rules(): array
    {
        return [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users,email'],
            'password' => ['required', 'string', 'min:8'],
        ];
    }
}
