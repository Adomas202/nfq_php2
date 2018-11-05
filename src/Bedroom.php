<?php

namespace Nfq\Akademija;

class Bedroom extends Room
{

    public function __construct(Int $roomNumber, Int $price)
    {
        $this->setRoomNumber($roomNumber);
        $this->setPrice($price);
        $this->setBedCount(2);
        $this->setRoomType('Gold');
        $this->setRestroom(true);
        $this->setBalcony(true);
        $this->setExtras('TV', 'air-conditioner', 'refrigerator', 'mini-bar', 'bathtub');
    }
}