<?php


namespace App;

/**
 * Class Reservation
 * @package App
 */
class Reservation
{
    /**
     * @var
     */
    private $startDate;
    /**
     * @var
     */
    private $endDate;
    /**
     * @var
     */
    private $guest;

    /**
     * Reservation constructor.
     * @param $startDate
     * @param $endDate
     * @param $guest
     */
    public function __construct($startDate, $endDate, $guest)
    {
        $this->startDate = $startDate;
        $this->endDate = $endDate;
        $this->guest = $guest;
    }

    /**
     * @return mixed
     */
    public function getStartDate(): object
    {
        return $this->startDate;
    }

    /**
     * @param mixed $startDate
     */
    public function setStartDate($startDate): void
    {
        $this->startDate = $startDate;
    }

    /**
     * @return mixed
     */
    public function getEndDate(): object
    {
        return $this->endDate;
    }

    /**
     * @param mixed $endDate
     */
    public function setEndDate($endDate): void
    {
        $this->endDate = $endDate;
    }

    /**
     * @return mixed
     */
    public function getGuest(): string
    {
        return $this->guest;
    }

    /**
     * @param mixed $guest
     */
    public function setGuest($guest): void
    {
        $this->guest = $guest;
    }

    /**
     * @return string
     */
    public function __toString()
    {
        return $this->getGuest() . ' ' . 'from <time>' . $this->getStartDate()->format('Y-m-d') . '</time> to <time>' .
            $this->getEndDate()->format('Y-m-d') . '</time>!';

    }
}