<?php

declare(strict_types=1);

namespace GildedRose\ItemUpdater;

final class Factory
{
    private const AGED_BRIE = 'Aged Brie';

    private const SULFURAS = 'Sulfuras, Hand of Ragnaros';

    private const BACKSTAGE_PASSES = 'Backstage passes to a TAFKAL80ETC concert';

    private const CONJURED = 'Conjured Mana Cake';

    final public static function getUpdaterStrategy(string $itemName): ItemUpdaterInterface
    {
        return match ($itemName) {
            self::AGED_BRIE        => new AgedBrieUpdater(),
            self::BACKSTAGE_PASSES => new BackstagePassesUpdater(),
            self::SULFURAS         => new SulfurasUpdater(),
            self::CONJURED         => new ConjuredUpdater(),
            default                => new DefaultItemUpdater(),
        };
    }
}
