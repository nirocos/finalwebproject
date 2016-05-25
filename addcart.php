<?php 

			if(isset($_POST['addcart'])){
				list($product_Id, $product_Price) = explode("-", $_POST['selectProduct'],2);
				$username = $_POST['username'];
				$amout = $_POST['amout'];

				$query = "INSERT INTO addcart(productID,productPrice,amout,username) VALUES('$product_Id','$product_Price','$amout','$username')";
				
			}
			
 ?>

