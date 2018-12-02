<?php

trait addService
{
    public function setService($minutes, $addService)
    {
        define('ADDDRIVER', 100);
        define('GPS', 15);
        if ($addService) {
            return ceil($minutes / 60) * GPS + ADDDRIVER;
        }
    }

    public function setServiceForStudent($minutes, $addService)
    {
        define('GPS', 15);
        if ($addService) {
            return ceil($minutes / 60) * GPS;
        }
    }
}