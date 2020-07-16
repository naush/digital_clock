<?php

use PHPUnit\Framework\TestCase;

class ClockTest extends TestCase
{
    public function testDisplayZero(): void
    {
        $this->markTestSkipped();
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
        $this->markTestSkipped();
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
        $this->markTestSkipped();
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
        $this->markTestSkipped();
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
        $this->markTestSkipped();
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
        $this->markTestSkipped();
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
        $this->markTestSkipped();
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
        $this->markTestSkipped();
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
        $this->markTestSkipped();
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
        $this->markTestSkipped();
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
        $this->markTestSkipped();
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
        $this->markTestSkipped();
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
        $this->markTestSkipped();
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
        $this->markTestSkipped();
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
        $this->markTestSkipped();
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
        $this->markTestSkipped();
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
        $this->markTestSkipped();
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
