<?php

declare(strict_types=1);

namespace Tests;

use GildedRose\GildedRose;
use GildedRose\Item;
use PHPUnit\Framework\TestCase;

class BackstagePassTest extends TestCase
{
    private const ITEM_NAME = 'Backstage passes to a TAFKAL80ETC concert';

    public function testBackstagePassQualityIncreases(): void
    {
        $item = new Item(self::ITEM_NAME, 11, 0);
        $gildedRose = new GildedRose([$item]);
        $gildedRose->updateQuality();
        $this->assertSame(1, $item->quality);
    }

    public function testBackstagePassQualityIncreasesBy2From10DaysBeforeConcert(): void
    {
        $item = new Item(self::ITEM_NAME, 10, 0);
        $gildedRose = new GildedRose([$item]);
        $gildedRose->updateQuality();
        $this->assertSame(2, $item->quality);
    }

    public function testBackstagePassQualityIncreasesBy3From5DaysBeforeConcert(): void
    {
        $item = new Item(self::ITEM_NAME, 5, 0);
        $gildedRose = new GildedRose([$item]);
        $gildedRose->updateQuality();
        $this->assertSame(3, $item->quality);
    }

    public function testBackstagePassQualityIs0AfterConcert(): void
    {
        $item = new Item(self::ITEM_NAME, 0, 1);
        $gildedRose = new GildedRose([$item]);
        $gildedRose->updateQuality();
        $this->assertSame(0, $item->quality);
    }
}
