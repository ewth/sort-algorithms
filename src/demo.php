<?php

include('../vendor/autoload.php');

$mergeSort = new \Sort\MergeSort();

$data = \Sort\Data::randomSet();
$itemCount = number_format(count($data));

echo "Sorting {$itemCount} items...\n";

$sortResults = $mergeSort->sort($data);
$sortedTime = number_format($sortResults->getTimeTaken() * 1000);
$sortedSwaps = number_format($sortResults->getSwapsPerformed());

echo "Merge sort: {$sortedSwaps} swaps in {$sortedTime}ms\n";
