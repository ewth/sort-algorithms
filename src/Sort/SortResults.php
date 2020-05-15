<?php

namespace Sort;

/**
 * Class SortResults
 *
 * @author Ewan Thompson <contact@ewan.me>
 *
 * @package Sort
 */
class SortResults
{
    /** @var array */
    protected $sorted;
    /** @var int */
    protected $swapsPerformed;

    /**
     * SortResults constructor.
     * @param  array  $sorted
     * @param  int  $swapsPerformed
     */
    public function __construct(array $sorted, int $swapsPerformed)
    {
        $this->sorted = $sorted;
        $this->swapsPerformed = $swapsPerformed;
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
