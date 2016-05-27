<?php 
		include 'config.php';
		include 'newProduct.php';
		include 'productDelete.php';
		include 'productEdit.php';

 ?>
 <!DOCTYPE html>
 <html lang="en">
 <head>
 <title>Admin Controller</title>
 <?php include 'head.php' ?>
 <body>
 	<?php include 'navbar.php' ?>
 	<div class="container">
		<ul class="nav nav-pills nav-justified" >
  		<li role="presentation" class="active"><a data-toggle="tab" href="#a">New Product</a></li>
  		<li role="presentation"><a data-toggle="tab"  href="#b">Edit Product</a></li>
  		<li role="presentation"><a data-toggle="tab" href="#c">Order</a></li>
  		<li role="presentation"><a data-toggle="tab" href="#d">Contact</a></li>
		</ul>
	</div>	

<div class="tab-content">
<div id="a"class="tab-pane fade in active">
		<div class="container"  id="form_newProduct">
				<form action="adminController.php" method="post" enctype="multipart/form-data" id="addproduct">
						<div class="col-md-6 text-newproduct">
						<div class="form-group">
						<label for="productname" class="col-md-3 h4">Name : </label>
							<input type="text" name="productname" class="col-md-8 name-product" required>
						</div>
						<div class="clearfix"></div>
						<div class="form-group  margintop30">
						
						<label for="productname" class="col-md-3 h4">Prices : </label>
							<input type="text" name="productprice" class="col-md-8  name-product"required>
						</div>
						</div>
						<div class="col-md-6">
						
						<div class="form-group img-controller">
										<img src="" alt="" id="output">
										<div class="clearfix"></div>
										<label class="">Upload Picture Product</label>
										<input type="file" class="" id="files" name="image">
						 <input id="reset" type="button" value="Reset" class="btn btn-primary margintop5p  ">
						 <button type="submit" name="submit" class="btn btn-dark margintop5p buttonsubmit">SUBMIT</button>

						</div>
						</div>
				</form>

			</div>
		</div>

	 <?php 
			$query = "SELECT productID , productName , productPrice FROM product ORDER BY productID ASC";
			$result = $connection->query($query);

	 ?>
	
	
	<div id="b"class="tab-pane fade">
			<div class="container"  id="form_newProduct">
				<table class="table table-striped">
					<tr>
						
						<th><div class="text-center">Product Name</div></th>
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
						<td><div class="text-center"><a href="adminController.php?deleteproductID=<?php echo $row["productID"]; ?>">Delete</a></div></td>
					</tr>
					<?php 
						}
						}
					 ?>
				</table>

			</div>
	</div>
	

	<div id="c"class="tab-pane fade">
	asdasd123
	</div>
	<div id="d"class="tab-pane fade">
	asdasd4444
	</div>
</div>

 	<?php include 'script.php' ?>
 	<script>

 		document.getElementById("files").onchange = function () {
    var input = event.target;

    var reader = new FileReader();
    reader.onload = function(){
      var dataURL = reader.result;
      var output = document.getElementById('output');
      output.src = dataURL;
    };
    reader.readAsDataURL(input.files[0]);
  };

 
   	</script>
 	
 </body>
 </html>  	