<?php 
include 'config.php';
	if(isset($_GET['q'])){

		$q = $_GET['q'];

	$query = "SELECT * FROM product WHERE productID = '".$q."'";
	$result = $connection->query($query);
	
 		if ($result->num_rows > 0) {	
			while($row = $result -> fetch_assoc()){
 		echo '
			Cost : ' .$row["productPrice"].' bath
		';
	}
}
}

?>
