<?php 

include 'config.php';
	if(isset($_GET['q'])){

	
		$q = $_GET['q'];
	list($product_Price,$product_name,$product_Id,$product_Pic) = explode("-", $q,4);	
	
	$query = "SELECT * FROM product WHERE productID = '".$product_Id."'";
	$result = $connection->query($query);
	
 		if ($result->num_rows > 0) {	
			while($row = $result -> fetch_assoc()){
 		echo 'photos/'.$row["productPic"].'';
	}
}
}asd

 ?>
