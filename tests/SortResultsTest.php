<?php

namespace Sort;

use PHPUnit\Framework\TestCase;

class SortResultsTest extends TestCase
{
    public function testSortResultsInitialisedValuesCorrect()
    {
        $sorted = [5];
        $timeTaken = 21;
        $swapsPerformed = 19;
        $sortResults = new SortResults($sorted, $timeTaken, $swapsPerformed);
        $this->assertEquals($sorted, $sortResults->getSorted());
        $this->assertEquals($timeTaken, $sortResults->getTimeTaken());
        $this->assertEquals($swapsPerformed, $sortResults->getSwapsPerformed());
    }
}
