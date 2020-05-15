<?php


namespace Sort;

/**
 * Class InsertionSort
 *
 * Implementation of insertion sort algorithm.
 * [Insertion sort](https://en.wikipedia.org/wiki/Insertion_sort)
 *
 * @author Ewan Thompson <contact@ewan.me>
 *
 * @package Sort
 */
class InsertionSort implements SortInterface
{

    /**
     * Sort using the insertion sort algorithm
     *
     * @param  array  $unsorted
     * @return SortResults
     */
    public function sort(array $unsorted): SortResults
    {
        // Rudimentary time keeping
        $timeStarted = microtime(true);

        // Copy array
        $sorted = $unsorted;

        $swaps = 0;

        // Iterate over array
        for ($i = 0; $i < count($unsorted); $i++) {
            // Store current item
            $temp = $sorted[$i];

            // Inner loop will iterate up to previous item
            $j = $i - 1;
            while ($j >= 0 && $sorted[$j] > $temp) {
                // Swap items
                $sorted[$j + 1] = $sorted[$j];
                $swaps++;
                $j--;
            }
            // Re-insert stored current item
            $sorted[$j + 1] = $temp;
        }

        // Track time taken
        $timeTaken = microtime(true) - $timeStarted;

        // Return results
        return new SortResults(
            $sorted,
            $swaps
        );
    }
}