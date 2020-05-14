<?php

namespace Sort;

/**
 * Interface SortInterface
 * @package Sort
 */
interface SortInterface
{
    public function sort(array $unsorted): SortResults;
}