<?php

namespace Sort;

use PHPUnit\Framework\TestCase;

class TimeTakenTest extends TestCase
{

    public function testTimeTakenReturnsResultAfterStartThenStop()
    {
        $timeTaken = new TimeTaken();
        $timeTaken->start();
        usleep(100);
        $timeTaken->stop();
        $this->assertIsFloat($timeTaken->getTimeTaken());
        $this->assertGreaterThan(0, $timeTaken->getTimeTaken());
    }
}
