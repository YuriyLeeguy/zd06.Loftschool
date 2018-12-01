<?php
require "../Controler/ageControler.php";
require "../traits/addService.php";

class tariffBase extends ageController
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

    public function tariffBase()
    {
        define('PRICEKM', 10);
        define('PRICEMINUTE', 3);

        $getAge = ageController::setAge($this->age);

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

$temp = new tariffBase(5, 60, 25);
echo $temp->tariffBase();
