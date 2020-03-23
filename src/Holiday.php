<?php


namespace App;


use DateTime;

class Holiday
{

    public function getTheme(): string
    {
        $date = new DateTime();
        $isXmax = $date->format("m") == "12" && $date->format("d") == "25";
        return  $isXmax ? "Xmas" : "not Xmas";
    }
}
