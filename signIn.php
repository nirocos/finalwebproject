<div class="modal fade" id="SignIn">
 				 <form action="index.php" role="form" id="login" method="post">
				    <div class="modal-dialog">
				      <!-- Modal content-->
				      <div class="modal-content">
				        <div class="modal-header">
				          <button type="button" class="close" data-dismiss="modal">&times;</button>
				          <h4 class="modal-title text-center">USER ACCOUNT</h4>
				        </div>
				        <div class="modal-body">
				        
				         	<div class="form-group">

				         		<input type="text" name="username" class="form-control" placeholder="Your Username">
				         	</div>
				         	<div class="form-group">
				         		<input type="password" name="password" id="" class="form-control" placeholder="Your Password">
				         	</div>
							
				         	<div class="container-fluid" id="error"><?php if ($checkuser==1|| $blank==1){echo $error;} {
				         		# code...
				         	} ?></div>
				         
				         
				        </div>
				        <div class="modal-footer">
				        <li><a data-toggle="modal" data-target="#forgetpassword" data-dismiss="modal" class="clearnone pull-left child-dropdown" href="#">Forget Password</a></li> 
				          <button type="submit" name="submit" class=" btn btn-dark col-md-2 col-md-offset-3">Sign In</button>
				          
				        </div>
				      </div>
				      
				    </div>
				    </form>
				 </div>
				 <?php include 'forgetpassword.php'; ?>