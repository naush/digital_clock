<?php

use PHPUnit\Framework\TestCase;

class ClockTest extends TestCase
{
    public function testDisplayZeroSeconds(): void
    {
        $this->assertEquals(
            Clock::display('0', '0', '0'),
            <<<SECOND
 -- 
|  |
    
|  |
 -- 
SECOND
        );
    }

    public function testDisplayOneSecond(): void
    {
        $this->assertEquals(
            Clock::display('0', '0', '1'),
            <<<SECOND
    
   |
    
   |
    
SECOND
        );
    }

    public function testDisplayTwoSeconds(): void
    {
        $this->assertEquals(
            Clock::display('0', '0', '2'),
            <<<SECOND
 -- 
   |
 -- 
|   
 -- 
SECOND
        );
    }
}
