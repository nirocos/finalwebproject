<?php 
		if(isset($_GET['deleteproductID']))
		{
			$deleteproductID = $_GET['deleteproductID'];
			$query = "DELETE FROM product WHERE productID = '$deleteproductID'";
			$result = $connection->query($query);
		}
?>
