<?php

namespace App\Enums;

enum CeremonyStatus: string
{
    case NONE = 'none';
    case ACCEPTED = 'accepted';
    case DECLINED = 'declined';
}
