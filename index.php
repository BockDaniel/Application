<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SensiMembers</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Cookie">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/styles.css">
    <link rel="stylesheet" href="assets/css/Pretty-Footer.css">
</head>

<body>
    <div class="row">
		<div class="col-sm-12">
			<nav role="navigation" class="navbar navbar-default navbar-static" style="border-bottom: 5px solid #d4a631;">
				<div class="navbar-header" style="background-color: black; color: white;">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#main">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="#" style="color: #d24b28; font-size: 15pt">Sensi Members</a>
				</div>
				<div class="collapse navbar-collapse" id="main" style="background-color: black;">
					<ul class="nav navbar-nav">
						<li class="active" style="font-size: 15pt"><a tabindex="-1" href="#home" data-toggle="tab"  style="color: white">Full Homepage</a></li>
						<li style="font-size: 15pt"><a tabindex="-1" href="#events" data-toggle="tab" style="color: white">Events</a></li>
						<li style="font-size: 15pt"><a tabindex="-1" href="#contact" data-toggle="tab" style="color: white">Contact</a></li>
					</ul>
					<p class="navbar-text navbar-right" style="margin: 5pt; font-size: 15pt;"><a href="#" data-toggle="modal" data-target="#log" style="color: white;">Login <span class="glyphicon glyphicon-login"></span></a></p>

					<!--#log modal script-->
					<div class="modal fade" role="dialog" id="log" tabindex="-1" aria-labelledby="loginLabel" aria-hidden="true">
						<div class="modal-dialog">
							<div class="modal-content">
								<div class="modal-header">
									<button type="button" class="close" data-dismiss="modal" aria-hiden="true">&times;</button>
									<h1>Sensi Hub Admin Login</h1>
									<p class="help-block">Please enter your login in details to manage Sensi members</p>
								</div>
								<div class="modal-body">
									<form action="login.php" method="post" role="form">
										<div class="row">
											<div class="col-md-10">
												<div class="form-group">
													<label for="name">Username</label>
													<input type="text" name="usename" class="form-control">
												</div>
												<div class="form-group">
													<label for="password">Password</label>
													<input type="password" name="pssword" class="form-control">
												</div>
												<div>
													<button type="button" class="btn btn-default" data-dismiss="modal">close</button>
													<button type="Submit" class="btn btn-primary">Signin</button>
													<p class="help-block">click <a href="#" data-toggle="modal" data-target="#signup" >here</a> to register</p>
												</div>												
											</div>
										</div>
									</form>

									<!--the signup modal-->
												<div class="modal fade" role="dialog" id="signup" tabindex="-1">
													<div class="modal-dialog">
														<div class="modal-content">
															<div class="modal-header">
																<button class="close" type="button" data-dismiss="modal">&times;</button>
																<h1 class="modal-titl" style="text-align: ceter; font-family: 'coopr black'">Signup form</h1>
																<p class="help-block">Please fill this form to create an account for membership management</p>
															</div>
															<div class="modal-body">
																<form role="form" action="signup.php" method="post">
																	<div class="row">
																		<div class="col-md-10">
																			<div class="form-group">
																				<label for="ID">Enter Staff ID</label>
																				<input type="text" name="siid" class="form-control">
																			</div>
																			<div class="form-group">
																				<label for="username">Username</label>
																				<input type="text" name="uname" class="form-control">
																			</div>
																			<div class="form-group">
																				<label for="password">Enter Password</label>
																				<input type="password" name="pwd" class="form-control">
																			</div>
																			<div class="form-group">
																				<label for="password">Confirm Password</label>
																				<input type="password" name="cpwd" class="form-control">
																			</div>
																			<div>
																				<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
																				<button type="submit" class="btn btn-primary">Signup</button>
																			</div>
																		</div>
																	</div>
																</form>
															</div>
														</div>
													</div> 
												</div> <!--/signup modal-->
									
								</div>								
							</div>
						</div>
					</div><!--end of #log modal script-->
				</div>
			</nav>
		</div>
	</div>
<!--This is the end of the first row that contains the header of navigation bar-->

	<div class="row">
		<div class="col-sm-12">
			<br />
		</div> <!--this is an empty column-->
	</div>

<!--This is the second row that contains the page title and the search box-->
<div class="row">
	<div class="col-sm-12">
		<div class="row">
			<div class="col-sm-3"></div>
			<div class="col-sm-6">
				<div class="page-heade">
					<h1 style="font-size: 40pt; font-family: 'cooper black'; color: #d4a631; text-align: center; ">Sensi Tech Innovation Hub</h1>
					<br>
					<br>
				</div>
				<div>
					<form role="form" action="mSearch.php" method="post">
						<div class="input-group input-group-lg form-group">
							<input type="text" name="schmb" placeholder="search members" class="form-control">
							<span class="input-group-btn">
								<button type="Submit" class="btn btn-default"><span class="glyphicon glyphicon-search"></span> <b>Search</b></button>
							</span>
						</div>
					</form>
				</div><!-- end of input group with search box-->
			</div><!--/col-sm-6-->
			<div class="col-sm-3"></div>
		</div><!--/row-->
	</div><!--/col-sm-12-->
</div><!--/row-->
<!--end of second row-->

<div class="row">
	<div class="col-sm-12">
		<br />
	</div> <!--this is an empty column-->
</div>

