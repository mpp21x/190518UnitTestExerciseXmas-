<?php

namespace Test;

use App\Holiday;
use PHPUnit\Framework\TestCase;

class HolidayTest extends TestCase
{

    /** @test */
    public function testGetThemeIsXmax()
    {
        $holiday = new Holiday();
        $this->assertEquals("Xmax", $holiday->getTheme());
    }
}
