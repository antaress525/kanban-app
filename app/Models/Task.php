<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Task extends Model
{
    /** @use HasFactory<\Database\Factories\TaskFactory> */
    use HasFactory;

    public $fillable = ['title', 'description', 'due_date', 'status', 'order', 'board_id', 'user_id'];

    public function board(): BelongsTo {
        return $this->belongsTo(Board::class);
    }
}
