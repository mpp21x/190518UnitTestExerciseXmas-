<?php


namespace Test;


use App\Holiday;
use DateTime;

class FakeHoliday extends Holiday
{
    private $datetime;

    public function setDateTime(int $month, int $day)
    {
        $this->datetime = new DateTime("2019-" . $month . "-" . $day);
    }

    protected function getDateTime(): DateTime
    {
        return $this->datetime;
    }


}
