
<?php include("header.php"); ?>

<!------- about Content------>

	<div class="logPAge">
		 <div class="logPa">
		 	<div class="row">
		 		<div class="col-md-6">
		 			<div class="logImg">
		 				<img src="images/log.webp">
		 			</div>
		 		</div>
		 		<div class="col-md-6">
		 			<div class="logForm">
		 				<h2>Login</h2>
						  <form action="#">
						    <div class="mb-3 mt-3">
						      <label for="name">User Name</label>
						      <input type="text" class="form-control" id="name" placeholder="Enter name" name="name">
						    </div>
						    <div class="mb-3">
						      <label for="pwd">Password</label>
						      <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pswd">
						    </div>
						    <button type="submit" class="btn loginBTN">Submit</button>

						    <div class="form-check mb-3 logChk">
						      <label class="form-check-label">
						        <input class="form-check-input" type="checkbox" name="remember"> Remember me
						      </label>
						      <span><a href="#">Forget Password</a></span>
						    </div>    
						  </form>
		 			</div>
		 		</div>
		 	</div>
		 </div>
	</div>

<?php include("footer.php"); ?>