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
	<table>
		<tr>
			<td>В час:</td>
			<td> 0 </td>
		</tr>
		<tr>
			<td>В день:</td>
			<td> 0 </td>
		</tr>
		<tr>
			<td>В месяц:</td>
			<td> 0 </td>
		</tr>
		<tr>
			<td>В год:</td>
			<td> 0 </td>
		</tr>
	</table>
</div>

</body>
</html>