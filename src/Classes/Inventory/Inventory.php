<?php

namespace Shop\Classes\Inventory;

require_once __DIR__ . '/../../../vendor/autoload.php';

use Shop\Classes\Guitar\Builder;
use Shop\Classes\Guitar\Guitar;
use SplDoublyLinkedList;
use Shop\Classes\Guitar\Type;
use Shop\Classes\Guitar\Wood;

class Inventory
{
    private SplDoublyLinkedList $guitars;

    public function __construct()
    {
        $this->guitars = new SplDoublyLinkedList();
    }

    public function addGuitar(string $serialNumber, float $price,
        Builder $builder, string $model, Type $type,
        Wood $backWood, Wood $topWood): void
    {
        $guitar = new Guitar($serialNumber, $price, $builder, $model, $type, $backWood, $topWood);
        $this->guitars->push($guitar);
    }

    public function getGuitar(string $serialNumber): Guitar | null
    {
        for ($this->guitars->rewind(); $this->guitars->valid(); $this->guitars->next()) {
            $guitar = $this->guitars->current();
            if ($guitar->serialNumber == $serialNumber)
                return $guitar;
        }

        return null;
    }

    public function search(Guitar $searchGuitar): SplDoublyLinkedList
    {
        $matchingGuitars = new SplDoublyLinkedList();
        for ($this->guitars->rewind(); $this->guitars->valid(); $this->guitars->next()) {
            $guitar = $this->guitars->current();

            if ($guitar->builder->toString() != $searchGuitar->builder->toString())
                continue;
            if ($guitar->model != $searchGuitar->model)
                continue;
            if ($guitar->type->toString() != $searchGuitar->type->toString())
                continue;
            if ($guitar->backWood->toString() != $searchGuitar->backWood->toString())
                continue;
            if ($guitar->topWood->toString() != $searchGuitar->topWood->toString())
                continue;
            $matchingGuitars->push($guitar);
        }
        return $matchingGuitars;
    }
}
