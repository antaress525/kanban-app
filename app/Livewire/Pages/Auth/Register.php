<?php

namespace App\Livewire\Pages\Auth;

use App\Livewire\Layout\GuestLayout;
use Livewire\Attributes\Title;

#[Title("S'inscrire")]
class Register extends GuestLayout
{
    public function render()
    {
        return view('livewire.pages.auth.register');
    }
}
