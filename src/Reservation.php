<?php

namespace Nfq\Akademija;

class Reservation
{

    private $startDate;
    private $endDate;
    private $guest;

    public function __construct(\DateTime $startDate, \DateTime $endDate, Guest $guest)
    {
        $this->startDate = $startDate;
        $this->endDate = $endDate;
        $this->guest = $guest;
    }

    /**
     * @return mixed
     */
    public function getGuest()
    {
        return $this->guest;
    }

    /**
     * @param mixed $guest
     */
    public function setGuest($guest)
    {
        $this->guest = $guest;
    }

    /**
     * @return mixed
     */
    public function getStartDate()
    {
        return $this->startDate;
    }

    /**
     * @param mixed $startDate
     */
    public function setStartDate($startDate)
    {
        $this->startDate = $startDate;
    }

    /**
     * @return mixed
     */
    public function getEndDate()
    {
        return $this->endDate;
    }

    /**
     * @param mixed $endDate
     */
    public function setEndDate($endDate)
    {
        $this->endDate = $endDate;
    }

    public function __toString()
    {
        $startDate = $this->startDate->format('Y-m-d');
        $endDate = $this->endDate->format('Y-m-d');
        return " from <time>". $startDate . "</time> to <time>" . $endDate;
    }

}