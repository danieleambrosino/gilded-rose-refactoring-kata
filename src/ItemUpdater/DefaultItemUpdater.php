<?php

declare(strict_types=1);

namespace GildedRose\ItemUpdater;

use GildedRose\Item;

use function GildedRose\decreaseItemQuality;

class DefaultItemUpdater implements ItemUpdaterInterface
{
    public function updateSellIn(Item $item): void
    {
        --$item->sellIn;
    }

    public function updateQuality(Item $item): void
    {
        decreaseItemQuality($item);
        if ($item->sellIn < 0) {
            decreaseItemQuality($item);
        }
    }
}
