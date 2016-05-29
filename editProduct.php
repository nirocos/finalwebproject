<?php 
session_start();
		include 'config.php';
		if(isset($_GET['editproductID']))
		{
			$editproductID = $_GET['editproductID'];
			$query = "SELECT * FROM product WHERE productID = '$editproductID'";
			$result = $connection->query($query);

			if ($result->num_rows > 0) {	
				$row = $result -> fetch_assoc();
			}
		}

 ?>
 <!DOCTYPE html>
 <html lang="en">
 <head>
 <title>Admin Controller</title>
 <?php include 'head.php' ?>
 <body>
 	<?php include 'navbar.php' ?>
 	

		<div class="container"  id="form_new	Product">
				<form action="adminController.php" method="post" enctype="multipart/form-data">
						<div class="col-md-6 text-newproduct">
						<input type="hidden" name="productID" value="<?php echo $row["productID"] ?>">
						<div class="form-group">
						<label for="productname" class="col-md-3 h4">Name : </label>
							<input type="text" name="editproductname" class="col-md-8 name-product" value="<?php echo $row["productName"];  ?>" required>
						</div>
						<div class="clearfix"></div>
						<div class="form-group  margintop30">
						
						<label for="productname" class="col-md-3 h4">Prices : </label>
							<input id="num" type="text" name="editproductprice" class="col-md-8  name-product" value="<?php echo $row['productPrice']; ?>" required>
						</div>
						</div>
						<div class="col-md-6">
						
						<div class="form-group img-controller">
										<img src="./photos/<?php echo $row['productPic']; ?>" alt="" id="output">
										<input type="hidden" name="hdnOldFile" value="<?php echo $row["productPic"];?>">
										<div class="clearfix"></div>
										<label class="">Upload Picture Product</label>
										<input type="file" class="" id="files" name="editimage">
					
						 <button type="submit" name="editsubmit" class="btn btn-dark margintop5p buttonsubmit">SUBMIT</button>
						</div>
						</div>
				</form>

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

    // read the image file as a data URL.
    reader.readAsDataURL(this.files[0]);
 	</script>
 	
 </body>
 </html>