<?php 
		session_start();
		if(isset($_POST['submit'])){
		
			$productname = $_POST['productname'];
			$productprice = $_POST['productprice'];
			$image_name = $_FILES['image']['name'];
			$image_type = $_FILES['image']['type'];
			$image_size = $_FILES['image']['size'];
			$image_tmp_name = $_FILES['image']['tmp_name'];
		if($image_name ==''){
			echo "<script>alert('Please Select an Image')</script>";
		}		
			else {
				move_uploaded_file($image_tmp_name, "photos/$image_name");
				$query = "INSERT INTO product(productName,productPrice,productPic) VALUES('$productname','$productprice','$image_name')";
				$result =$connection->query($query);
				echo "<script>alert('New Product Complete')</script>";
			}
}
		


 ?>