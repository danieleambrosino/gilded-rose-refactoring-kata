<?php

declare(strict_types=1);

namespace GildedRose;

function decreaseItemQuality(Item $item, int $amount = 1): void
{
    $item->quality = max(0, $item->quality - $amount);
}

function increaseItemQuality(Item $item, int $amount = 1, int $max = 50): void
{
    $item->quality = min($max, $item->quality + $amount);
}
