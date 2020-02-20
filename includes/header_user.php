<div class="navbar navbar-default navbar-fixed-top" role="navigation" id="nav1"><!--nav section-->
			<div class="container container-fluid"><!--Logo-->
				<a href="menu.php" class="logo">
						<h2><b>CHECKOUT SYSTEM (ADMIN)</b></h2>
					</a>
			</div> <!--end logo-->
			<div id="nav">
				<div class="container container-fluid">	
								
				  <!--Toggle button for better mobile display -->
				  <div class="navbar-header">
				      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
				        <span class="sr-only">Toggle navigation</span>
				        <span class="icon-bar"></span>
				        <span class="icon-bar"></span>
				        <span class="icon-bar"></span>
				      </button>
					</div>

				    <!-- Collect the nav links, forms, and other content for toggling -->
				    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				      <ul class="nav navbar-nav">
				      	<li><a href="menu.php"><b>Home</b></a></li>	
								<li class="dropdown">
				      	<a href="#" class="dropdown-toggle" data-toggle="dropdown"><b>Manage Additions</b><span class="caret"></span></a>
				      		<ul class="dropdown-menu" role="menu">
										<li><a href="add_guard.php"><b>Add Guard</b></a></li>	
										<li><a href="add_staff.php"><b>Add Staff</b></a></li>
										<li><a href="add_pc.php"><b>Add New PC</b></a></li>         
					        </ul>
				      	</li>
								<li><a href="assign_pc.php"><b>Assign-PC</b></a></li>
								<li class="dropdown">
				      	<a href="#" class="dropdown-toggle" data-toggle="dropdown"><b> View Reports</b><span class="caret"></span></a>
				      		<ul class="dropdown-menu" role="menu">
					            <li class="drop"><a class="hov" href="view_staffs.php"><b>Staffs</b></a></li>
											<li class="drop"><a class="hov" href="view_security_guards.php"><b>Security Guards</b></a></li>
											<li class="drop"><a class="hov" href="view_pcs.php"><b>PCs</b></a></li>
					            <li class="drop"><a class="hov" href="view_pc_assignments.php"><b>PC Assignments</b></a></li>
											<li class="drop"><a class="hov" href="tracker.php"><b>PC Tracker</b></a></li>         
					        </ul>
				      	</li>				      	
				      	<li><a href="#"><b>Help</b></a></li>				      	
				      </ul>
				      <a href="includes/log_out.php"><button class="pull-right"><span class="badge">Log Out</span></button></a>	
				      			      			      
				    </div><!-- /.navbar-collapse -->

				</div><!-- /.container-fluid -->
			</div><!--end-nav-->
		</div><!--end of nav section-->