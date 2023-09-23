<?php

declare(strict_types=1);

namespace Tests;

use GildedRose\Item;
use PHPUnit\Framework\TestCase;

class ItemTests extends TestCase
{
    public function testStringRepresentationIsCorrect(): void
    {
        $item = new Item('Test item', 1, 2);
        $this->assertSame('Test item, 1, 2', (string) $item);
    }
}
