<?php

namespace Nfq\Akademija;

class Room implements ReservableInterface
{
    private $roomType;
    private $restroom;
    private $balcony;
    private $bedCount;
    private $roomNumber;
    private $extras;
    private $price;
    private $reservations = [];

    /**
     * @return mixed
     */
    public function getRoomType()
    {
        return $this->roomType;
    }

    /**
     * @param mixed $roomType
     */
    public function setRoomType($roomType)
    {
        $this->roomType = $roomType;
    }

    /**
     * @return mixed
     */
    public function getRestroom()
    {
        return $this->restroom;
    }

    /**
     * @param mixed $restroom
     */
    public function setRestroom($restroom)
    {
        $this->restroom = $restroom;
    }

    /**
     * @return mixed
     */
    public function getBalcony()
    {
        return $this->balcony;
    }

    /**
     * @param mixed $balcony
     */
    public function setBalcony($balcony)
    {
        $this->balcony = $balcony;
    }

    /**
     * @return mixed
     */
    public function getBedCount()
    {
        return $this->bedCount;
    }

    /**
     * @param mixed $bedCount
     */
    public function setBedCount($bedCount)
    {
        $this->bedCount = $bedCount;
    }

    /**
     * @return mixed
     */
    public function getRoomNumber()
    {
        return $this->roomNumber;
    }

    /**
     * @param mixed $roomNumber
     */
    public function setRoomNumber($roomNumber)
    {
        $this->roomNumber = $roomNumber;
    }

    /**
     * @return mixed
     */
    public function getExtras()
    {
        return $this->extras;
    }

    /**
     * @param mixed $extras
     */
    public function setExtras($extras)
    {
        $this->extras = $extras;
    }

    /**
     * @return mixed
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * @return array
     */
    public function getReservations(): array
    {
        return $this->reservations;
    }

    /**
     * @param array $reservations
     */
    public function setReservations(array $reservations)
    {
        $this->reservations = $reservations;
    }

    /**
     * @param mixed $price
     */
    public function setPrice($price)
    {
        $this->price = $price;
    }

    public function addReservation($reservation)
    {
        if ($this->isDateAvailable($reservation) == true)
        {
            array_push($this->reservations, $reservation);
        } else {
            throw new ReservationException('All rooms are already booked for this date');
        }
    }

    public function isDateAvailable(Reservation $reservation) : bool
    {
        foreach ($this->reservations as $oneReservation)
        {
            if ($reservation->getStartDate() >= $oneReservation->getStartDate() && $reservation->getStartDate() <= $oneReservation->getEndDate())
            {
                return false;
            }
            if ($reservation->getEndDate() >= $oneReservation->getStartDate() && $reservation->getEndDate() <= $oneReservation->getEndDate())
            {
                return false;
            }
            if ($reservation->getStartDate() >= $oneReservation->getStartDate() && $reservation->getEndDate() <= $oneReservation->getStartDate())
            {
                return false;
            }
            if ($reservation->getStartDate() >= $oneReservation->getEndDate() && $reservation->getStartDate() <= $oneReservation->getEndDate())
            {
                return false;
            }
        }
        return true;
    }

    function removeReservation($reservation)
    {
        $this->reservations = array_diff($this->reservations, [$reservation]);
    }

    public function __toString()
    {
        return "Room<strong> " . $this->getRoomNumber() . " </strong>";
    }
}