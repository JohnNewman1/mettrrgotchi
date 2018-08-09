<?php

namespace Src;

use DateTime;

class Sloth
{
    private $dob;
    private $name;
    private $hunger = 5;

    public function __construct($date = null)
    {
        $this->dob = $date ?? new DateTime();
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
        return $this->name . ' eats a ' . $food;
    }
}
