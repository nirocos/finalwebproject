<?php 
// include 'config.php';
	// if(isset($_GET['a'])){

	// 	$a = $_GET['a'];

	// $query = "SELECT * FROM product WHERE productID = '".$a."'";
	// $result = $connection->query($query);
	
 // 		if ($result->num_rows > 0) {	
	// 		while($row = $result -> fetch_assoc()){
 // 		echo '
	// 		"photos/'.$row["productPic"].'"
			
	// 	';
	// }
// }
// }	
		if(isset($_GET['selectPic'])){
			$picID = $_GET['selectPic'];
			$query = "SELECT * FROM product WHERE productID = $picID";
					$result = $connection->query($query);  
					$row = $result -> fetch_assoc();
			echo '<script>
				document.getElementById("imgshowproduct").src = "./photos/a3.png";
			</script>';
		
		}
 ?>

<!--  '.$row["productPic"].' -->