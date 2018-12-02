<?php
require "../tariff/tariffInterface.php";
require "../Controler/ageControler.php";
require "../traits/addService.php";
require "../tariff/tariffBase.php";
require "../tariff/tariffDay.php";
require "../tariff/tariffHour.php";

class controller
{
    public function run($tariffType){

        $tariff = new $tariffType(60,20);
        echo $tariff->tariff();
    }
}

$result = new controller();
$result->run(tariffHour::class);

//$temp = new tariffBase(5, 60, 25);
//echo $temp->tariffBase();