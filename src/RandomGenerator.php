<?php

namespace Src;

class RandomGenerator
{
    public function generate($num)
    {
        return rand(1, $num);
    }
}
