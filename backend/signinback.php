<?php
require_once('../connection.php');

session_start();
if (isset($_POST['submit'])){
          
			$mail = $_POST['mail'];
			$password=$_POST['password'];
			
			$_SESSION["status"] = false;
			
			$select_user = "select *from user where email = '$mail'";
			
			
			$run_qry = mysqli_query($conn,$select_user);
			if(mysqli_num_rows($run_qry)>0){
				
				while($row = mysqli_fetch_assoc($run_qry)){
					
					if(password_verify($password,$row['password'])){
						 
						 $_SESSION["name"] = $row['name'];
						 $_SESSION["status"] = true;
						 
						 echo "<script>alert('Logging Successful..'); window.location.href='../dashboard.php';</script>";
					}
					else{
                        
						echo "<script>alert('invalid Login Details'); window.location.href='../sign-in.php';</script>";
					}
				}
			}else{
                
				echo "<script>alert('invalid Login Details'); window.location.href='../sign-in.php';</script>";
			}
  
}
?>