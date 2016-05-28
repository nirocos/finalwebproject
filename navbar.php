<nav class="navbar navbar-default nomarginbottom toolbarColor">
 		<div class="container-fluid ">
 			<div class="navbar-header col-md-2 col-xs-6">
 				
 					<a class="navbar-brand pull-left toolbarText" href="index.php">B A G</a>
 			</div>
 				<!-- user account -->
 			
					<ul class="nav navbar-nav navbar-right col-xs-5 col-md-3">
						 <li class="col-xs-9 col-md-8 noPadding text-right "><a class="toolbarText" href="#contactus">CONTACT US</a></li>
						 
						<?php  if(isset($_SESSION['username'])): ?>
						 <li class="dropdown col-md-4">
          					<a href="#" class="dropdown-toggle toolbarText" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> 
          						<i class="fa fa-user" aria-hidden="true"></i><?php echo " ".$_SESSION['username']; ?> <span class="caret"></span>
          					</a>
							
								<ul class="dropdown-menu">
								    <li class="text-dropdown"><?php echo $_SESSION['username']; ?></li> 
								    <li><a href="#">Order Status</a></li>
							 	<?php if($_SESSION["status"] =="admin"): ?>
								    <li><a href="adminController.php">Admin Controller</a></li>
								<?php endif; ?>
								    <li><a href="signout.php">Sign Out</a></li>
						  		</ul>
						  	<?php else: ?>
						  		<li class="dropdown col-xs-3 col-md-4 noPadding">
          					<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> 
          						<i class="fa fa-user" aria-hidden="true"></i> <span class="caret"></span>
          					</a>
							
						  	<ul class="dropdown-menu">
						    <li><a data-toggle="modal" data-target="#SignIn" class="clearnone pull-left child-dropdown" href="#">SignIn</a></li> 
						    				<div class="clearnone pull-left">/</div>
						    <li>	<a class="clearnone pull-left child-dropdown" data-toggle="modal"  data-target="#SignUp" href="#">SignUp</a></li>
						   
						  </ul>
						 <?php endif; ?>
						</li>
					</ul>	
 			
 				<?php include 'signIn.php' ?>
 				<?php include 'SignUp.php' ?>

 			
 		</div>
 	</nav>