<?php

namespace Tests;

use Src\Sloth;
use Src\RandomGenerator;

use PHPUnit\Framework\TestCase;

class SlothTest extends TestCase
{
    private $sloth;
    protected function setUp()
    {
        $mock = \Mockery::mock('RandomGenerator');
        $mock->shouldReceive('generate')->andReturn(2);
        $this->sloth = new Sloth(null, $mock);
        $name = 'Roger';
        $this->sloth->setName($name);
    }

    /** @test */
    public function sloth_has_age()
    {
        $now = new \DateTime();
        $yesterday = $now->sub(new \DateInterval('P1D'));
        $slothAge = new Sloth($yesterday);

        $this->assertSame(1, $slothAge->getAge());
    }

    /** @test */
    public function sloth_name_can_be_set()
    {
        $this->assertSame('Roger', $this->sloth->getName());
    }

    /** @test */
    public function sloth_hunger_is_five()
    {
        $this->assertSame(5, $this->sloth->getHunger());
    }
    /** @test */
    public function sloth_returns_string_when_eat()
    {
        $this->assertSame('Roger eats a banana', $this->sloth->eat('banana'));
    }

    /** @test */
    public function sloth_food_increases_hunger_by_two()
    {
        $this->sloth->eat('sock');
        $this->assertSame(7, $this->sloth->getHunger());
    }

    /** @test */
    public function poop_reduces_hunger_by_three()
    {
        $this->sloth->poop();
        $this->assertSame(2, $this->sloth->getHunger());
    }

    /** @test */

}
