      <div class="navbar navbar-fixed-top navbar-inverse">
            <div class="navbar-inner">
                <div class="container">
                    <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </a>
                    <div class="nav-collapse collapse">
                        <!-- .nav, .navbar-search, .navbar-form, etc -->
					<ul class="nav">
					<li><a href="dashboard.php"><i class="icon-home icon-large"></i>&nbsp;Home</a></li>
					<?php 
					include('dropdown2.php');
					?>
					<?php 
					include('dropdown.php');
					?>
					<li><a href="books.php"><i class="icon-book icon-large"></i>&nbsp;Books</a></li>
					<li><a href="#myModal" data-toggle="modal"><i class="icon-search icon-large"></i>&nbsp;Advance Search</a></li>
					
					<li><a href="#myModal2" data-toggle="modal"><i class="icon-search icon-large"></i>&nbsp;Search By Date</a></li>
					
					<li><a href="logout.php"><i class="icon-signout icon-large"></i>&nbsp;Logout</a></li>
					</ul>
					 <div class="pull-right">
						<div class="admin">Welcome: User</div>
                     </div>
                    </div>
                </div>
            </div>
        </div>
		
<?php include('search_form.php'); ?>
<?php include('date_search_form.php'); ?>
<?php include('borrow_search_form.php'); ?>
<?php include('return_search_form.php'); ?>
 
