<?php


namespace App;


/**
 * Class Guest
 * @package App
 */
class Guest
{
    /**
     * @var
     */
    private $firstName;
    /**
     * @var
     */
    private $lastName;

    /**
     * Guest constructor.
     * @param $firstName
     * @param $lastName
     */
    public function __construct($firstName, $lastName)
    {
        $this->firstName = $firstName;
        $this->lastName = $lastName;
    }

    /**
     * @return mixed
     */
    public function getFirstName(): string
    {
        return $this->firstName;
    }

    /**
     * @param mixed $firstName
     */
    public function setFirstName($firstName): void
    {
        $this->firstName = $firstName;
    }

    /**
     * @return mixed
     */
    public function getLastName(): string
    {
        return $this->lastName;
    }

    /**
     * @param mixed $lastName
     */
    public function setLastName($lastName): void
    {
        $this->lastName = $lastName;
    }

    /**
     * @return string
     */
    public function __toString()
    {
        return ' ' . $this->getFirstName() . ' ' . $this->getLastName() . '</strong>';

    }
}