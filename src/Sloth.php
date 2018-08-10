<?php

namespace Src;

use DateTime;
use Src\RandomGenerator;

class Sloth
{
    private $dob;
    private $name;
    private $hunger = 5;
    private $generator;

    public function __construct($date = null, $randomGeneratorClass = null)
    {
        $this->dob = $date ?? new DateTime;
        $this->generator = $randomGeneratorClass ?? new RandomGenerator;
    }

    public function getAge()
    {
        return $this->dob->diff(new DateTime())->days;
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getHunger()
    {
        return $this->hunger;
    }

    public function eat($food)
    {
        $this->hunger += $this->generator->generate(4);
        return $this->name . ' eats a ' . $food;
    }

    public function poop()
    {
        $this->hunger -= 3;
    }
}
