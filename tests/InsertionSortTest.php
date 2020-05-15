<?php

namespace Sort;

use PHPUnit\Framework\TestCase;

class InsertionSortTest extends TestCase
{

    public function testInsertionSortSortsItems()
    {
        $items = [5, 3, 6, 1, 2, 4, 6, 9, 8, 1, 7, 1, 5];
        $sort = new InsertionSort;
        $result = $sort->sort($items);
        sort($items);
        $this->assertSame($items, $result->getSorted());
    }

    public function testInsertionSortReturnsSortTime()
    {
        $items = [5, 3, 6, 1, 2, 4, 6, 9, 8, 1, 7, 1, 5];
        $sort = new InsertionSort;
        $result = $sort->sort($items);
        $this->assertIsNumeric($result->getTimeTaken());
    }

    public function testInsertionSortReturnsSwapCount()
    {
        $items = [5, 3, 6, 1, 2, 4, 6, 9, 8, 1, 7, 1, 5];
        $sort = new InsertionSort;
        $result = $sort->sort($items);
        $this->assertGreaterThanOrEqual(1, $result->getSwapsPerformed());
    }

}
