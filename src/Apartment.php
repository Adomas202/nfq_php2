<?php

class Apartment extends Room {

    public function __construct(Int $roomNumber, Int $price)
    {
        $this->setRoomNumber($roomNumber);
        $this->setPrice($price);
        $this->setBedCount(4);
        $this->setRoomType('Diamond');
        $this->setRestroom(true);
        $this->setBalcony(true);
        $this->setExtras('TV', 'air-conditioner', 'refrigerator', 'kitchen-box', 'mini-bar', 'bathtub', 'free Wi-Fi');
    }
}