<?php
require "./Controler/ageControler.php";
require "./traits/addService.php";
require "./tariff/tariffBase.php";
require "./tariff/tariffDay.php";
require "./tariff/tariffHour.php";
require "./tariff/tariffStudent.php";

$result = new tariffStudent(10,121,18, true);
echo $result->tariff();
