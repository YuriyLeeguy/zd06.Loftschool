<?php

class tariffHour extends ageController implements tariffInterface
{
    use addService;

    protected $minutes;
    protected $age;
    protected $addService;

    public function __construct($minutes, $age, $addService = false)
    {
        $this->minutes = $minutes;
        $this->age = $age;
        $this->addService = $addService;
    }
    public function tariff()
    {
        define('PRICEHOUR', 200);

        $getAge = ageController::setAge($this->age);
        $getService = $this->setService($this->minutes, $this->addService);

        if (intval($getAge)){
            $result = (ceil($this->minutes/60) * PRICEHOUR  + $getService) * $getAge;
            $view = "Тариф Часовой: " . $result . "руб";
        }else{
            $view = $getAge;
        }
        return $view;
    }
}
//$temp = new tariffHour(60,25);
//echo $temp->tariffHour();