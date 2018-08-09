<?php

namespace Src;

use DateTime;

class Slug
{
    public const PICTURE = "
    @)@)
    _|_
    _(___,`\     _,--------------._
    \`==`   *-_,'          O       `~._
    `,    :        O              }   `~._
    `\      -        _      O           `~._
    |  ;      -         -      \"      ;   O. (trail of slime:)
    |      O                       O        \#|#####   ######
    \          _,-:\"\"\"\"\"\"\'`:-._   -  .   O   \################
    `\"\"\"\"\"\"~'`                `._         \"  `.#### ####  ####
    \"\"\"\"\"\"\"-.  -  \#############
    \"\"\"\"\"'\# ### ####\r\n";

    private const POO = "
        (   )
     (   ) (
      ) _   )
       ( \_
     _(_\ \)__
    (____\___))
    ";

    private $dob;
    private $name;
    private $hunger = 5;

    /**
     * Constructor for Slug class
     * Accepts optional date of birth in form of DateTime instance
     * @param DateTime $dt (optional) date of birth
     * @return void
     */
    public function __construct($dt = null)
    {
        $this->dob = $dt ?? new DateTime();
    }

    /**
     * Getter for name property
     * @return string a name of slug
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Setter for name property
     * @return void
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * Getter for age property
     * @return int age of slug
     */
    public function getAge()
    {
        return $this->dob->diff(new DateTime())->days;
    }

    /**
     * @return int hunger level
     */
    public function getHunger()
    {
        return $this->hunger;
    }

    public function eat($food)
    {
        $this->hunger -= strlen($food);
        return "Current hunger level: {$this->hunger}";
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

    public function slime()
    {
        return "Ewwww!";
    }
}
