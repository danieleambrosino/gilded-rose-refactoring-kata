<?php

declare(strict_types=1);

namespace GildedRose\ItemUpdater;

use GildedRose\Item;

class DefaultItemUpdater implements ItemUpdaterInterface
{
    public function updateSellIn(Item $item): void
    {
        --$item->sellIn;
    }

    public function updateQuality(Item $item): void
    {
        $this->decreaseItemQuality($item);
        if ($item->sellIn < 0) {
            $this->decreaseItemQuality($item);
        }
    }

    protected function decreaseItemQuality(Item $item, int $amount = 1): void
    {
        $item->quality = max(0, $item->quality - $amount);
    }

    protected function increaseItemQuality(Item $item, int $amount = 1, int $max = 50): void
    {
        $item->quality = min($max, $item->quality + $amount);
    }
}
