<?php

namespace Src;

use DateTime;

class Sloth
{
    private $dob;
    private $name;

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
}
