<?php

require_once __DIR__ . '/../vendor/autoload.php';

use PHPUnit\Framework\TestCase;
use Shop\Classes\Guitar\Builder;
use Shop\Classes\Guitar\Guitar;
use Shop\Classes\Guitar\Type;
use Shop\Classes\Guitar\Wood;
use Shop\Classes\Inventory\Inventory;

final class InventoryTest extends TestCase
{
    public function testGuitarIsFound(): void
    {
        $inventory = new Inventory();
        $inventory->addGuitar('foo', 1.23, Builder::FENDER, 'bar', Type::ACOUSTIC, Wood::ALDER, Wood::COCOBOLO);
        $inventory->addGuitar('baz', 4.56, Builder::FENDER, 'bar', Type::ACOUSTIC, Wood::ALDER, Wood::COCOBOLO);
        $whatErinLikes = new Guitar('', 0, Builder::FENDER, 'bar', Type::ACOUSTIC, Wood::ALDER, Wood::COCOBOLO);
        $guitars = $inventory->search($whatErinLikes);

        $this->assertEquals(2, $guitars->count());
    }
}
