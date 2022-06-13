<?php

namespace Shop\Classes\Guitar;

class GuitarSpec
{
    public function __construct(public readonly Builder $builder, public readonly string $model, public readonly Type $type,
                                public readonly Wood    $backWood, public readonly Wood $topWood)
    {
    }

    public function isMatching(GuitarSpec $spec): bool
    {
        return $this->builder == $spec->builder and $this->model == $spec->model and $this->type == $spec->type and $this->backWood == $spec->backWood and $this->topWood == $spec->topWood;
    }

    public function __toString(): string
    {
        return "{$this->builder->toString()}\t{$this->model}\t{$this->type->toString()}\t{$this->backWood->toString()}\t{$this->topWood->toString()}";
    }
}
