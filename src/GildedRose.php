<?php

declare(strict_types=1);

namespace GildedRose;

use GildedRose\ItemUpdater\Factory;
use GildedRose\ItemUpdater\ItemUpdaterInterface;

final class GildedRose
{
    /**
     * @param Item[] $items
     */
    public function __construct(
        private array $items
    ) {
    }

    public function updateQuality(): void
    {
        foreach ($this->items as $item) {
            $this->updateQualityForItem(
                $item,
                updater: Factory::getUpdaterStrategy($item->name),
            );
        }
    }

    private function updateQualityForItem(Item $item, ItemUpdaterInterface $updater): void
    {
        $updater->updateSellIn($item);
        $updater->updateQuality($item);
    }
}
