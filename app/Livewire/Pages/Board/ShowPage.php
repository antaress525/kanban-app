<?php

namespace App\Livewire\Pages\Board;

use App\Models\Board;
use Illuminate\Support\Str;
use Livewire\Component;

class ShowPage extends Component
{
    public ?Board $board;

    public function mount(Board $board)
    {
        $this->board = $board;
    }

    public function render()
    {
        return view('livewire.pages.board.show-page')
            ->title(Str::slug($this->board->name));
    }
}
