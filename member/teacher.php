<?php include('header.php'); ?>
<?php include('session.php'); ?>
<?php include('navbar.php'); ?>
    <div class="container">
		<div class="margin-top">
			<div class="row">	
			
			<div class="span12">
			
			
					
                            <table cellpadding="0" cellspacing="0" border="0" class="table  table-bordered" id="example">
							<div class="pull-right">
								<a href="" onclick="window.print()" class="btn btn-info"><i class="icon-print icon-large"></i> Print</a>
								</div>
                                <div class="alert alert-info">
                                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                                    <strong><i class="icon-user icon-large"></i>&nbsp;Teachers Table</strong>
                                </div>
                                <thead>
                                    <tr>
                                                                        
                                        <th>Firstname</th>                                 
                                        <th>Lastname</th> 
										<th>Gender</th>
										<th>Address</th>
										<th>Contact</th> 
										<th>Email</th>
                                    </tr>
                                </thead>
                                <tbody>
								 
                                  <?php $user_query=mysql_query("select * from member where type='teacher'")or die(mysql_error());
									while($row=mysql_fetch_array($user_query)){
									$id=$row['member_id']; ?>
									 <tr class="del<?php echo $id ?>">
                                    
                                    <td><?php echo $row['firstname']; ?></td> 
                                    <td><?php echo $row['lastname']; ?></td> 
									<td><?php echo $row['gender']; ?></td>
									<td><?php echo $row['address']; ?></td>
									<td><?php echo $row['contact']; ?></td> 
									<td><?php echo $row['username']; ?>@gmail.com</td> 
                                   
                                    </tr>
									<?php } ?>
                           
                                </tbody>
                            </table>
							


			
			</div>		
			</div>
		</div>
    </div>
<?php include('footer.php') ?>