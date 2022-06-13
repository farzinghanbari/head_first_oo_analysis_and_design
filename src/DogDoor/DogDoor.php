<?php

namespace App\DogDoor;

class DogDoor
{
    private bool $open;

    public function __construct()
    {
        $this->open = false;
    }

    public function isOpen(): bool
    {
        return $this->open;
    }

    public function open(): void
    {
        echo "The dog door opens.\n";
        $this->open = true;
    }

    public function close(): void
    {
        echo "The dog door closes.\n";
        $this->open = false;
    }
}
