<?php

namespace App\Livewire\Pages\Board;

use App\Livewire\Layout\AppLayout;
use Livewire\Attributes\Title;
use Livewire\WithPagination;

#[Title('Projets')]
class IndexPage extends AppLayout
{
    use WithPagination;

    public function render()
    {
        return view('livewire.pages.board.index-page', [
            'boards' => auth()->user()->boards()->paginate(6),
        ]);
    }
}
