<?php

namespace App\GuitarShop\Classes\Guitar;

use App\GuitarShop\Contracts\ToString;

require_once __DIR__ . '/../../../../vendor/autoload.php';

enum Type implements ToString
{
    case ACOUSTIC;
    case ELECTRIC;

    public function toString(): string
    {
        return match($this)
        {
            self::ACOUSTIC => 'Acoustic',
            self::ELECTRIC => 'Electric',
        };
    }
}
