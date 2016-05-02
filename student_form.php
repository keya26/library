<?php include('header.php'); ?>
<?php include('navbar.php'); ?>
<?php include('dbcon.php');?>

	<div class="container">
		<div class="margin-top">
			<div class="row">
				<?php include('head.php'); ?>
					
				<div class="span12">
					<form action="<?php $_PHP_SELF ?>" method="POST">	
								<div class="span5">
								<div class="form-horizontal">
									
									<div class="control-group">
										<label class="control-label" for="inputEmail">First Name:</label>
										<div class="controls">
										<input type="text" id="inputEmail" name="firstname" placeholder="first Name" required>
											&nbsp;	&nbsp; 	&nbsp; 	&nbsp;
										</div>
									</div>
									<div class="control-group">
										<label class="control-label" for="inputEmail">Last Name:</label>
										<div class="controls">
										<input type="text" id="inputEmail" name="lastname"  placeholder="last Name" required>
											&nbsp;	&nbsp; 	&nbsp; 	&nbsp;
										</div>
									</div>
									<div class="control-group">
										<label class="control-label" for="inputEmail">User Name:</label>
										<div class="controls">
										<input type="text" id="inputEmail" name="username"  placeholder="User Name" required>
											&nbsp;	&nbsp; 	&nbsp; 	&nbsp;
										</div>
									</div>
									
									<div class="control-group">
										<label class="control-label" for="inputEmail">Gender:</label>
										<div class="controls">
										<select name="gender" required>
										
													<option>Male</option>
													<option>Female</option>
													
									   </select>
									</div>
									</div>
									<div class="control-group">
										<label class="control-label" for="inputEmail">Address:</label>
										<div class="controls">
										<input type="text" id="inputEmail" name="address"  placeholder="Address" required>
											&nbsp;	&nbsp; 	&nbsp; 	&nbsp;
										</div>
									</div>
									
									<div class="control-group">
										<label class="control-label" for="inputEmail">Roll No:</label>
										<div class="controls">
										<input type="text" id="inputEmail" name="roll"  placeholder="Roll No" required>
											&nbsp;	&nbsp; 	&nbsp; 	&nbsp;
										</div>
									</div>
									
									
									<div class="control-group">
										<label class="control-label" for="inputEmail">Contact:</label>
										<div class="controls">
										<input type="text" id="inputEmail" name="contact" placeholder="Contact" required>
											&nbsp;	&nbsp; 	&nbsp; 	&nbsp;
										</div>
									</div>
									
									<div class="control-group">
										<label class="control-label" for="inputEmail">Type:</label>
										<div class="controls">
										<select name="type" required>
										
													<option>Student</option>
													<option></option>
													
									   </select>
								   </div>
									</div>
									
									<div class="control-group">
										<label class="control-label" for="inputEmail">Year_Level:</label>
										<div class="controls">
										<select name="year_level" >
													
													<option>First Year</option>
													<option>Second Year</option>
													<option>Third Year</option>
													<option>Fourth Year</option>
													<option>Masters</option>
										</select>
									</div>
									</div>
									
									<div class="control-group">
										<label class="control-label" for="inputPassword">Password</label>
										<div class="controls">
										<input type="password" name="password" placeholder="Password">
										</div>
									</div>

									<div class="control-group">
										<div class="controls">
										<button name="submit" type="submit" class="btn btn-info"><i class="icon-signin icon-large"></i>&nbsp;Confirm</button>
										</div>
									</div>
								</div>
							</div>
				</div>
			</div>
		</div>
	</div>
			
			<div class="span6">
	
	
			<div class="form-horizontal">

					<?php 
				if(isset($_POST['submit']))
				{
						$firstname=$_POST['firstname'];
						$lastname=$_POST['lastname'];
						$username=$_POST['username'];
						$gender=$_POST['gender'];
						$address=$_POST['address'];
						$roll=$_POST['roll'];
						$contact=$_POST['contact'];
						$type=$_POST['type'];
						$year_level=$_POST['year_level'];

						$password=$_POST['password'];
				  mysql_query("insert into member (firstname,lastname,username,gender,address,roll,contact,type,year_level,password)
				  values('$firstname','$lastname','$username','$gender','$address','$roll','$contact','$type','$year_level','$password')")or die(mysql_error());  ?>
			<script type="text/javascript">
			 window.location='success.php'; 
			</script>
			<?php
				}else{
				echo " ";
				}
		?>
		
		</div>
		
		</div>	

	</form>