<?php

declare(strict_types=1);

namespace GildedRose\ItemUpdater;

use GildedRose\Item;

use function GildedRose\increaseItemQuality;

class AgedBrieUpdater extends DefaultItemUpdater
{
    public function updateQuality(Item $item): void
    {
        increaseItemQuality($item);
        if ($item->sellIn < 0) {
            increaseItemQuality($item);
        }
    }
}
