<?php

namespace Tests;

use Src\Pumba;
use PHPUnit\Framework\TestCase;

class PumbaTest extends TestCase
{
  /** @test */
  public function class_name_is_pumba()
  {
    $failMsg = "Class name should be 'Src\Pumba'";
    $this->assertSame(Pumba::class, 'Src\Pumba', $failMsg);
  }

  /** @test */
  public function object_is_pumba_instance()
  {
    $pumba = new Pumba();

    $failMsg = "Class name should be 'Src\Pumba'";
    $this->assertSame(get_class($pumba), 'Src\Pumba', $failMsg);
  }

  /** @test */
  public function pumba_has_name()
  {
    $pumba = new Pumba();

    $failMsg = "Your Pumba should have a name";
    $this->assertSame($pumba->getName(), null, $failMsg . "to be null");

    $name = "Kimmy";
    $pumba->setName($name);
    $this->assertSame($pumba->getName(), $name, $failMsg . "to be { $name . ' .'}");

  }

  /** @test */
  public function pumba_has_age()
  {
    $now = new \DateTime();
    $yesterday = $now->sub(new \DateInterval('P1D'));
    $pumba = new Pumba($yesterday);

    $failMsg = "Pumba should be a day old";
    $this->assertSame($pumba->getAge(), 1, $failMsg);
  }

  /** @test */
  public function pumba_is_hungry()
  {
    $pumba = new Pumba();

    $failMsg = "Pumba's hunger should be level 10";
    $this->assertSame($pumba->getHunger(), 10, $failMsg);
  }

  /** @test */
  public function pumba_can_munch()
  {
    $pumba = new Pumba();
    $msg = "Current hunger level: ";

    $failMsg = "Pumba's hunger should be ";
    $this->assertSame($pumba->getHunger(), 10, $failMsg . '10');

    $returnMsg = $pumba->munch('xx');

    $this->assertSame($pumba->getHunger(), 8, $failMsg . '8');
    $this->assertSame($returnMsg, $msg . '8', $failMsg . '8');
  }

  /** @test */
  public function pumba_is_thirsty()
  {
    $pumba = new Pumba();

    $failMsg = "Pumba should be thirsty";
    $this->assertSame($pumba->getThirst(), true, $failMsg);
  }

  /** @test */
  public function pumba_can_drink()
  {
    $pumba = new Pumba();

    $failMsg = "Pumba isn't thirsty atm!";
    $this->assertSame($pumba->drink(), "Gulp Gulp Gulp", $failMsg);
  }

  /** @test */
  public function pumba_can_poop()
  {
    $pumba = new Pumba();

    $above6 = $pumba->poop();

    $pumba->munch('xxx');

    $below6 = $pumba->poop();

    $this->assertTrue(strlen($above6) == 0, "Can't poop im not even hungry");
//    $this->assertTrue(strlen($below6) >= 1, "Should poop coz im hungry");
//    $this->assertTrue($pumba->getHunger() >= 9, "Should be hungry after pooping");
  }

  /** @test */
  public function pumba_play_music()
  {
    $pumba = new Pumba();

    $output = $pumba->playMusic();

    $this->assertTrue(strlen($output) > 0, "Play some music");
  }
}
