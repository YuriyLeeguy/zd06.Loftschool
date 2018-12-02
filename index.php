<?php
require "./Controler/ageControler.php";
require "./traits/addService.php";
require "./tariff/tariffBase.php";
require "./tariff/tariffDay.php";
require "./tariff/tariffHour.php";
require "./tariff/tariffStudent.php";

$result = new tariffHour(10,60, true);
echo $result->tariff();
