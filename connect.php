<?php
	if (@_SERVER)['HTTP_HOST']=='localhost' {
		$DB_SERVER = 'localhost';
		$DB_USER_READER = 'root';
		$DB_PASS_READER = 'Silpakorn60';
		$DB_NAME = 'db_191_exchange';
		echo "localhost";
	}else{
		//บน server imsu.co
		$DB_SERVER = 'localhost';
		$DB_USER_READER = 'u13580191';
		$DB_PASS_READER = 'rL0@"=+Ry{';
		$DB_NAME = 'db13580191';
	}
	//คำสั่งที่ใช้ต่อฐานข้อมูล
	$conn =new mysqli($DB_SERVER,$DB_USER_READER,$DB_PASS_READER,$DB_NAME);

	//ตรวจสอบว่าต่อสำเร็จหรือไม่
	if ($conn -> connect_error) {
		die("connrction failed".$conn -> connect_error);

	}

	mysqli_set_charset($conn, "utf8");

?>