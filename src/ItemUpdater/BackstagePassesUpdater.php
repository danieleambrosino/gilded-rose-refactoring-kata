<?php

declare(strict_types=1);

namespace GildedRose\ItemUpdater;

use GildedRose\Item;

class BackstagePassesUpdater extends DefaultItemUpdater
{
    public function updateQuality(Item $item): void
    {
        $this->increaseItemQuality($item);
        if ($item->sellIn < 10) {
            $this->increaseItemQuality($item);
        }
        if ($item->sellIn < 5) {
            $this->increaseItemQuality($item);
        }
        if ($item->sellIn < 0) {
            $item->quality = 0;
        }
    }
}
