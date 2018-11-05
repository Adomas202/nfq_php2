<?php

namespace Nfq\Akademija;

class Guest
{

    private $nameFirst;
    private $nameLast;

    public function __construct(String $nameFirst, String $nameLast)
    {
        $this->nameFirst = $nameFirst;
        $this->nameLast = $nameLast;
    }

    /**
     * @return mixed
     */
    public function getNameFirst()
    {
        return $this->nameFirst;
    }

    /**
     * @param mixed $nameFirst
     */
    public function setNameFirst($nameFirst)
    {
        $this->nameFirst = $nameFirst;
    }

    /**
     * @return mixed
     */
    public function getNameLast()
    {
        return $this->nameLast;
    }

    /**
     * @param mixed $nameLast
     */
    public function setNameLast($nameLast)
    {
        $this->nameLast = $nameLast;
    }

    public function __toString()
    {
        return "<strong>" . $this->getNameFirst() . " " . $this->getNameLast() . "</strong>";
    }

}