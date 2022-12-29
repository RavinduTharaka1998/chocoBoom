<?php

   require_once('../connection.php');

   if (isset($_POST['add'])) {

    $name          =  $_POST['name'];
    $qty   =  $_POST['qty'];
    $date       =  $_POST['date'];
	$price       =  $_POST['price'];
	
	if ($name == "Mars") {
		$totprice = $qty*800;
	}
	else if ($name == "Snickers") {
		$totprice = $qty*900;
	}
	else if ($name == "KitKat") {
		$totprice = $qty*1000;
	}
	else if ($name == "Twix") {
		$totprice = $qty*600;
	}
	else if ($name == "Daily Milk") {
		$totprice = $qty*500;
	}
	else if ($name == "Bounty") {
		$totprice = $qty*700;
	}
	
						$sql = "INSERT INTO choco_order(name,qty,date,price,totprice) VALUES(?,?,?,?,?)";
			            
						$stmt = mysqli_stmt_init($conn);
						
						if(!mysqli_stmt_prepare($stmt, $sql))
						{
							echo "<script> alert('System Erorr???? SQL statement faild!');</script>";
						}
						else
						{
							mysqli_stmt_bind_param($stmt, "sssss", $name,$qty,$date, $price,$totprice);
							
							mysqli_stmt_execute($stmt);

						    echo "<script>alert('Your order is Success. Total Amount Rs.$totprice. Thank you!!!'); window.location.href='../myorder.php';</script>";
						}

				
					}				
?>