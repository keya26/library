<?php include('header.php'); ?>
<?php include('session.php'); ?>
<?php include('navbar.php'); ?>
    <div class="container">
		<div class="margin-top">
			<div class="row">	
			<div class="span12">	
			   <div class="alert alert-info">
                                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                                    <strong><i class="icon-user icon-large"></i>&nbsp;Books Table</strong>
                                </div>
						<!--  -->
								    <ul class="nav nav-pills">
										<li   class="active"><a href="books.php">All Books</a></li>
										<li><a href="new_books.php">New Books</a></li>
										<li><a href="old_books.php">Old Books</a></li>
									</ul>
						<!--  -->
						<center class="title">
						<h1>Books List</h1>
						</center>
                            <table cellpadding="0" cellspacing="0" border="0" class="table  table-bordered" id="example">
								<div class="pull-right">
								<a href="" onclick="window.print()" class="btn btn-info"><i class="icon-print icon-large"></i> Print</a>
								</div>
							
                                <thead>
                                    <tr>
									    <th>Book No.</th>                                 
                                        <th>Book Title</th>                                 
                                        <th>Category</th>
										<th>Author</th>
										<th class="action">copies</th>
										<th>Edition</th>
										<th>Publisher Name</th>
										<th>ISBN</th>
										<th>Copyright Year</th>
										<th>Date Added</th>
										<th>Status</th>	
                                    </tr>
                                </thead>
                                <tbody>
								 
                                  <?php 


								  $user_query=mysql_query("select * from book ")or die(mysql_error());
									while($row=mysql_fetch_array($user_query)){
									$id=$row['book_id'];  
									$cat_id=$row['category_id'];
									$book_copies = $row['book_copies'];
									
									$borrow_details = mysql_query("select * from borrowdetails where book_id = '$id' and borrow_status = 'pending'");
									$row11 = mysql_fetch_array($borrow_details);
									$count = mysql_num_rows($borrow_details);
									
									$total =  $book_copies  -  $count; 
									/* $t4otal =  $book_copies  - $borrow_details;
									
									echo $total; */
											$cat_query = mysql_query("select * from category where category_id = '$cat_id'")or die(mysql_error());
											$cat_row = mysql_fetch_array($cat_query);
									?>
									<tr class="del<?php echo $id ?>">
                                    <td><?php echo $row['book_id']; ?></td>
                                    <td><?php echo $row['book_title']; ?></td>
									<td><?php echo $cat_row ['classname']; ?> </td>
                                    <td><?php echo $row['author']; ?> </td> 
                                    <td class="action"><?php echo /* $row['book_copies']; */   $total;   ?> </td>
									<td><?php echo $row['edition']; ?></td>
									 <td><?php echo $row['publisher_name']; ?></td>
									 <td><?php echo $row['isbn']; ?></td>
									 <td><?php echo $row['copyright_year']; ?></td>		
									 <td><?php echo $row['date_added']; ?></td>
									 <td><?php echo $row['status']; ?></td>
									 
									
                                    </tr>
									<?php  }  ?>
                           
                                </tbody>
                            </table>
							
			
			</div>		
			</div>
		</div>
    </div>
<?php include('footer.php') ?>