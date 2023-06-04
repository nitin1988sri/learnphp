<?php

namespace Logical;

class MajorityElement
{
    public function __construct(private array $nums)
    {
    }

    public function solve()
    {
        $count = 0;
        $candidate = null;
        foreach ($this->nums as $num) {
            if ($count == 0) {
                $candidate = $num;
                $count++;
            } else if ($candidate == $num) {
                $count++;
            } else {
                $count--;
            }
        }
        return $candidate;
    }
}
