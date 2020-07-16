<?php

use PHPUnit\Framework\TestCase;

class ClockTest extends TestCase
{
    public function testDisplayZero(): void
    {
        $this->assertEquals(
            <<<TIME
 -- 
|  |
    
|  |
 -- 
TIME,
            Clock::display('0'),
        );
    }

    public function testDisplayOne(): void
    {
        $this->assertEquals(
            <<<TIME
    
   |
    
   |
    
TIME,
            Clock::display('1'),
        );
    }

    public function testDisplayTwo(): void
    {
        $this->assertEquals(
            <<<TIME
 -- 
   |
 -- 
|   
 -- 
TIME,
            Clock::display('2'),
        );
    }

    public function testDisplayThree(): void
    {
        $this->assertEquals(
            <<<TIME
 -- 
   |
 -- 
   |
 -- 
TIME,
            Clock::display('3'),
        );
    }

    public function testDisplayFour(): void
    {
        $this->assertEquals(
            <<<TIME
    
|  |
 -- 
   |
    
TIME,
            Clock::display('4'),
        );
    }

    public function testDisplayFive(): void
    {
        $this->assertEquals(
            <<<TIME
 -- 
|   
 -- 
   |
 -- 
TIME,
            Clock::display('5'),
        );
    }

    public function testDisplaySix(): void
    {
        $this->assertEquals(
            <<<TIME
 -- 
|   
 -- 
|  |
 -- 
TIME,
            Clock::display('6'),
        );
    }

    public function testDisplaySeven(): void
    {
        $this->assertEquals(
            <<<TIME
 -- 
   |
    
   |
    
TIME,
            Clock::display('7'),
        );
    }

    public function testDisplayEight(): void
    {
        $this->assertEquals(
            <<<TIME
 -- 
|  |
 -- 
|  |
 -- 
TIME,
            Clock::display('8'),
        );
    }

    public function testDisplayNine(): void
    {
        $this->assertEquals(
            <<<TIME
 -- 
|  |
 -- 
   |
 -- 
TIME,
            Clock::display('9'),
        );
    }

    public function testDisplaySeparator(): void
    {
        $this->assertEquals(
            <<<TIME
    
 .. 
    
 .. 
    
TIME,
            Clock::display(':'),
        );
    }

    public function testDisplayDoubleDigit(): void
    {
        $this->assertEquals(
            <<<TIME
 --   -- 
|  | |  |
 --   -- 
|  | |  |
 --   -- 
TIME,
            Clock::display('88'),
        );
    }

    public function testScaleZero(): void
    {
        $this->assertEquals(
            <<<TIME
 ---- 
|    |
|    |
      
|    |
|    |
 ---- 
TIME,
            Clock::display('0', 2),
        );
    }

    public function testScaleTwo(): void
    {
        $this->assertEquals(
            <<<TIME
 ---- 
     |
     |
 ---- 
|     
|     
 ---- 
TIME,
            Clock::display('2', 2),
        );
    }

    public function testScaleFive(): void
    {
        $this->assertEquals(
            <<<TIME
 ---- 
|     
|     
 ---- 
     |
     |
 ---- 
TIME,
            Clock::display('5', 2),
        );
    }

    public function testScaleEight(): void
    {
        $this->assertEquals(
            <<<TIME
 ---- 
|    |
|    |
 ---- 
|    |
|    |
 ---- 
TIME,
            Clock::display('8', 2),
        );
    }

    public function testScaleSeparator(): void
    {
        $this->assertEquals(
            <<<TIME
      
 .... 
 .... 
      
 .... 
 .... 
      
TIME,
            Clock::display(':', 2),
        );
    }
}
