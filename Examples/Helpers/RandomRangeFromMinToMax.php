<?php

namespace Examples\Helpers;

class RandomRangeFromMinToMax{

    private vector $vector;

    public function __construct(int $x, int $y) {
        if($x == $y){
            throw new \Exception('x cannot be equal to y');
        }
        $this->vector = ($x < $y)? new Vector($x, $y) : new Vector($y, $x);
    }

    public function getVector() : Vector{
        return $this->vector;
    }

}
