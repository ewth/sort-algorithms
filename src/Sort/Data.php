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
     * @param  int  $min
     * @param  int  $max
     * @return array
     */
    public static function randomSet(int $min = 1000, int $max = 100000) : array
    {
        // Generate a series of random numbers that we can sort later
        $numberOfItems = rand($min,$max);
        $items = [];
        for ($i = 0; $i < $numberOfItems; $i++) {
            $items[] = rand(0, 100);
        }

        return $items;
    }
}
