<?php
use PHPUnit\Framework\TestCase;

public class TestCalculatrice extends TestCase {
    public function testAddition(){
        $calc = new MyCalculator(1,1);
        $result = $calc->Addition();
        $expected = 2;
        $this->assertSame($expected,$result);
    }
    public function testSubtraction(){
        $calc = new MyCalculator(4,2);
        $result = $calc->Subtraction();
        $expected = 2;
        $this->assertSame($expected,$result);
    }
    public function testMultiplication(){
        $calc = new MyCalculator(2,2);
        $result = $calc->Multiplication();
        $expected = 4;
        $this->assertSame($expected,$result);
    }
    public function testDivision(){
        $calc = new MyCalculator(2,2);
        $result = $calc->Multiplication();
        $expected = 4;
        $this->assertSame($expected,$result);
    }

}