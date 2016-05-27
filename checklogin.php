<?php 
	
		$error = $username = $password = "";
		$blank = 0;
		$checkuser = 0;
		if (mysqli_connect_errno()) {
  			exit('Connect failed: '. mysqli_connect_error());

		}
		if(isset($_POST['username'])){
			$username = mysqli_real_escape_string($connection,$_POST['username']);

		}
		if(isset($_POST['password'])){
			$password = mysqli_real_escape_string($connection,$_POST['password']);
		}
			
		if(isset($username)&&isset($password)&&isset($_POST['submit'])){
			$query = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";
			$result = $connection -> query($query);
			if ($username == "" || $password == ""){
				$blank =1;
        		$error = "กรุณาอย่าเว้นช่องว่างค่ะ";
			}
			else{
			if($result->num_rows == 0){
				$checkuser = 1;
				$error = "<span class='error'>username หรือ password ผิดค่ะ กรุณากรอกใหม่</span><br><br>";
                 
              
              }else{
              	$checkuser = 0;
              	$row = $result -> fetch_assoc();
				$_SESSION['username'] = $row['username'];
				$_SESSION['userID'] = $row['userID'];
				$_SESSION['status'] = $row['status'];

              }
				
			}
			}
			
		
?>