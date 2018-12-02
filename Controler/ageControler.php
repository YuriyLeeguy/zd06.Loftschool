<?php

abstract class ageController
{
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

    public function setAge($age)
    {
        define('MAXAGE', 65);
        define('MIDDLEAGE', 21);
        define('MINAGE', 18);

        if ($age > MAXAGE or MINAGE > $age) {
            $result = "Возраст не подходит";
        } elseif ($age >= MINAGE and $age <= MIDDLEAGE) {
            $result = 1.1;
        } else {
            $result = 1;
        }
        return $result;
    }

    public function setAgeStudent($age)
    {
        define('MAXAGE', 25);
        define('MINAGE', 18);

        if ($age > MAXAGE or MINAGE > $age) {
            return "Возраст не подходит";
        }
    }
}
