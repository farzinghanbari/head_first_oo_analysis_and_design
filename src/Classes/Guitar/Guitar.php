<?php

namespace Shop\Classes\Guitar;

require_once __DIR__ . '/../../../vendor/autoload.php';

class Guitar
{
    private float $price;
    public function __construct(public readonly string     $serialNumber, float $price,
                                public readonly GuitarSpec $spec)
    {
        $this->price = $price;
    }

    public function setPrice(float $price): void
    {
        $this->price = $price;
    }

    public function __toString(): string
    {
        return "{$this->serialNumber}\t{$this->price}\t{$this->spec}\n";
    }
}
