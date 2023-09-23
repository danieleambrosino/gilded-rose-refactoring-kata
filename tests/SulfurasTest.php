<?php

declare(strict_types=1);

namespace Tests;

use GildedRose\GildedRose;
use GildedRose\Item;
use PHPUnit\Framework\TestCase;

class SulfurasTest extends TestCase
{
    private const ITEM_NAME = 'Sulfuras, Hand of Ragnaros';

    public function testSulfurasSellInDoesntDecrease(): void
    {
        $item = new Item(self::ITEM_NAME, 0, 0);
        $gildedRose = new GildedRose([$item]);
        $gildedRose->updateQuality();
        $this->assertSame(0, $item->sellIn);
    }

    public function testSulfurasQualityDoesntDecrease(): void
    {
        $item = new Item(self::ITEM_NAME, 0, 0);
        $gildedRose = new GildedRose([$item]);
        $gildedRose->updateQuality();
        $this->assertSame(0, $item->quality);
    }
}
