<?php

declare(strict_types=1);

namespace GildedRose\ItemUpdater;

use GildedRose\Item;

class ConjuredUpdater extends DefaultItemUpdater
{
    public function updateQuality(Item $item): void
    {
        $this->decreaseItemQuality($item, 2);
    }
}
