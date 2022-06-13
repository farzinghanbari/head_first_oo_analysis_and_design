<?php

namespace App\GuitarShop\Classes\Guitar;

use App\GuitarShop\Contracts\ToString;

require_once __DIR__ . '/../../../../vendor/autoload.php';

enum Wood implements ToString
{
    case INDIAN_ROSEWOOD;
    case BRAZILIAN_ROSEWOOD;
    case MAHOGANY;
    case MAPLE;
    case COCOBOLO;
    case CEDAR;
    case ADIRONDACK;
    case ALDER;
    case SITKA;

    public function toString(): string
    {
        return match($this)
        {
            self::INDIAN_ROSEWOOD => 'Indian Rosewood',
            self::BRAZILIAN_ROSEWOOD => 'Brazilian Rosewood',
            self::MAHOGANY => 'Mahogany',
            self::MAPLE => 'Maple',
            self::COCOBOLO => 'Cocobolo',
            self::CEDAR => 'Cedar',
            self::ADIRONDACK => 'Adirondack',
            self::ALDER => 'Alder',
            self::SITKA => 'Sitka',
        };
    }
}
