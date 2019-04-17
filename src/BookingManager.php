<?php


namespace App;


/**
 * Class BookingManager
 * @package App
 */
class BookingManager
{
    /**
     * @param $room
     * @param $reservation
     */
    public static function bookRoom($room, $reservation): void
    {
        $room->addReservation($reservation);
        echo $room . $reservation;

    }

    /**
     * @param $room
     * @param $reservation
     */
    public static function removeBooking($room, $reservation): void
    {

        $room->removeReservation($reservation);
        echo 'Booking was deleted!';
    }
}