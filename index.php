<?php 
	include 'config.php';
	include'checklogin.php';
	include 'showProduct.php';
	include 'showPic.php';
	include 'script.php'; 
	include 'addcart.php';
	include 'forgetpasswordC.php';
 ?>
 <!DOCTYPE html>
 <html lang="en">
 <?php include 'head.php' ?>
 <body>
	<?php include 'navbar.php' ?>
	<aside class="col-md-3 h100p">
		<div class="container-fluid noPadding">
			<div class="row">
			 <?php 
			$query = "SELECT * FROM product ORDER BY productID DESC ";
			$result = $connection->query($query);

	 ?>
			<form action="index.php" method="POST">
				<div class="form-group">
					
					 <select id="products" class="col-md-10 col-md-offset-1 h3" name="selectProduct" onchange="showUser(this.value)"> 
					<?php

						if ($result->num_rows > 0) {	
							while($row = $result -> fetch_assoc()){
					?>
						<option value="<?php echo $row['productID']."-".$row['productPrice']?>" ><?php echo $row['productName'] ?></option>
						<?php }} ?>
						
					</select> 
				</div>
				</div>
				<div class="row margintop5p col-md-10 col-md-offset-1">
				<label for="quantity"class=" pull-left margintop5 nomarginbottom marginright">QUANTITY</label>
				<input type="number" name="amout" id="" min="1" class="text-center col-md-5" value="1">
				
				</div>
				<?php 
					$query = "SELECT * FROM product ORDER BY productID DESC";
					$result = $connection->query($query);  
					$row = $result -> fetch_assoc();
				?>
				<div class="clearfix"></div>
				<div  class="margintop5p">
				
					<h4 class="col-md-8"><div id="txtHint" >Cost : <?php echo $row["productPrice"] ?> bath</div></h4>
					
					<?php if(isset($_SESSION['username'])&&$_SESSION['status']=="user"): ?>
					<input type="hidden" name="username" value="<?php echo $_SESSION['username']; ?>">
				
					<input type="submit" name="addcart" value="Add to cart" class="col-md-4 btn btn-warning ">
					<?php endif; ?>
    				
				</div>
				
			</form>
		</div>
		<div class="clearfix"></div>
		<div class="container-fluid noPadding">

			<div class="titleCart text-center h3 noMarginbottom">MY SHOPPING CART</div>
			<table class="table table-striped h5 noMargin ">
				<tr>
					<th>Product Name</th>
					<th>QUANTITY</th>
					<th>ITEM PRICE</th>
				</tr>
				<?php
					$query = "SELECT *FROM product ORDER BY productID ASC";
					$result = $connection->query($query);

					if ($result->num_rows > 0) {	
						while($row = $result -> fetch_assoc()){
					?>
				<tr class="cart">
					<td></td>
					<td></td>
					<td></td>
				</tr>
			</table>
				<div class="form-group margintop10">	
				<input type="radio" name="address" value="oldaddress" class="col-md-2">ORIGINAL ADDRESS<br>

					<div class="form-group margintop10">
					<input class="col-md-2" type="radio" name="address" value="newaddress"> <input type="text" style="height: 50px;" name="textnewaddress" placeholder="New Address" class="col-md-10" />
				</div>
			</div>
		</div>
	</aside>
	
	<div class="container col-md-9">
		<?php 	$query = "SELECT * FROM product ORDER BY productID DESC LIMIT 1";
	$result = $connection->query($query);
	$row = $result -> fetch_assoc();
	 ?>
		<div class="row">
		<div class="col-xs-6 col-md-12">
		<div class="thumbnail col-md-10 col-md-offset-1">
     		<img id="imgshowproduct" src="photos/<?php echo $row['productPic']; ?>" alt="..." class="col-md-6 col-md-offset-3">
     	</div>
  		</div>
		<div class="clearfix"></div>
		<?php

		$query = "SELECT * FROM product ORDER BY productID DESC";
			$result = $connection->query($query); 
		if ($result->num_rows > 0) {	
			while($row = $result -> fetch_assoc()){
					echo '
					<div class="col-xs-6 col-md-3">
    			<a  href="index.php?selectPic='.$row["productID"].'" class="thumbnail">
     			 <img src="photos/'.$row["productPic"].'"/>
    			</a>
  			</div> 
					 ';
  			
	}} ?>
		</div>
	</div>






	
 	<?php 
 			if ($checkuser==1||$blank==1) {
 				echo "<script type=\"text/javascript\">
					$('#SignIn').modal('show');
				</script>"; 
			}

	?>
 		
 	
		

 </body>
 </html>