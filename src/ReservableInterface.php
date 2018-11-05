<?php

interface ReservableInterface {
    function addReservation($reservation);
    function removeReservation($reservation);
}