<?php

namespace Sort;

/**
 * Class MergeSort
 *
 * Implementation of merge sort algorithm.
 * [Merge sort](https://en.wikipedia.org/wiki/Merge_sort)
 *
 * @author Ewan Thompson <contact@ewan.me>
 *
 * @package Sort
 */
class MergeSort implements SortInterface
{
    /**
     * Perform merge sort (top-down) on provided array of unsorted items
     *
     * @param  array  $unsorted
     * @return SortResults
     */
    public function sort(array $unsorted): SortResults
    {
        // Rudimentary time keeping
        $timeStarted = microtime(true);

        // Setup variables
        $leftArray = $rightArray = $unsorted;
        $begin = $middle = $end = 0;
        $end = count($unsorted);

        // Invoke algorithm
        $swaps = $this->splitMerge($rightArray, $leftArray, $begin, $end);

        $timeTaken = microtime(true) - $timeStarted;

        return new SortResults(
            $rightArray,
            $swaps
        );
    }

    /**
     * Split arrays for merge sorting
     *
     * @param  array  $rightArray
     * @param  array  $leftArray
     * @param  int  $begin
     * @param  int  $end
     * @return int
     */
    private function splitMerge(array &$rightArray, array &$leftArray, int &$begin, int &$end): int
    {
        // Run size < 2 => sorted
        if (($end - $begin) < 2) {
            return 0;
        }

        // Find the midpoint to split the run
        $middle = ($end + $begin) / 2;

        // Recursively sort items from $leftArray into $rightArray
        $this->splitMerge($leftArray, $rightArray, $begin, $middle);
        $this->splitMerge($leftArray, $rightArray, $middle, $end);

        // Merge result
        return $this->merge($leftArray, $rightArray, $begin, $middle, $end);
    }

    /**
     * Merge arrays for merge sorting
     *
     * @param  array  $leftArray
     * @param  array  $rightArray
     * @param  int  $begin
     * @param  int  $middle
     * @param  int  $end
     * @return int
     */
    private function merge(array &$leftArray, array &$rightArray, int &$begin, int &$middle, int &$end): int
    {
        $swaps = 0;
        $i = $begin;
        $j = $middle;
        // Iterate over arrays, copying from left to right to get sorted result
        for ($k = $begin; $k < $end; $k++) {
            $swaps++;
            if ($i < $middle && ($j >= $end || $leftArray[$i] <= $leftArray[$j])) {
                $rightArray[$k] = $leftArray[$i];
                $i++;
            } else {
                $rightArray[$k] = $leftArray[$j];
                $j++;
            }
        }
        return $swaps;
    }
}