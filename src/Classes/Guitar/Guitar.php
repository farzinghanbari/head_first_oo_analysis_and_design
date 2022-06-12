<?php

namespace Shop\Classes\Guitar;

require_once __DIR__ . '/../../../vendor/autoload.php';

class Guitar
{
    public function __construct(public readonly string  $serialNumber, public readonly float $price,
                                public readonly Builder $builder, public readonly string $model, public readonly Type $type,
                                public readonly Wood    $backWood, public readonly Wood $topWood)
    {
    }

    public function __toString(): string
    {
        return "{$this->serialNumber}\t{$this->price}\t{$this->builder->toString()}\t{$this->model}\t{$this->type->toString()}\t{$this->backWood->toString()}\t{$this->topWood->toString()}\n";
    }
}
