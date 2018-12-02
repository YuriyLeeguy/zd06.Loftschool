<?php

class tariffBase extends ageController implements tariffInterface
{
    use addService;

//    protected $km;
//    protected $minutes;
//    protected $age;
//    protected $addService;
//
//    public function __construct($km, $minutes, $age, $addService = false)
//    {
//        $this->km = $km;
//        $this->minutes = $minutes;
//
//        $this->age = $age;
//        $this->addService = $addService;
//    }


    public function tariff()
    {
        define('PRICEKM', 10);
        define('PRICEMINUTE', 3);

        $getAge = $this->setAge($this->age);
        $getService = $this->setService($this->minutes, $this->addService);

        if (intval($getAge)) {
            $result = (($this->km * PRICEKM) + ($this->minutes * PRICEMINUTE) + $getService) * $getAge;
            $view = "Тариф Базовый: " . $result . "руб";
        } else {
            $view = $getAge;
        }
        return $view;
    }
}


