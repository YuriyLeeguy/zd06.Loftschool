<?php
class getData implements priceInterface
{
    protected $km;
    protected $minutes;
    protected $age;
    protected $addService;
    protected $result;

    public function __construct($km, $minutes, $age, $addService)
    {
        $this->km = $km;
        $this->minutes = $minutes;
        $this->age = $age;
        $this->addService = $addService;
    }

    public function price()
    {
        $priceKm = 10;
        $priceMinute = 3;
        $this->result = $this->km * $priceKm + $this->minutes * $priceMinute;
    }
}
