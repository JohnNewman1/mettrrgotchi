<?php

namespace Tests;

use Src\Sloth;

use PHPUnit\Framework\TestCase;

class SlothTest extends TestCase
{
    private $sloth;
    protected function setUp()
    {
        $this->sloth = new Sloth;
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
}
