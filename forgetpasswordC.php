<?php 
		
		if(isset($_POST['resetpass'])){
			$username = $_POST['username'];
		$newpassword = $_POST['newpassword'];
		$confirmpass = $_POST['confirmpassword'];

		if($newpassword != $confirmpass){
			echo "<script>alert('Password no match!!')</script>";
		}else{
			$query = "UPDATE users SET 
				password = '$newpassword' WHERE username = '$username'";
			$result =$connection->query($query);
			echo "<script>alert('Reset Password Complete!!')</script>";
		}
		}
		
 ?>