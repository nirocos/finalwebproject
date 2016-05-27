<?php 
			
			if(isset($_POST['addcart'])){
				list($product_Price,$product_name,$product_Id) = explode("-", $_POST['selectProduct'],3);
				$username = $_POST['username'];
				$amout = $_POST['amout'];

				$query = "INSERT INTO addcart(productName,productPrice,amout,username) VALUES('$product_name','$product_Price','$amout','$username')";
				$result = $connection->query($query);
				
			}
			
 ?>

