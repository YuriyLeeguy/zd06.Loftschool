<?php

class tariffStudent extends ageController implements tariffInterface
{
    use addService;

    protected $km;
    protected $minutes;
    protected $age;
    protected $addService;

    public function __construct($km, $minutes, $age, $addService = false)
    {
        $this->km = $km;
        $this->minutes = $minutes;
        $this->age = $age;
        $this->addService = $addService;
    }

    public function tariff()
    {
        define('PRICEKM', 4);
        define('PRICEMINUTE', 1);

        $getAge = ageController::setAgeStudent($this->age);
        $getService = $this->setServiceForStudent($this->minutes, $this->addService);

        if (empty($getAge)) {
            $result = ($this->km * PRICEKM) + ($this->minutes * PRICEMINUTE) + $getService;
            $view = "Тариф Студенческий: " . $result . "руб";
        } else {
            $view = $getAge;
        }
        return $view;
    }
}

//$temp = new tariffStudent(5, 60, 21);
//echo $temp->tariffStudent();