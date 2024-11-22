<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUlids;
use Illuminate\Database\Eloquent\Model;

class Response extends Model
{
    use HasUlids;

    public $fillable = [
        'name',
        'email',
        'guests',
        'dietaries',
        'camping',
    ];
}
