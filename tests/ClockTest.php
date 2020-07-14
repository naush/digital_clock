<?php

use PHPUnit\Framework\TestCase;

class ClockTest extends TestCase
{
    public function testDisplayZero(): void
    {
        $this->assertEquals(
            Clock::display('0'),
            <<<TIME
 -- 
|  |
    
|  |
 -- 
TIME
        );
    }

    public function testDisplayoneSecond(): void
    {
        $this->assertEquals(
            Clock::display('1'),
            <<<TIME
    
   |
    
   |
    
TIME
        );
    }

    public function testDisplayTwo(): void
    {
        $this->assertEquals(
            Clock::display('2'),
            <<<TIME
 -- 
   |
 -- 
|   
 -- 
TIME
        );
    }

    public function testDisplayThree(): void
    {
        $this->assertEquals(
            Clock::display('3'),
            <<<TIME
 -- 
   |
 -- 
   |
 -- 
TIME
        );
    }

    public function testDisplayFour(): void
    {
        $this->assertEquals(
            Clock::display('4'),
            <<<TIME
    
|  |
 -- 
   |
    
TIME
        );
    }

    public function testDisplayFive(): void
    {
        $this->assertEquals(
            Clock::display('5'),
            <<<TIME
 -- 
|   
 -- 
   |
 -- 
TIME
        );
    }

    public function testDisplaySix(): void
    {
        $this->assertEquals(
            Clock::display('6'),
            <<<TIME
 -- 
|   
 -- 
|  |
 -- 
TIME
        );
    }

    public function testDisplaySeven(): void
    {
        $this->assertEquals(
            Clock::display('7'),
            <<<TIME
 -- 
   |
    
   |
    
TIME
        );
    }

    public function testDisplayEight(): void
    {
        $this->assertEquals(
            Clock::display('8'),
            <<<TIME
 -- 
|  |
 -- 
|  |
 -- 
TIME
        );
    }

    public function testDisplayNine(): void
    {
        $this->assertEquals(
            Clock::display('9'),
            <<<TIME
 -- 
|  |
 -- 
   |
 -- 
TIME
        );
    }

    public function testDisplayDoubleDigit(): void
    {
        $this->assertEquals(
            Clock::display('88'),
            <<<TIME
 --   -- 
|  | |  |
 --   -- 
|  | |  |
 --   -- 
TIME
        );
    }

    public function testDisplaySeparator(): void
    {
        $this->assertEquals(
            Clock::display('8:8'),
            <<<TIME
 --     -- 
|  | o |  |
 --     -- 
|  | o |  |
 --     -- 
TIME
        );
    }
}
