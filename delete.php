<?php
	$id = $_REQUEST['id'];
	$thb = $_REQUEST['thb'];

	$sql = "DELETE FROM exchange_191_history WHERE recordID =$id";

	// echo $sql;
	require('connect.php');

	$sql_exe = $conn -> query($sql);
	if($sql_exe) { 
		echo "Delete complete";
		echo "<br>";
		echo "Delete ID".$id;
		echo "<br>";
		echo "THB=".$thb;
	    header("location:index.php", true, 200);
	}else {
		echo "Delete failed";
	}

?>
<!DOCTYPE html>
 <html>
 <head>
 	<meta charset="utf-8">
 	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
 	<title>Delete</title>
 </head>
 <body>
 	<?php  
		if ($sql_exe) {     	?>

			<h2 class='text-success'>Delete Complete! <small>Delete ID : <?php echo $id ?> THB = <?php echo $thb ?></small></h2>

			<a href="index.php" class="btn btn-primary">Back</a>
			
	<?php }else{?>

			<h1 class="text-danger">Delete Failed!</h1>

	<?php }					?>

 </body>
 </html>