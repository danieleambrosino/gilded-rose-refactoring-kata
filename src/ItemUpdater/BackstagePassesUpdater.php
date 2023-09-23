<?php

declare(strict_types=1);

namespace GildedRose\ItemUpdater;

use GildedRose\Item;

use function GildedRose\increaseItemQuality;

class BackstagePassesUpdater extends DefaultItemUpdater
{
    public function updateQuality(Item $item): void
    {
        increaseItemQuality($item);
        if ($item->sellIn < 10) {
            increaseItemQuality($item);
        }
        if ($item->sellIn < 5) {
            increaseItemQuality($item);
        }
        if ($item->sellIn < 0) {
            $item->quality = 0;
        }
    }
}
