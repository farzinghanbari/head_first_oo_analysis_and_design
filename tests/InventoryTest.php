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
    private Inventory $inventory;

    public function setUp(): void
    {
        parent::setUp(); // TODO: Change the autogenerated stub
        $this->inventory = new Inventory();
        $this->inventory->addGuitar('foo', 1.23, Builder::FENDER, 'bar', Type::ACOUSTIC, Wood::ALDER, Wood::COCOBOLO);
        $this->inventory->addGuitar('baz', 4.56, Builder::FENDER, 'bar', Type::ACOUSTIC, Wood::ALDER, Wood::COCOBOLO);
        $this->inventory->addGuitar('foobar', 4.56, Builder::COLLINGS, 'bar', Type::ACOUSTIC, Wood::ALDER, Wood::COCOBOLO);
    }

    public function testGuitarIsFound(): void
    {
        $whatErinLikes = new Guitar('', 0, Builder::FENDER, 'bar', Type::ACOUSTIC, Wood::ALDER, Wood::COCOBOLO);
        $guitars = $this->inventory->search($whatErinLikes);

        $this->assertEquals(2, $guitars->count());
    }
}