<?php 
session_start();
	include 'config.php';
	include'checklogin.php';
	include 'showProduct.php';
	include 'showPic.php';
	
	include 'addcart.php';
	include 'forgetpasswordC.php';
	include 'deletecart.php';
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
					
					 <select id="products" class="col-md-10 col-md-offset-1 h3" name="selectProduct" onchange="showProduct(this.value)"> 
					<?php

						if ($result->num_rows > 0) {	
							while($row = $result -> fetch_assoc()){
					?>
						<option value="<?php echo $row['productPrice']."-".$row['productName']."-".$row['productID']."-".$row['productPic'].""?>"><?php echo $row['productName'] ?></option>

						<?php }} ?>
						
					</select> 
				</div>
				</div>
				<div class="col-md-10 margintop5p ">
				<label for="quantity"class=" col-md-4 margintop5 nomarginbottom">QUANTITY</label>
				<input type="number" name="amout" id="" min="1" class="text-center col-md-7" value="1">
				</div>
				<?php 
					$query = "SELECT * FROM product ORDER BY productID DESC";
					$result = $connection->query($query);  
					$row = $result -> fetch_assoc();
				?>
				<div class="clearfix"></div>
				<div  class="margintop5p">
				
					<h4 class="col-md-8"><div id="txtHint" >Cost : <?php echo number_format($row["productPrice"]) ?> bath</div></h4>
					
					<?php if(isset($_SESSION['username'])&&$_SESSION['status']=="user"): ?>
					<input type="hidden" name="username" value="<?php echo $_SESSION['username']; ?>">
				
					<input type="submit" name="addcart" value="Add to cart" class="col-md-4 btn buttonsubmit btn-dark">
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
					if(isset($_SESSION['username'])){
					$username = $_SESSION['username'];
					$query = "SELECT * FROM addcart WHERE username = '$username' ORDER BY orderID DESC";
					$result = $connection->query($query);

					if ($result->num_rows > 0) {	
						while($row = $result -> fetch_assoc()){
					?>
				<tr class="cart">
					<td><div class="text-center"><?php echo $row["productName"]; ?></div></td>
					<td><div class="text-center"><?php echo $row["amout"]; ?></div></td>
					<td><div class="text-center"><?php echo number_format($row["totalprice"]); ?></div></td>
					<td><div class="text-center"><a href="index.php?deleteproduct=<?php echo $row["orderID"]; ?>">DELETE</a></div></td>
				</tr>

			<?php }}} ?>
			</table>
			<?php 
					if(isset($_SESSION['username'])){
					$username = $_SESSION['username'];
					$query = "SELECT SUM(totalprice) AS TotalPrice FROM addcart WHERE username = '$username'";
					$result = $connection->query($query);
					if ($result->num_rows > 0) {
					$row = $result -> fetch_assoc();
 ?>			
				<div class="col-md-7 col-md-offset-5 margintop10 marginbottom10 h4">Total Price : <?php echo number_format($row["TotalPrice"]);?> Bath</div>
				<?php }} ?>
				<div class="clearfix"></div>
			<?php 
				if(isset($_SESSION['username'])&&isset($_SESSION['status'])){
					if($_SESSION['status']=="user"){
						$_SESSION['username'] = $username;
				$query = "SELECT * FROM userdetails WHERE user = '$username'";
				$result = $connection->query($query);

					if ($result->num_rows > 0) {
					$row = $result -> fetch_assoc();
				}}}
			 ?>
				<form action="index.php" method="post" class="margintop5p marginbottom5p">
					<div class="form-group margintop10 ">	
						<input type="radio" name="address" value="<?php $row['address']; ?>" class="col-md-2">ORIGINAL ADDRESS<br>
					</div>
					<div class="clearfix"></div>
					<div class="form-group margintop10">
						<input class="col-md-2" type="radio" name="address" value="newaddress"> <input type="text" style="height: 50px;" name="textnewaddress" placeholder="New Address" class="col-md-10" />
					</div>
					<div class="clearfix"></div>
					<div class="form-group margintop5p">
						<input type="submit" name="checkout" value="Checkout" class="col-md-4 btn buttonsubmit btn-dark col-md-offset-4">
					</div>
					<div class="clearfix"></div>
			</form>
			
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
    			<a onclick="swap(this,\''.$row['productPrice']."-".$row['productName']."-".$row['productID']."-".$row['productPic'].'\'); return false;" href="photos/'.$row["productPic"].'" class="thumbnail picA" >
     			 <img src="photos/'.$row["productPic"].'"/>
    			</a>
  			</div> 
					 ';
  			
	}} ?>
		</div>
	</div>


	<?php include 'script.php';  ?>
	
 	<?php 
 			if ($checkuser==1||$blank==1) {
 				echo "<script type=\"text/javascript\">
					$('#SignIn').modal('show');
				</script>"; 
			}

	?>
 		
 	
		

 </body>
 </html>