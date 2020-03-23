<?php


namespace App;


use DateTime;

class Holiday
{
    /** @var DateTime */
    private $dateTime;

    public function __construct()
    {
        $this->dateTime = new DateTime;
    }

    public function getTheme(): string
    {
        return $this->isXmas() ? "Xmas" : "not Xmas";
    }

    /**
     * @return DateTime
     * @throws \Exception
     */
    protected function getDateTime(): DateTime
    {
        return $this->dateTime;
    }

    /**
     * @param DateTime $date
     * @return bool
     */
    protected function isXmas(): bool
    {
        return $this->monthIsValid() && $this->dayIsValid();
    }

    /**
     * @param DateTime $date
     * @return bool
     */
    protected function monthIsValid(): bool
    {
        $dateTime = $this->getDateTime();
        return $dateTime->format("m") == "12";
    }

    /**
     * @return bool
     */
    protected function dayIsValid(): bool
    {
        $day = $this->getDateTime()->format("d");
        return $day == "24" || $day == "25";
    }
}
