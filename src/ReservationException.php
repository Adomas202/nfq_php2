<?php

namespace Nfq\Akademija;

class ReservationException extends \Exception
{
    protected $message;
    public function __construct(string $message)
    {
        $this->message = $message;
    }
    public function __toString()
    {
        return $this->message;
    }
}