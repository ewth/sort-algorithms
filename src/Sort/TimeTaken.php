<?php

namespace Sort;

/**
 * Class TimeTaken
 *
 * This class is for rudimentary timing. It is not intended to be highly accurate, only indicative.
 *
 * @package Sort
 */
class TimeTaken
{

    /** @var float */
    protected $timeStart;
    /** @var float */
    protected $timeEnd;

    /**
     * Record the starting time
     */
    public function start(): void
    {
        $this->timeEnd = 0;
        $this->timeStart = microtime(true);
    }

    /**
     * Record the stopping time to calculate time difference
     */
    public function stop(): void
    {
        $this->timeEnd = microtime(true);
    }

    /**
     * Return the time between start() and stop()
     *
     * @return float
     */
    public function getTimeTaken(): float
    {
        return $this->timeEnd > $this->timeStart ? ($this->timeEnd - $this->timeStart) : 0;
    }
}