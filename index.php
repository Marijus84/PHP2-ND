<?php

require 'vendor/autoload.php';

use App\SingleRoom;
use App\Guest;
use App\Reservation;
use App\BookingManager;

$room = new SingleRoom(1408, 99);
$guest = new Guest('Vardenis', 'Pavardenis');
$startDate = new \DateTime('2019-04-20');
$endDate = new \DateTime('2019-04-25');
$reservation = new Reservation($startDate, $endDate, $guest);
BookingManager::bookRoom($room, $reservation);

//Kodas skirtas ištestuoti custom exception ir rezervacijos pašalinimą
//$startDate = new \DateTime('2019-04-20');
//$endDate = new \DateTime('2019-04-25');
//$reservation = new Reservation($startDate, $endDate, $guest);
//BookingManager::bookRoom($room, $reservation);
//BookingManager::removeBooking($room, $reservation);
