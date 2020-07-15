<?php

use PHPUnit\Framework\TestCase;

class ClockTest extends TestCase
{
    public function testDisplayZero(): void
    {
        $this->markTestIncomplete();
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
        $this->markTestIncomplete();
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
        $this->markTestIncomplete();
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
        $this->markTestIncomplete();
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
        $this->markTestIncomplete();
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
        $this->markTestIncomplete();
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
        $this->markTestIncomplete();
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
        $this->markTestIncomplete();
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

    public function testDisplaySeparator(): void
    {
        $this->markTestIncomplete();
        $this->assertEquals(
            Clock::display(':'),
            <<<TIME
   
 . 
   
 . 
   
TIME
        );
    }

    public function testDisplayDoubleDigit(): void
    {
        $this->markTestIncomplete();
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

    public function testScaleZero(): void
    {
        $this->markTestIncomplete();
        $this->assertEquals(
            Clock::display('0', 2),
            <<<TIME
 ---- 
|    |
|    |
      
|    |
|    |
 ---- 
TIME
        );
    }

    public function testScaleTwo(): void
    {
        $this->markTestIncomplete();
        $this->assertEquals(
            Clock::display('2', 2),
            <<<TIME
 ---- 
     |
     |
 ---- 
|     
|     
 ---- 
TIME
        );
    }

    public function testScaleFive(): void
    {
        $this->markTestIncomplete();
        $this->assertEquals(
            Clock::display('5', 2),
            <<<TIME
 ---- 
|     
|     
 ---- 
     |
     |
 ---- 
TIME
        );
    }

    public function testScaleEight(): void
    {
        $this->markTestIncomplete();
        $this->assertEquals(
            Clock::display('8', 2),
            <<<TIME
 ---- 
|    |
|    |
 ---- 
|    |
|    |
 ---- 
TIME
        );
    }

    public function testScaleSeparator(): void
    {
        $this->markTestIncomplete();
        $this->assertEquals(
            Clock::display(':', 2),
            <<<TIME
     
  .  
  .  
     
  .  
  .  
     
TIME
        );
    }
}
