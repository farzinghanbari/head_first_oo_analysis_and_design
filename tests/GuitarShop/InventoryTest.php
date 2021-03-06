<?php

namespace GuitarShop;
require_once __DIR__ . '/../../vendor/autoload.php';

use App\GuitarShop\Classes\Guitar\Builder;
use App\GuitarShop\Classes\Guitar\GuitarSpec;
use App\GuitarShop\Classes\Guitar\Type;
use App\GuitarShop\Classes\Guitar\Wood;
use App\GuitarShop\Classes\Inventory\Inventory;
use PHPUnit\Framework\TestCase;

final class InventoryTest extends TestCase
{
    private Inventory $inventory;

    public function setUp(): void
    {
        parent::setUp(); // TODO: Change the autogenerated stub
        $this->inventory = new Inventory();
        $guitarSpecs = new GuitarSpec(Builder::FENDER, 'bar', Type::ACOUSTIC, Wood::ALDER, Wood::COCOBOLO, 12);
        $this->inventory->addGuitar('foo', 1.23, $guitarSpecs);
        $this->inventory->addGuitar('baz', 4.56, $guitarSpecs);
        $this->inventory->addGuitar('foobar', 4.56, new GuitarSpec(Builder::COLLINGS, 'bar', Type::ACOUSTIC, Wood::ALDER, Wood::COCOBOLO, 6));
    }

    public function testGuitarIsFound(): void
    {
        $whatErinLikes = new GuitarSpec(Builder::FENDER, 'bar', Type::ACOUSTIC, Wood::ALDER, Wood::COCOBOLO, 12);
        $guitars = $this->inventory->search($whatErinLikes);

        $this->assertEquals(2, $guitars->count());
    }
}
