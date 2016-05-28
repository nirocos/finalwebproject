<?php 

			if( isset($_POST['productID'])){

			$editproductID = $_POST['productID'];
			$productname = $_POST['editproductname'];
			$productprice = $_POST['editproductprice'];
			$image_name = $_FILES['editimage']['name'];
			$image_type = $_FILES['editimage']['type'];
			$image_size = $_FILES['editimage']['size'];
			$image_tmp_name = $_FILES['editimage']['tmp_name'];
			
			$query = "UPDATE product SET 
				productName = '$productname', 
				productPrice = '$productprice' WHERE productID = '$editproductID'";
			$result =$connection->query($query);
			if(isset($image_name))
			 {
				if(move_uploaded_file($image_tmp_name, "photos/$image_name")){
					if(isset($_POST['hdnOldFile'])){
						@unlink("photos/".$_POST["hdnOldFile"]);
					}

					$query = "UPDATE product SET 
					productPic = '$image_name'
					WHERE productID = '$editproductID'";

					$result =$connection->query($query);
					
				}
				
				
			}
			echo "<script>alert('EDIT PRODUCT COMPLETE')</script>";
		}
		
?>
