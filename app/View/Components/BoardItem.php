<?php

namespace App\View\Components;

use App\Models\Board;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class BoardItem extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(public Board $board)
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.board-item');
    }
}
