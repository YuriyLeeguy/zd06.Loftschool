<?php
require "../Controler/ageControler.php";
require "../traits/addService.php";

class tariffDay extends ageController
{
    use addService;

    protected $minutes;
    protected $age;
    protected $addService;
    protected $km;

    public function __construct($km, $minutes, $age, $addService = false)
    {
        $this->minutes = $minutes;
        $this->age = $age;
        $this->addService = $addService;
        $this->km = $km;
    }

    public function tariffDay()
    {
        define('MINTIME', 0.020);
        define('PRICEKM', 1);
        define('PRICEDAY', 1000);

        $getAge = ageController::setAge($this->age);

        $getService = $this->setService($this->minutes, $this->addService);

        $checkTime = $this->checkTimeForDay();
        $day = $this->minutes / 1440;

        if (intval($getAge)) {
            if ($checkTime > MINTIME) {
                $result = (ceil($day) * PRICEDAY + PRICEKM * $this->km + $getService) * $getAge;
                $view = "Тариф Дневной: " . $result . "руб";
            } else {
                $result = (round($day) * PRICEDAY + PRICEKM * $this->km + $getService) * $getAge;
                $view = "Тариф Дневной: " . $result . "руб";
            }
        } else {
            $view = $getAge;
        }
        return $view;
    }

    public function checkTimeForDay()
    {
        $day = $this->minutes / 1440;
        return bcdiv($day - round($day), 1, 3);
    }
}

$temp = new tariffDay(1,1440+30, 18);
echo $temp->tariffDay();
