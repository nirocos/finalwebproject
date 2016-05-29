<?php 
	session_start();
	include 'config.php';
	if (isset($_POST['checkout'])) {

			$selectaddress  = $_POST['address'];
			$username = $_POST['username'];
			if($selectaddress == 'newaddress'){	
				$address = $_POST['textnewaddress'];
			} else{
				$address =  $_POST['address'];
			}
			$query = "INSERT INTO sent(username,adressSend,totalPrice) VALUES('$username','$address',(SELECT SUM(totalPrice) FROM addCart WHERE username = '$username'))";
			$result = $connection -> query($query);
			

		}

 ?>