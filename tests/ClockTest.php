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

    public function testDisplayOneSecond(): void
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
        $this->markTestIncomplete();

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
        $this->markTestIncomplete();

        $this->assertEquals(
            Clock::display('5'),
            <<<TIME
 __ 
|   
 -- 
   |
 __ 
TIME
        );
    }

    public function testDisplaySix(): void
    {
        $this->markTestIncomplete();

        $this->assertEquals(
            Clock::display('6'),
            <<<TIME
 __ 
|   
 -- 
|  |
 __ 
TIME
        );
    }

    public function testDisplaySeven(): void
    {
        $this->markTestIncomplete();

        $this->assertEquals(
            Clock::display('7'),
            <<<TIME
 __ 
   |
    
   |
    
TIME
        );
    }

    public function testDisplayEight(): void
    {
        $this->markTestIncomplete();

        $this->assertEquals(
            Clock::display('8'),
            <<<TIME
 __ 
|  |
 -- 
|  |
 -- 
TIME
        );
    }

    public function testDisplayNine(): void
    {
        $this->markTestIncomplete();

        $this->assertEquals(
            Clock::display('9'),
            <<<TIME
 __ 
|  |
 -- 
   |
    
TIME
        );
    }
}
