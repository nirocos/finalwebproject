<?php 
		if(isset($_GET['deleteproductID'])&&isset($_GET['deleteImg']))
		{
			
			$deleteproductID = $_GET['deleteproductID'];
			$deleteImg = $_GET['deleteImg'];
			$query = "DELETE FROM product WHERE productID = '$deleteproductID'";
			unlink("photos/".$deleteImg);
			$result = $connection->query($query);

			echo "<script>alert('Delete Product')</script>";

		}
?>
