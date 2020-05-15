<?php

namespace Sort;

use PHPUnit\Framework\TestCase;

class SortResultsTest extends TestCase
{
    public function testSortResultsInitialisedValuesCorrect()
    {
        $sorted = [5];
        $swapsPerformed = 19;
        $sortResults = new SortResults($sorted, $swapsPerformed);
        $this->assertEquals($sorted, $sortResults->getSorted());
        $this->assertEquals($swapsPerformed, $sortResults->getSwapsPerformed());
    }
}
