<?php 
		if(isset($_POST['username'])){
			$username = $_POST['username'];
		}
		if(isset($_POST['password'])){
			$password = $_POST['password'];
		}


 ?>
 <!DOCTYPE html>
 <html lang="en">
 <?php include 'head.php' ?>
 <body>

 	<nav class="navbar navbar-light bg-faded navbar-inverse navbar-fixed-top">\
 		<div class="container-fluid ">
 			<div class="navbar-header">
 				<a class="navbar-brand pull-left" href="#">LOGO</a>
 				<!-- Single button -->
				<div class="btn-group">
				  <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
				    <i class="fa fa-user" aria-hidden="true"></i> <span class="caret"></span>
				  </button>
				  <ul class="dropdown-menu">
				    <li><a  class="clearnone pull-left child-dropdown" href="#">SignIn</a> 
				    				/
				    	<a class="clearnone pull-left child-dropdown" href="#">SignUp</a>
				    </li>
				    <li><a href="#">Order Status</a></li>
				  </ul>
				</div>
 				
 			</div>
 		</div>
 	</nav>
 	<?php include 'script.php' ?>
 </body>
 </html>