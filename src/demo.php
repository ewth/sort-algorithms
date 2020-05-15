<?php

include('../vendor/autoload.php');

$mergeSort = new \Sort\MergeSort();
$insertionSort = new \Sort\InsertionSort();

$data = \Sort\Data::randomSet();
$itemCount = number_format(count($data));

echo "Sorting {$itemCount} items...\n";

/**
 * Merge sort
 */
$sortResults = $mergeSort->sort($data);
$sortedTime = number_format($sortResults->getTimeTaken() * 1000);
$sortedSwaps = number_format($sortResults->getSwapsPerformed());

echo "Merge sort: {$sortedSwaps} swaps in {$sortedTime}ms\n";

/**
 * Insertion sort
 */
$data = \Sort\Data::randomSet(1000,5000);
$itemCount = number_format(count($data));
echo "Sorting {$itemCount} items...\n";
$sortResults = $insertionSort->sort($data);
$sortedTime = number_format($sortResults->getTimeTaken() * 1000);
$sortedSwaps = number_format($sortResults->getSwapsPerformed());

echo "Insertion sort: {$sortedSwaps} swaps in {$sortedTime}ms\n";
