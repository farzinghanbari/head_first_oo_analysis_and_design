<?php

namespace Shop\Classes\Guitar;

require_once __DIR__ . '/../../../vendor/autoload.php';

class Guitar
{
    public function __construct(public readonly string     $serialNumber, public readonly float $price,
                                public readonly GuitarSpec $spec)
    {
    }

    public function __toString(): string
    {
        return "{$this->serialNumber}\t{$this->price}\t{$this->spec->toString()}\n";
    }
}
