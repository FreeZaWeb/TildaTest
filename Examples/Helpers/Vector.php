<?php

namespace Examples\Helpers;

class Vector{

    private int $x;
    private int $y;

    public function __construct(int $x, int $y) {
        $this->x = $x;
        $this->y = $y;
    }

    public function getX() : int {
        return $this->x;
    }

    public function getY() : int {
        return $this->y;
    }

}
