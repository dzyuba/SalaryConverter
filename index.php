<?php require "calculator.php" ?>

<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Salary converter</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>
	
<h1>Конвертер зарплаты</h1>
<p class="description">Легко рассчитайте размер зарплаты за определенный период времени</p>

<div id="formarea">
	<form action="index.php" method="get">
		<input type="text" name="value" placeholder="25" size="5">
		<select name="period" id="term">
			<option value="hour">В час</option>
			<option value="day">В день</option>
			<option value="month">В месяц</option>
			<option value="year">В год</option>
		</select>
		<input type="submit" value="Рассчитать">
	</form>
</div>

<div id="result">
	<?php 
		$print = new Printi();
		$values = new Calculator();

		if( !empty($value) ){
			echo "<p>" . $value . " гривен в " . $periods[$per] . " примерно составляют:</p>";
	?>

		<table>
	<?php
			if ($per == "hour"){
				 $print->daylySalary($values->getDaylySalary($value, $per));
				 $print->monthlySalary($m = $values->getMonthlySalary($value, $per));
				 $print->yearlySalary($values->getYearlySalary($m, $per));
			}
			elseif ($per == "day"){
				 $print->hourlySalary($values->getHourlySalary($value, $per));
				 $print->monthlySalary($m = $values->getMonthlySalary($value, $per));
				 $print->yearlySalary($values->getYearlySalary($m, $per));
			}
			elseif ($per == "month"){
				 $print->hourlySalary($values->getHourlySalary($value, $per));
				 $print->daylySalary($values->getDaylySalary($value, $per));
				 $print->yearlySalary($values->getYearlySalary($value, $per));
			}
			elseif ($per == "year"){
				 $print->hourlySalary($values->getHourlySalary($value, $per));
				 $print->daylySalary($values->getDaylySalary($value, $per));
				 $print->monthlySalary($values->getMonthlySalary($value, $per));
			}
	?>
		</table>

	<?php 
		}
		else {
			echo "<p>" . "25 гривен в час" . " примерно составляют:</p>";
	?>
		<table>
			<?php $print->daylySalary($values->getDaylySalary(25, $per)); ?>
			<?php $print->monthlySalary($values->getMonthlySalary(25, $per)); ?>
			<?php $print->yearlySalary($values->getYearlySalary(4800, $per)); ?>
		</table>
	<?php } ?>
</div>



</body>
</html>