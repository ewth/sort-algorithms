<?php

namespace Sort;

/**
 * Interface SortInterface
 *
 * Basic interface for sorting algorithms, for consistent implementation.
 *
 * @author Ewan Thompson <contact@ewan.me>
 *
 * @package Sort
 */
interface SortInterface
{
    public function sort(array $unsorted): SortResults;
}