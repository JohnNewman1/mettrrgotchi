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
        $name = 'Roger';
        $this->sloth->setName($name);

        $this->assertSame($name, $this->sloth->getName());
    }
}
