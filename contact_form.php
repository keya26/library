<?php include('header.php'); ?>
<?php include('navbar.php'); ?>
<?php
		include('dbcon.php');
	?>
	 <div class="container">
		<div class="margin-top">
			<div class="row">
					<?php include('head.php'); ?>
					<div class="span12
	<form action="<?php $_PHP_SELF ?>" method="POST">	
				<div class="span5">
					<div class="form-horizontal">
								
						<div class="control-group">
							<label class="control-label" for="inputEmail">First Name:</label>
							<div class="controls">
							<input type="text" id="inputEmail" name="first_name" placeholder="first Name" required>
								&nbsp;	&nbsp; 	&nbsp; 	&nbsp;
							</div>
						</div>
						<div class="control-group">
							<label class="control-label" for="inputEmail">Last Name:</label>
							<div class="controls">
							<input type="text" id="inputEmail" name="last_name"  placeholder="last Name" required>
								&nbsp;	&nbsp; 	&nbsp; 	&nbsp;
							</div>
						</div>
						<div class="control-group">
							<label class="control-label" for="inputEmail">Email Address:</label>
							<div class="controls">
							<input type="text" id="inputEmail" name="email"  placeholder="Email Address" required>
								&nbsp;	&nbsp; 	&nbsp; 	&nbsp;
							</div>
						</div>
					
						<div class="control-group">
							<label class="control-label" for="inputEmail">Message:</label>
							<div class="controls">
							<input type="text"  id="inputEmail" name="message"   placeholder="Put Your Message Here" required>
								&nbsp;	&nbsp; 	&nbsp; 	&nbsp;
							</div>
						</div>
						
						<div class="control-group">
							<div class="controls">
							<button name="submit" type="submit" class="btn btn-info"><i class="icon-signin icon-large"></i>&nbsp;Send</button>
							</div>
						</div>
				   </div>
			</div>	   

			
			<div class="span6">
	
	
			<div class="form-horizontal">

					<?php 
				if(isset($_POST['submit']))
				{

						$firstname=$_POST['first_name'];
						$lastname=$_POST['last_name'];
						$email=$_POST['email'];
						$message=$_POST['message'];
				  mysql_query("insert into contact (first_name,last_name,email,message) values('$firstname','$lastname','$email','$message')")or die(mysql_error());  ?>
			<script type="text/javascript">
			 window.location='success2.php'; 
			</script>
			<?php
				}else{
				echo " ";
				}
		?>
		
		</div>
		
		</div>	

	</form>
	</div>