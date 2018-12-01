<?php

class getData
{
    protected $km;
    protected $minutes;
    protected $age;
    protected $addService;

    public function __construct($km, $minutes, $age, $addService)
    {
        $this->km = $km;
        $this->minutes = $minutes;
        $this->age = $age;
        $this->addService = $addService;
    }
     public function ageGet()
    {
        $maxAge = 65;
        $middleAge = 21;
        $minAge = 18;
        if ($this->age > $maxAge or $minAge > $this->age) {
            $this->coefficientAge = "Возраст не подходит";
        } elseif ($this->age >= $minAge and $this->age <= $middleAge) {
             $this->coefficientAge = 1.1;
        } else {
             $this->coefficientAge = 1;
        }
        return $this->coefficientAge;
    }
}


