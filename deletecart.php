<?php 
	if(isset($_GET['deleteproduct']))
		{
			$deleteproductID = $_GET['deleteproduct'];
			$query = "DELETE FROM addcart WHERE orderID = '$deleteproductID'";
			$result = $connection->query($query);
		}
 ?>