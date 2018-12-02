<?php

class tariffHour extends ageController
{
    use addService;

    public function __construct($minutes, $age, $addService = false)
    {
     parent::__construct(null,$minutes, $age,$addService);
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
