<?php

class tariffBase extends ageController
{
    use addService;

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


