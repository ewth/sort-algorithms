<?php

namespace Sort;

/**
 * Class SortResults
 * @package Sort
 */
class SortResults
{
    /** @var array */
    protected $sorted;
    /** @var float */
    protected $timeTaken;
    /** @var int */
    protected $swapsPerformed;

    /**
     * SortResults constructor.
     * @param  array  $sorted
     * @param  float  $timeTaken
     * @param  int  $swapsPerformed
     */
    public function __construct(array $sorted, float $timeTaken, int $swapsPerformed)
    {
        $this->sorted = $sorted;
        $this->timeTaken = $timeTaken;
        $this->swapsPerformed = $swapsPerformed;
    }

    /**
     * @return float
     */
    public function getTimeTaken(): float
    {
        return $this->timeTaken ?? 0;
    }

    /**
     * @return int
     */
    public function getSwapsPerformed(): int
    {
        return $this->swapsPerformed ?? 0;
    }

    /**
     * @return array
     */
    public function getSorted(): array
    {
        return $this->sorted ?? [];
    }

    /**
     * @return int
     */
    public function getSortedCount() : int
    {
        return $this->sorted ? count($this->sorted) : 0;
    }
}
