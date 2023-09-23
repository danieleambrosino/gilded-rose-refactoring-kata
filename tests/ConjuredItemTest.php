<?php

declare(strict_types=1);

namespace Tests;

use GildedRose\GildedRose;
use GildedRose\Item;
use PHPUnit\Framework\TestCase;

class ConjuredItemTest extends TestCase
{
    private const ITEM_NAME = 'Conjured Mana Cake';

    public function testConjuredItemQualityDegradesTwiceAsFast(): void
    {
        $item = new Item(self::ITEM_NAME, 1, 2);
        $gildedRose = new GildedRose([$item]);
        $gildedRose->updateQuality();
        $this->assertSame(0, $item->quality);
    }
}
