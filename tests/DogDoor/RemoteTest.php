<?php

namespace DogDoor;

use App\DogDoor\DogDoor;
use App\DogDoor\Remote;
use PHPUnit\Framework\TestCase;

class RemoteTest extends TestCase
{
    public function testDogDoorSimulator()
    {
        $door = new DogDoor();
        $remote = new Remote($door);
        echo "Fido barks to go outside...\n";
        $remote->pressButton();
        echo "\nFido has gone outside...\n";
        $remote->pressButton();
        echo "\nFido’s all done...\n";
        $remote->pressButton();
        echo "\nFido’s back inside...\n";
        $remote->pressButton();
    }
}
