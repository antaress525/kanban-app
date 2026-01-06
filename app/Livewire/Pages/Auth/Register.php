<?php

namespace App\Livewire\Pages\Auth;

use App\Models\User;
use Livewire\Attributes\Title;
use App\Livewire\Layout\GuestLayout;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Livewire\Forms\Auth\Register as AuthRegister;

#[Title("S'inscrire")]
class Register extends GuestLayout
{
    public AuthRegister $form;

    public function register() {
        $data =$this->validate();

        $user = User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);

        Auth::login($user);

        $this->redirectRoute('home');
    }
    public function render()
    {
        return view('livewire.pages.auth.register');
    }
}
