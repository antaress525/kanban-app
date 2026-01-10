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
        $this->board = $board->load(['tasks']);
    }

    public function render()
    {
        return view('livewire.pages.board.show-page',[
            'board' => $this->board,
            'tasks' => $this->board->tasks()
                ->orderBy('order')->get()
                ->groupBy('status'),
        ])
        ->title(Str::slug($this->board->name));
    }
}
