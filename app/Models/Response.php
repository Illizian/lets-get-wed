<?php

namespace App\Models;

use App\Enums\CeremonyStatus;
use Illuminate\Database\Eloquent\Concerns\HasUlids;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Response extends Model
{
    use HasUlids;
    use Notifiable;

    public $fillable = [
        'name',
        'email',
        'guests',
        'dietaries',
        'camping',
        'ceremony',
    ];

    public $casts = [
        'guests' => 'array',
        'ceremony' => CeremonyStatus::class,
    ];
}
