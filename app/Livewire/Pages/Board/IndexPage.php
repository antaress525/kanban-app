<?php

namespace App\Livewire\Pages\Board;

use App\Livewire\Layout\AppLayout;
use Livewire\Attributes\Title;

#[Title('Projets')]
class IndexPage extends AppLayout
{
    public function render()
    {
        return view('livewire.pages.board.index-page');
    }
}
