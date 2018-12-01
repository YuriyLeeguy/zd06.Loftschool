<?php
require "../zd06.Loftschool/tariff/getdata.php";
require "../zd06.Loftschool/tariff/tariffBase.php";


$tmp = new tariffBase(10,1440,25,1);

echo '<PRE>';
print_r($tmp);
die();
