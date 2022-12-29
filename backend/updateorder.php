<?php
require_once('../connection.php');


if (isset($_POST['update'])){
	
	$id = $_POST['id'];
	$name = $_POST['name'];
	$qty = $_POST['qty'];
	$date = $_POST['date'];
	$price = $_POST['price'];
	
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
		
		$sql = "UPDATE choco_order SET name = '$name',qty = '$qty',date = '$date', price='$price', totprice='$totprice' where order_id = '$id'";
	        
	      
			if(mysqli_query($conn,$sql))
			{
				echo "<script>alert('Record Update successfully'); window.location.href='../myorder.php';</script>";
			}
			else
			{
				echo "<script>alert('Erorr !!! Record Update Unsuccessfully'); window.location.href='../myorder.php';</script>";
			}

}

?>