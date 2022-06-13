<?php

namespace Shop\Classes\Inventory;

require_once __DIR__ . '/../../../vendor/autoload.php';

use Shop\Classes\Guitar\Guitar;
use Shop\Classes\Guitar\GuitarSpec;
use SplDoublyLinkedList;

class Inventory
{
    private SplDoublyLinkedList $guitars;

    public function __construct()
    {
        $this->guitars = new SplDoublyLinkedList();
    }

    public function addGuitar(string $serialNumber, float $price,
        GuitarSpec $guitarSpec): void
    {
        $guitar = new Guitar($serialNumber, $price, $guitarSpec);
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

    public function search(GuitarSpec $searchGuitar): SplDoublyLinkedList
    {
        $matchingGuitars = new SplDoublyLinkedList();
        for ($this->guitars->rewind(); $this->guitars->valid(); $this->guitars->next()) {
            $guitar = $this->guitars->current();

            if ($guitar->guitarSpec->builder->toString() != $searchGuitar->builder->toString())
                continue;
            if ($guitar->guitarSpec->model != $searchGuitar->model)
                continue;
            if ($guitar->guitarSpec->type->toString() != $searchGuitar->type->toString())
                continue;
            if ($guitar->guitarSpec->backWood->toString() != $searchGuitar->backWood->toString())
                continue;
            if ($guitar->guitarSpec->topWood->toString() != $searchGuitar->topWood->toString())
                continue;
            $matchingGuitars->push($guitar);
        }
        return $matchingGuitars;
    }
}
