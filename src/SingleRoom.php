<?php

namespace Nfq\Akademija;

class SingleRoom extends Room {

    private $roomNumber;
    private $price;

    public function __construct(Int $roomNumber, Int $price)
    {
        $this->setRoomNumber($roomNumber);
        $this->setPrice($price);
        $this->setBedCount(1);
        $this->setRoomType('Standard');
        $this->setRestroom(false);
        $this->setBalcony(false);
        $this->setExtras('TV', 'air-conditioner');
    }
}