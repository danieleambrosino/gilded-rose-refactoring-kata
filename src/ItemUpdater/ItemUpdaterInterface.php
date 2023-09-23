<?php

declare(strict_types=1);

namespace GildedRose\ItemUpdater;

use GildedRose\Item;

interface ItemUpdaterInterface
{
    public function updateSellIn(Item $item): void;

    public function updateQuality(Item $item): void;
}
