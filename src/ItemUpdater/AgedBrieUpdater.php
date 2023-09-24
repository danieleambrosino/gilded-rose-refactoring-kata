<?php

declare(strict_types=1);

namespace GildedRose\ItemUpdater;

use GildedRose\Item;

class AgedBrieUpdater extends DefaultItemUpdater
{
    public function updateQuality(Item $item): void
    {
        $this->increaseItemQuality($item);
        if ($item->sellIn < 0) {
            $this->increaseItemQuality($item);
        }
    }
}
