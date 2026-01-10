<?php

namespace App\Enum;

enum TaskStatus: string
{
    case TODO = 'todo';
    case IN_PROGRESS = 'in_progress';
    case REVIEW = 'review';
    case DONE = 'done';

    public function label(): string
    {
        return match ($this) {
            self::TODO => 'A faire',
            self::IN_PROGRESS => 'En cours',
            self::REVIEW => 'En revue',
            self::DONE => 'Terminé',
        };
    }
}
