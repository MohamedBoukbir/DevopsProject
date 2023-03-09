<?php 
// use app\Calculator;
require_once('vendor/autoload.php');
require_once('./app/Calculator.php');
use app\Calculator;

class CalculatorTest extends PHPUnit\Framework\TestCase {
    public function testAdd() {
      $calculator = new Calculator();
      $result = $calculator->add(2, 2);
      $this->assertEquals(4, $result);
                    }
  
    public function testSubtract() {
      $calculator = new Calculator();
      $result = $calculator->subtract(4, 2);
      $this->assertEquals(2, $result);
    }

    public function testMultiply() {
      $calculator = new Calculator();
      $result = $calculator->multiply(4, 2);
      $this->assertEquals(8, $result);
    }

    public function testDivide() {
      $calculator = new Calculator();
      $result = $calculator->divide(10, 5);
      $this->assertEquals(2, $result);
    }
   

}

?>