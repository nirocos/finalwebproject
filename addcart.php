<?php 
			
			if(isset($_POST['addcart'])){
				list($product_Price,$product_name,$product_Id) = explode("-", $_POST['selectProduct'],3);
				$username = $_POST['username'];
				$amout = $_POST['amout'];
				$total = $product_Price * $amout;
				$query = "INSERT INTO addcart(productName,productPrice,amout,username,totalprice) VALUES('$product_name','$product_Price','$amout','$username','$total')";
				$result = $connection->query($query);
				
			}
			
 ?>

