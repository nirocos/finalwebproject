<?php  
	include 'config.php';
	$c_username = $_POST['create-user'];
	$c_Email = $_POST['create-email'];
	$c_password = $_POST['create-password'];
	$c_address = $_POST['create-address'];
	$c_tel = $_POST['create-tel'];
	$c_status = "user";

	$query = "INSERT INTO users(username,password,status) VALUES('$c_username','$c_password','$c_status')";
	$query2 = "INSERT INTO userdetails(user,email,address,tel) VALUES ((SELECT username FROM users WHERE status ='user' ORDER BY users.userID DESC LIMIT 1),'$c_Email','$c_address','$c_tel')";
	$result =$connection->query($query);
	$result =$connection->query($query2)
	
	if(!$result){
		$query = "DELETE FROM users WHERE userID = SELECT username FROM users ORDER BY user.userID DESC LIMIT 1";
	}
?>
<meta http-equiv="refresh" content="3; URL=index.php">
333333