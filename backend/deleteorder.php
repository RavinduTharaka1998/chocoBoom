<?php
    require_once('../connection.php');
	
    $id = $_GET['id'];
	
			
            $sql2 = "DELETE FROM choco_order WHERE order_id = '$id'";
			
			//after deleting image you can delete the record
			if(mysqli_query($conn,$sql2))
			{
				echo "<script> alert('Record Deleted successfully');</script>";
				header("Location:../myorder.php");
			}
			else
			{
				echo "<script> alert('Error : Could not delete the data');</script>";
				header("Location:../myorder.php");
			}
    

?>