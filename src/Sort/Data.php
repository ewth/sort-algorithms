<?php

namespace Sort;

/**
 * Class Data
 * @package Sort
 */
class Data
{
    /**
     * Generate an array of pseudo-random numbers
     *
     * @return array
     */
    public static function randomSet() : array
    {
        // Generate a series of random numbers that we can sort later
        $numberOfItems = rand(1000,100000);
        $items = [];
        for ($i = 0; $i < $numberOfItems; $i++) {
            $items[] = rand(0, 100);
        }

        return $items;
    }
}
