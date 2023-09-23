<?php

declare(strict_types=1);

namespace GildedRose\ItemUpdater;

use GildedRose\Item;

use function GildedRose\decreaseItemQuality;

class ConjuredUpdater extends DefaultItemUpdater
{
    public function updateQuality(Item $item): void
    {
        decreaseItemQuality($item, 2);
    }
}
