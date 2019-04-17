<?php


namespace App;


/**
 * Interface ReservableInterface
 * @package App
 */
interface ReservableInterface
{

    /**
     * @param $reservation
     * @return mixed
     */
    public function addReservation($reservation);


    /**
     * @param $reservation
     * @return mixed
     */
    public function removeReservation($reservation);
}

/**
 * Class Room
 * @package App
 */
class Room implements ReservableInterface
{

    /**
     * @var string
     */
    private $roomType;

    /**
     * @var bool
     */
    private $hasRestroom;

    /**
     * @var bool
     */
    private $hasBalcony;

    /**
     * @var int
     */
    private $bedCount;

    /**
     * @var int
     */
    private $roomNumber;

    /**
     * @var array
     */
    private $extras;

    /**
     * @var int
     */
    private $price;

    /**
     * @var array
     */
    private $reservations = [];

    /**
     * @return array
     */
    public function getReservations(): array
    {
        return $this->reservations;
    }


    /**
     * @param $reservation
     * @return mixed|void
     */
    public function addReservation($reservation)
    {
        if ($this->reservations) {
            foreach ($this->reservations as $booked) {

                try {
                    if ($booked == $reservation) {
                        throw new CustomException($booked);
                    } else {
                        $this->reservations[] = $reservation;
                    }

                } catch (CustomException $e) {
                    echo $e->errorMessage();
                }
            }

        } else {
            $this->reservations[] = $reservation;
        }

        return true;
    }

    /**
     * @param $reservation
     * @return mixed|void
     */
    public function removeReservation($reservation)
    {

        foreach ($this->reservations as $booked) {

            if ($booked == $reservation) {
                return true;
            }
        }
    }

    /**
     * @return string
     */
    public function getRoomType(): string
    {
        return $this->roomType;
    }

    /**
     * @param mixed $roomType
     */
    public function setRoomType($roomType): void
    {
        $this->roomType = $roomType;
    }

    /**
     * @return bool
     */
    public function getHasRestroom(): bool
    {
        return $this->hasRestroom;
    }

    /**
     * @param mixed $hasRestroom
     */
    public function setHasRestroom($hasRestroom): void
    {
        $this->hasRestroom = $hasRestroom;
    }

    /**
     * @return bool
     */
    public function getHasBalcony(): bool
    {
        return $this->hasBalcony;
    }

    /**
     * @param mixed $hasBalcony
     */
    public function setHasBalcony($hasBalcony): void
    {
        $this->hasBalcony = $hasBalcony;
    }

    /**
     * @return int
     */
    public function getBedCount(): int
    {
        return $this->bedCount;
    }

    /**
     * @param mixed $bedCount
     */
    public function setBedCount($bedCount): void
    {
        $this->bedCount = $bedCount;
    }

    /**
     * @return int
     */
    public function getRoomNumber(): int
    {
        return $this->roomNumber;
    }

    /**
     * @param mixed $roomNumber
     */
    public function setRoomNumber($roomNumber): void
    {
        $this->roomNumber = $roomNumber;
    }

    /**
     * @return array
     */
    public function getExtras(): array
    {
        return $this->extras;
    }

    /**
     * @param mixed $extras
     */
    public function setExtras($extras): void
    {
        $this->extras = $extras;
    }

    /**
     * @return int
     */
    public function getPrice(): int
    {
        return $this->price;
    }

    /**
     * @param mixed $price
     */
    public function setPrice($price): void
    {
        $this->price = $price;
    }


    public function __toString()
    {
        return 'Room <strong>' . $this->getRoomNumber() . '</strong> successfully booked for <strong>';

    }
}