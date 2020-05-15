<?php

include('../vendor/autoload.php');

$mergeSort = new \Sort\MergeSort();
$insertionSort = new \Sort\InsertionSort();

$timeTaken = new \Sort\TimeTaken();

$data = \Sort\Data::randomSet();


/**
 * Merge sort
 */
$itemCount = number_format(count($data));
echo "Sorting {$itemCount} items...\n";
$timeTaken->start();
$sortResults = $mergeSort->sort($data);
$timeTaken->stop();
$sortedTime = number_format($timeTaken->getTimeTaken() * 1000);
$sortedSwaps = number_format($sortResults->getSwapsPerformed());
echo "Merge sort: {$sortedSwaps} swaps in {$sortedTime}ms\n";

/**
 * Insertion sort
 */
$data = \Sort\Data::randomSet(1000,5000);
$itemCount = number_format(count($data));
echo "Sorting {$itemCount} items...\n";
$timeTaken->start();
$sortResults = $insertionSort->sort($data);
$timeTaken->stop();
$sortedTime = number_format($timeTaken->getTimeTaken() * 1000);
$sortedSwaps = number_format($sortResults->getSwapsPerformed());
echo "Insertion sort: {$sortedSwaps} swaps in {$sortedTime}ms\n";
