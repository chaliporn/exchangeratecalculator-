<!DOCTYPE html>
<html>
<head>
	<title>Calculator</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
<!-- 	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
  	<link rel="stylesheet" href="dist/css/bootstrap-select.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
  	<script src="dist/js/bootstrap-select.js"></script>
  	<link rel="stylesheet" type="text/css" href="dist/css/dropdown.css">
  	<link rel="stylesheet" type="text/css" href="css/style.css">
  	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css"> -->

</head>
<body>
	<div class="jumbotron text-center">
	<h1 style="font-size:30px;">Exchange</h1>
	<br>
	<form action="Calculate-result.php" method="post">
		<label for="exampleSelect1">จำนวนเงินไทย</label>
		<input type="text" name="thb">
	<br>
		<label>สกุลเงินที่ต้องการคำนวณ</label>
		<select name="type" class="selectpicker" id="exampleSelect1">
			<option value="usd" data-icon="usd">USD</option>
			<option value="jyp" data-icon="jyp">JYP</option>
			<option value="krw" data-icon="krw">KRW</option>
			<option value="gbp" data-icon="gbp">GBP</option>
			<option value="eur" data-icon="eur">EUR</option>

			<!-- <option value="eur" name="type">EUR</option> -->

		</select>
	<br>
		<button type="submit" class="btn btn-primary">Calculator</button>
	</form>
</div>

</body>
</html>

