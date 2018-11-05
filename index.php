<?php

namespace Nfq\Akademija;
require_once __DIR__ . '/vendor/autoload.php';

$room = new SingleRoom(1480, 99);
$guest = new Guest('Vardenis', 'Pavardenis');

$startDate = new \DateTime('2018-11-01');
$endDate = new \DateTime('2018-11-05');
$reservation = new Reservation($startDate, $endDate, $guest);

BookingManager::bookRoom($room, $reservation);