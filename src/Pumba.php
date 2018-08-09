<?php

namespace Src;

use DateTime;

class Pumba {

  private const POO = "
      (   )
   (   ) (
    ) _   )
     ( \_
   _(_\ \)__
  (____\___))
  ";

  public const PICTURE = "
  \"\"(\_          _/)
  \"\")  (        )  (
  \"\"(    (      )    )
  \"\")_(\ \.--./ /)_(
  \"\"\"`)` 6  6 '('
  \"\"\"/        \
  \"\"\"(  )    (  )
  \"\"\" `(_c__c_)`
  \"\"\"\"\"`--`\r\n";

  private $dob;
  private $name;
  private $hunger = 10;
  private $thirst = true;

/**
   * @param DateTime $dt (optional) date of birth
   * @return void
*/

public function __construct($dt = null)
{
  $this->dob = $dt ?? new DateTime();
}

/**
 * @return string name of pumba
*/

public function getName()
{
  return $this->name;
}

/**
  * @return void for name property
*/

public function setName($name)
{
  $this->name = $name;
}

/**
  * @return int age
*/

public function getAge()
{
  return $this->dob->diff(new DateTime())->days;
}

/**
  * @return int hunger
*/

public function getHunger()
{
  return $this->hunger;
}

public function munch($chocolate)
{
  $this->hunger -= strlen($chocolate);
  return "Current hunger level: {$this->hunger}";
}

/**
  * @return int thirst
*/

public function getThirst()
{
  return $this->thirst;
}

public function drink()
{
  if ($this->thirst == true) {
    return "Gulp Gulp Gulp";
  } else {
    return "Pumba isn't thirsty atm!";
  }
}

public function poop()
{
  if ($this->hunger < 5) {
     $this->hunger = 9;
      return self::POO;
    } else {
      return '';
    }
}

public function playMusic()
{
  return "♩ ♪ ♫ ♬ ♭ ♮ ♯";
}

}
