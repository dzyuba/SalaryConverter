<?php

require_once('simpletest/autorun.php');
require_once('calculator.php');

class TestCalculator extends UnitTestCase {

	// тестируем рассчеты почасовой зарплаты
	function testGetHourlySalary() {
		$v = new Calculator();
		$per = "day";
		$value = 25;
        $this->assertEqual(round($v->getHourlySalary($value, $per)), 3);
    }

    // тестируем рассчеты подневной зарплаты
    function testGetDaylySalary() {
		$v = new Calculator();
		$per = "hour";
		$value = 25; 
        $this->assertEqual(round($v->getDaylySalary($value, $per)), 200);
    }

    // тестируем рассчеты помесячной зарплаты
    function testGetMonthlySalary() {
		$v = new Calculator();
		$per = "hour";
		$value = 25;
        $this->assertEqual(round($v->getMonthlySalary($value, $per)), 4800);
    }

    // тестируем рассчеты погодовой зарплаты
    function testGetYearlySalary() {
		$v = new Calculator();
		$per = "month";
		$value = 4800;
        $this->assertEqual(round($v->getYearlySalary($value, $per)), 57600);
    }

}

class TestValidator extends UnitTestCase {

	function testValidatePeriod() {
		$v = new Validator();
		$per = "hour";
        $this->assertTrue($v->validatePeriod($per));
    }

    function testValidateValue() {
		$v = new Validator();
		$value = 0; // недопустимое значение
        $this->assertTrue($v->validateValue($value));
    }

}

?>

<p><a href="index.php">&laquo; назад</a></p>
