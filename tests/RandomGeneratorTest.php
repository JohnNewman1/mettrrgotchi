<?php

namespace Tests;

use Src\RandomGenerator;
use PHPUnit\Framework\TestCase;

class RandomGeneratorTest extends TestCase
{
    /** @test */
    public function generates_random_number()
    {
        $rn = new RandomGenerator();
        $this->assertContains($rn->generate(10), range(1, 10));
    }

    /** @test */
    public function random_number_is_two()
    {
        srand(3);
        $rn = new RandomGenerator();
        $this->assertSame($rn->generate(3), 2);
    }
}
