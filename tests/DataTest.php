<?php

namespace Sort;

use PHPUnit\Framework\TestCase;

class DataTest extends TestCase
{
    public function testRandomSetReturnsArray()
    {
        $dataSet = Data::randomSet();
        $this->assertIsArray($dataSet);
    }

    public function testRandomSetReturnsAtLeast1000Items()
    {
        $dataSet = Data::randomSet();
        $this->assertGreaterThanOrEqual(1000, count($dataSet));
    }

    public function testRandomSetReturnsOnlyIntegers()
    {
        $dataSet = Data::randomSet();
        $this->assertContainsOnly("integer", $dataSet);
    }
}