<!--This is the third row that will contain the panel for the week's event-->
<div class="row">
	<div class="col-sm-12">
		<div class="row">
			<div class="col-sm-2"></div>
			<div class="col-sm-8">
				<div class="panel panel-default">
					<div class="panel-heading">
						<h4 class="panel-title" style="font-family: 'cooper black'; color: #d4a631">Event/s for this week</h4>
					</div>
					<div class="panel-body">
						<p class="help-block">The following are the events that would take place at sensi this week. They are being placed in seperate columns with their respective IDs, Title, start and end date, start and end time and speakers or event's host.</p>
					</div>
					<?php
					//get the connection script
					require_once('connect.php');
					//the quey to be executed
					$qry = "SELECT eID, eTitle, speaker, startDate, endDate, startTime, endTime, datediff(events.startDate,CURRENT_DATE()) AS remainingDays FROM events WHERE datediff(events.startDate, CURRENT_DATE()) < 7 AND datediff(events.startDate,CURRENT_DATE()) > 0 ";

					$result = $db->query($qry);
					$numrows = $result->num_rows;

					?>
					<table class="table table-default table-hover">
						<thead>
							<th>ID</th>
							<th>Title</th>
							<th>Speaker/Host</th>
							<th>Start Date</th>
							<th>End Date</th>
							<th>Start time</th>
							<th>End Time</th>
							<th>Remaining Days</th>
						</thead>
						<tbody>
							<?php
							if($numrows > 0){
								while($row = $result->fetch_assoc()){
									?>
									<tr>
										<td><?php echo $row['eID']; ?></td>
										<td><?php echo $row['eTitle']; ?></td>
										<td><?php echo $row['speaker']; ?></td>
										<td><?php echo $row['startDate']; ?></td>
										<td><?php echo $row['endDate']; ?></td>
										<td><?php echo $row['startTime']; ?></td>
										<td><?php echo $row['endTime']; ?></td>
										<td><?php echo $row['remainingDays']; ?></td>										
									<tr>
										<?php
								}
							}
							?>

						</tbody>						
					</table>
				</div>
			</div><!--end of embeded column-->
			<div class="col-sm-2"></div>
		</div> <!--end of embeded row-->
	</div> <!--end of main column-->
</div> <!--end of main row-->

<div class="row">
	<div class="col-sm-12">
		<br />
	</div> <!--this is an empty column-->
</div>

<!--This is the forth row that would contain the media objects-->
<div class="row">
	<div class="col-sm-12 col-md-12 col-lg-12">
		<div class="row">
			<div class="col-sm-3 col-md-3 col-lg-3"></div>
			<div class="col-sm-8 col-md-8 col-lg-8">
				<div class="row">
					<div class="col-sm-2 col-md-2 col-lg-2">
						<div>
							<a style="border-radius: 50%" class="thumbnail" href="allMembers.php"><img style="border-radius: 50%" src="assets/img/ball.jpg" alt="football"></a>
						</div>
						<div class="caption">
							<h3 style="text-align: center; color: #d4a631"><b>Members</b></h3>
						</div>
					</div> <!--end of the first image-->
					<div class="col-sm-2 col-md-2 col-lg-2">
						<div >
							<a style="border-radius: 50%;" class="thumbnail" href="allStaff.php"><img style="border-radius: 50%" src="assets/img/ball.jpg" alt="football"></a>
						</div>
						<div class="caption">
							<h3 style="text-align: center; color: #d4a631"><b>Staff</b></h3>
						</div>
					</div> <!--end of the first image-->
					<div class="col-sm-2 col-md-2 col-lg-2">
						<div >
							<a style="border-radius: 50%" class="thumbnail" href="allPayments.php"><img style="border-radius: 50%" src="assets/img/ball.jpg" alt="football"></a>
						</div>
						<div class="caption">
							<h3 style="text-align: center; color: #d4a631"><b>Payments</b></h3>
						</div>
					</div> <!--end of the first image-->
					<div class="col-sm-2 col-md-2 col-lg-2">
						<div >
							<a style="border-radius: 50%" class="thumbnail" href="allEvents.php"><img style="border-radius: 50%" src="assets/img/ball.jpg" alt="football"></a>
						</div>
						<div class="caption">
							<h3 style="text-align: center; color: #d4a631"><b>Events</b></h3>
						</div>
					</div> <!--end of the first image-->
				</div>
			</div>
			<div class="col-sm-1 col-md-1 col-lg-1"></div>
		</div>
	</div>
</div>

<footer>
	<div class="row">
        <div class="col-md-4 col-sm-6 footer-navigation">
            <h3><a href="#"><img src="assets/img/sensiLogo.png"></span></a></h3>            
            <p class="company-name">Sensi Tech Innovation Hub © 2018 </p>
        </div>

        <div class="col-md-4 col-sm-6 footer-contacts">
            <div><span class="fa fa-map-marker footer-contacts-icon"> </span>
                <p><span class="new-line-span">67 Sir Samuel Lewis Road</span> Aberdeen, Freetown</p>
            </div>
            <div><i class="fa fa-phone footer-contacts-icon"></i>
                <p class="footer-center-info email text-left"> +23279364008</p>
            </div>
            <div><i class="fa fa-envelope footer-contacts-icon"></i>
                <p> <a href="#" target="_blank">sensitechhubft@gmail.com</a></p>
            </div>
        </div>

        <div class="clearfix visible-sm-block visible-md-block"></div>
        <div class="col-md-4 footer-about">
            <h4>About Sensi</h4>
            <p>Sensi Tech Hub is the first innovation hub in Sierra Leone. It is an open, creative, innovative and interactive space where entrepreneurs or anyone interested in tech would be confortable. Join us by signing up to the hub as a member and become part of this great tech community.</p>
            <div class="social-links social-icons">
            	<a href="https://www.facebook.com/SensiTech/"><i class="fa fa-facebook"></i></a><a href="#"><i class="fa fa-twitter"></i></a><a href="#"><i class="fa fa-linkedin"></i></a><a href="#"><i class="fa fa-github"></i></a>
            </div>
        </div>
    </div>
</footer>

    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>
