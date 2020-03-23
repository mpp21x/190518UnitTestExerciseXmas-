<?php

namespace Test;

use PHPUnit\Framework\TestCase;

class HolidayTest extends TestCase
{
    /** @var FakeHoliday */
    private $holiday;

    /** @test */
    public function testGetThemeIsXmas()
    {
        $this->holiday->setDateTime(12, 25);
        $this->assertEquals("Xmas", $this->holiday->getTheme());
    }


    /** @test */
    public function testGetThemeIsNotXmas()
    {
        $this->holiday->setDateTime(5, 18);
        $this->assertEquals("not Xmas", $this->holiday->getTheme());
    }


    /** @test */
    public function testWhenDecMonth24dayGetThemeIsXmas()
    {
        $this->holiday->setDateTime(12, 24);
        $this->assertEquals("Xmas", $this->holiday->getTheme());
    }

    protected function setUp(): void
    {
        $this->holiday = new FakeHoliday();
    }


}
