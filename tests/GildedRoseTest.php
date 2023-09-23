<?php

declare(strict_types=1);

namespace Tests;

use GildedRose\GildedRose;
use GildedRose\Item;
use PHPUnit\Framework\TestCase;

class GildedRoseTest extends TestCase
{
    public function testItemDoesntChangeName(): void
    {
        $item = new Item('foo', 0, 0);
        $gildedRose = new GildedRose([$item]);
        $gildedRose->updateQuality();
        $this->assertSame('foo', $item->name);
    }

    public function testItemSellInDecreases(): void
    {
        $item = new Item('foo', 1, 1);
        $gildedRose = new GildedRose([$item]);
        $gildedRose->updateQuality();
        $this->assertSame(0, $item->sellIn);
    }

    public function testItemQualityDecreases(): void
    {
        $item = new Item('foo', 1, 1);
        $gildedRose = new GildedRose([$item]);
        $gildedRose->updateQuality();
        $this->assertSame(0, $item->quality);
    }

    public function testQualityDegradesTwiceAsFastAfterExpiration(): void
    {
        $item = new Item('foo', 0, 3);
        $gildedRose = new GildedRose([$item]);
        $gildedRose->updateQuality();
        $this->assertSame(1, $item->quality);
    }

    public function testQualityIsNotNegative(): void
    {
        $item = new Item('foo', 0, 1);
        $gildedRose = new GildedRose([$item]);
        $gildedRose->updateQuality();
        $this->assertSame(0, $item->quality);
    }
}
