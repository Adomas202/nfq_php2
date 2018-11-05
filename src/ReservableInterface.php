<?php

namespace Nfq\Akademija;

interface ReservableInterface
{
    function addReservation($reservation);
    function removeReservation($reservation);
}