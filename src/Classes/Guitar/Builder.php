<?php

namespace Shop\Classes\Guitar;

use Shop\Contracts\ToString;

require_once __DIR__ . '/../../../vendor/autoload.php';

enum Builder implements ToString
{
    case FENDER;
    case MARTIN;
    case GIBSON;
    case COLLINGS;
    case OLSON;
    case RYAN;
    case PRS;
    case ANY;

    public function toString(): string
    {
        return match($this)
        {
            self::FENDER => 'Fender',
            self::MARTIN => 'Martin',
            self::GIBSON => 'Gibson',
            self::COLLINGS => 'Collings',
            self::OLSON => 'Olson',
            self::RYAN => 'Ryan',
            self::PRS => 'Prs',
            self::ANY => 'Any',
        };
    }
}
