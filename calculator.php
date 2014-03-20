<?php

$value = $_GET['value'];
$per = $_GET['period'];

$periods = array(
	"hour" => "час",
	"day" => "день",
	"month" => "месяц",
	"year" => "год"
	);

class Printi{
	function hourlySalary($hourlySalary){
		echo "<td class=\"period\">В час:</td><td>" . round($hourlySalary) . "</td></tr>";
	}
	function daylySalary($daylySalary){
		echo "<td class=\"period\">В день:</td><td>" . round($daylySalary) . "</td></tr>";
	}
	function monthlySalary($monthlySalary){
		echo "<td class=\"period\">В месяц:</td><td>" . round($monthlySalary) . "</td></tr>";
	}
	function yearlySalary($yearlySalary){
		echo "<td class=\"period\">В год:</td><td>" . round($yearlySalary) . "</td></tr>";
	}
}

class Calculator{
	
	function getHourlySalary($monthlySalary, $per){
		if ($per == "day") return $monthlySalary / 8;
		if ($per == "year") return $monthlySalary / 12 / 24 / 8;
		return ($monthlySalary / 24) / 8;
	}
	function getDaylySalary($hourlySalary, $per){
		if ($per == "month") return $hourlySalary / 24;
		if ($per == "year") return $hourlySalary / 12 / 24;
		return $hourlySalary * 8;
	}
	function getMonthlySalary($hourlySalary, $per){
		if ($per == "day") return $hourlySalary * 24;
		if ($per == "year") return $hourlySalary / 12;
		return ($hourlySalary * 8) * 24;
	}
	function getYearlySalary($monthlySalary, $per){

		return $monthlySalary * 12;
	}
}


?>

