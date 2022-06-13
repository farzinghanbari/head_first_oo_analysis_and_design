<?php

namespace Shop\Classes\Guitar;

class GuitarSpec
{
    public function __construct(public readonly Builder $builder, public readonly string $model, public readonly Type $type,
                                public readonly Wood    $backWood, public readonly Wood $topWood)
    {
    }

    public function __toString(): string
    {
        return "{$this->builder->toString()}\t{$this->model}\t{$this->type->toString()}\t{$this->backWood->toString()}\t{$this->topWood->toString()}";
    }
}
