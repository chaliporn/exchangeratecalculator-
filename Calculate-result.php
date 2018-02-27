<?php
	// 1.ต้องรับค่าที่แล้วมา
	// 2.ส่งค่ามาเป็น Post

	$thb = $_POST['thb'];
	$type = $_POST['type']; // set atb name type

	echo "ค่าที่กรอกคือ".$thb;
	echo "<br>";
	echo "สกุลเงินที่ใช้คำนวณ".$type;
	echo "<br>";

	if ($type=="usd") {
		$result = $thb/31.2273;

	}elseif ($type=="jyp") {
		$result = $thb/28.9814;
	
	}elseif ($type=="krw") {
		$result = $thb/0.0293;
	
	}elseif ($type=="gbp") {
		$result = $thb/43.3292;
	
	}elseif ($type=="eur") {
		$result = $thb/38.2737;
	}

	echo "Result=".$result;

	// แบบที่2

	if ($type=="usd") {
		$rate=31.2273;

	}elseif ($type=="jyp") {
		$rate=28.9814;
	
	}elseif ($type=="krw") {
		$rate=0.0293;
	
	}elseif ($type=="gbp") {
		$rate=43.3292;
	
	}elseif ($type=="eur") {
		$rate=38.2737;
	}

	echo "Result=".$thb*$rate;

	// แบบที่2
	switch ($type) {
		case 'usd':
			$rate=31.2273;
			break;
		case 'jyp':
			$rate=28.9814;
			break;
		case 'krw':
			$rate=0.0293;
			break;
		case 'gbp':
			$rate=43.3292;
			break;
		case 'eur':
			$rate=38.2737;
			break;
		
		default:
			$rate=0;
			break;
	}

	echo "Result=".$thb*$rate;

	require 'connect.php';
	$sql ="INSERT INTO exchange_191_history(thb, calculated, currency) VALUES($thb, $result, '$type')";

	$sql_exe=$conn -> query($sql);

	print($sql_exe);

?>

<!DOCTYPE html>
<html>
<head>
	<title>Result</title>
	<meta charset="utf-8">

	<meta name="viewport" content="width=device-width, initial-scale=1">
  	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</head>
<body>

<div class="container">
  <h2>exchange history</h2>
  <!-- <p>The .table-bordered class adds borders to a table:</p> -->

</head>
<body>

	<table class="table table-striped">
		<thead>
			<tr>
				<th>thb</th>
				<th>exchage</th>
				<th>calculated</th>
				<th>date</th>
				<th>delete</th>
			</tr>
		</thead>

 <?php

 $sql = "SELECT * FROM exchange_191_history ORDER BY dateRecord DESC";

 $sql_exe = $conn->query($sql);

 while ($row = mysqli_fetch_assoc($sql_exe)) {

 	echo"<tr>

 	<td>".$row['thb']."</td>
 	<td>"."exchage to".$row['currency']."</td>
 	<td>".$row['calculated']."</td>
 	<td>".$row['dateRecord'];"</td>";
 	
 	//$array['key/field name']

 ?>
 <td>

 	<br>
 	<a href="delete.php?id=<?php echo $row['recordID'];?>&thb=<?php echo $row['thb'];?>">Delete</a>
 <?php
 	echo "<br>";
 	}
 	$conn->close();
 ?>

 </table>

</body>
</html>