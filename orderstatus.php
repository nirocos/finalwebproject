<?php 
	include 'config.php';
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
<?php 
			$query = "SELECT * FROM product sent BY sentID ASC";
			$result = $connection->query($query);

	 ?>
	<div class="container"  id="form_newProduct">
				<table class="table table-striped">
					<tr>
						
						<th><div class="text-center">Product</div></th>
						<th><div class="text-center">Product Price</div></th>
						<th><div class="text-center">Edit Product</div></th>
						<th><div class="text-center">Delete Product</div></th>

					</tr>	
					<?php

						if ($result->num_rows > 0) {	
							while($row = $result -> fetch_assoc()){

						
					?>

					<tr>
					
						<td><div class="text-center"><?php echo $row["productName"] ?></div></td>
						<td><div class="text-center"><?php echo $row["productPrice"] ?></div></td>
						<td><div class="text-center"><a href="editProduct.php?editproductID=<?php echo $row["productID"]; ?>">Edit</a></div></td>
						<td><div class="text-center"><?php echo '<a href="adminController.php?deleteproductID='.$row["productID"].'&deleteImg='.$row["productPic"].'">Delete</a>'; ?></div></td>

					</tr>
					<?php 
						}
						}
					 ?>
				</table>
				
			</div>
</body>
</html>