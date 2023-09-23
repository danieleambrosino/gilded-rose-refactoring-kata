<?php

declare(strict_types=1);

namespace Tests;

use GildedRose\GildedRose;
use GildedRose\Item;
use PHPUnit\Framework\TestCase;

class AgedBrieTest extends TestCase
{
    private const ITEM_NAME = 'Aged Brie';

    public function testAgedBrieIncreasesQualityAfterExpiration(): void
    {
        $item = new Item(self::ITEM_NAME, 0, 0);
        $gildedRose = new GildedRose([$item]);
        $gildedRose->updateQuality();
        $this->assertSame(2, $item->quality);
    }

    public function testAgedBrieQualityIsNeverMoreThan50(): void
    {
        $item = new Item(self::ITEM_NAME, 0, 50);
        $gildedRose = new GildedRose([$item]);
        $gildedRose->updateQuality();
        $this->assertSame(50, $item->quality);
    }
}
