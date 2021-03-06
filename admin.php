<!DOCTYPE html>
<!--
 * A Design by GraphBerry
 * Author: GraphBerry
 * Author URL: http://graphberry.com
 * License: http://graphberry.com/pages/license
-->
<?php
session_start();
if(isset($_SESSION['login_admin']))
{
}
else
{

?>
<script>
	alert('You have not logged in');
	window.location='index.html';
</script>
<?php
}
?>
<html lang="en">
    
    <head>
        <meta charset=utf-8>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>S-connect [admin]</title>
        <!-- Load Roboto font -->
        <link href='http://fonts.googleapis.com/css?family=Roboto:400,300,700&amp;subset=latin,latin-ext' rel='stylesheet' type='text/css'>
        <!-- Load css styles -->
        <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
        <link rel="stylesheet" type="text/css" href="css/bootstrap-responsive.css" />
        <link rel="stylesheet" type="text/css" href="css/style.css" />
        <link rel="stylesheet" type="text/css" href="css/pluton.css" />
        <!--[if IE 7]>
            <link rel="stylesheet" type="text/css" href="css/pluton-ie7.css" />
        <![endif]-->
        <link rel="stylesheet" type="text/css" href="css/jquery.cslider.css" />
        <link rel="stylesheet" type="text/css" href="css/jquery.bxslider.css" />
        <link rel="stylesheet" type="text/css" href="css/animate.css" />
        <!-- Fav and touch icons -->
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144.png">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114.png">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/apple-touch-icon-72.png">
        <link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57.png">
        <link rel="shortcut icon" href="images/ico/favicon.ico">
		
			<script type= "text/javascript" src = "js/countries.js"></script>
		
    </head>
    
    <body>
  

<div class="navbar">
            <div class="navbar-inner">
                <div class="container">
                    <a href="#" class="brand">
                        <img src="images/logo.png" width="50" height="50" alt="Logo" />
                        <!-- This is website logo -->
                    </a>
                    <!-- Navigation button, visible on small resolution -->
                    <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                        <i class="icon-menu"></i>
                    </button>
                    <!-- Main navigation -->
                    <div class="nav-collapse collapse pull-right">
                        <ul class="nav" id="top-navigation">
                            <li class="active"><a href="lo.php">Log out</a></li>
                        </ul>
                    </div>
                    <!-- End main navigation -->
                </div>
            </div>
        </div>
        
		
		<!-- Admin section start -->
        <div id="admin" class="section secondary-section">
            <div class="container">
                <div class="title">
                    <h1>Admin</h1>
                    <p>This section provides the privilege to the admin to VIEW, ADD and DELETE teachers and students.</p>
                </div>
				 <div>
					<div class="price-table">
						<div class="span4 price-column">
                        <h3>Admin</h3>
                        <ul class="list">
                            <li class="price"><a href="viewteachers.php" class="button button-ps">View Teachers</a></li>
                            <li><a href="selectviewstudent.php" class="button button-ps">View Students</a></li>
                            <li><a href="#" class="button button-ps" data-toggle="modal" data-target="#myModal1">Add Teachers</a></li>
	                        <li><a href="#" class="button button-ps" data-toggle="modal" data-target="#myModal2">Add Students</a></li>
							<li><a href="#" class="button button-ps" data-toggle="modal" data-target="#myModal3">Remove Teacher</a></li>
                        	<li><a href="#" class="button button-ps" data-toggle="modal" data-target="#myModal4">Remove Student</a></li>
						</ul>
                       
						</div>
					</div>
				</div>
            </div>
        </div>
        <!-- Admin section end -->
		
		<!-- To add Teachers starts -->
		<div class="container" 
		meta charset="utf-8"
		meta name="viewport" content="width=device-width, initial-scale=1"
		rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"
		src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"
		src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js">
								
		<div class="modal fade" id="myModal1" role="dialog">
			<div class="modal-dialog">
									
			  <!-- Modal content-->
			  <center>
			  <div class="modal-content">
				<div class="modal-header">
				  <button type="button" class="close" data-dismiss="modal">&times;</button>
				  <h37 class="modal-title">Add Teachers</h37>
				</div>
				<div class="modal-footer">
          		  <center><p1>Enter the valid informations</p1></center>
				</div>
				<div class="modal-body">
		  
				<div id = "loginform">
				
					<form method = "post" action = "ta.php">
						<!input type = "text" id = "usn" placeholder = "USN" name = "" >
						<input type = "text" id = "sname" name = "logg" placeholder = "Full Name" required  >
						<!input type = "text" id = "sdob" placeholder = "DOB (DD-MM-YY)" name = "sdob">
						
						<input type = "password" id = "tpassword" name = "pass" placeholder = "*******"   ><br>
						
						<!select id="country" name ="country"></select>
						<!select name ="city" id ="city"></select>
								<!input type = "text" id = "login" placeholder = "Username" name = "uid">
						<!br><!input type = "submit" class="btn btn-default" id = "dologin" value = "Upload Image">						
						<br><input type = "submit" class="btn btn-default" id = "dologin" value = "ADD">
					</form>

                  
                  
                  
				</div>
				  
				</div>
				</center>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
			  
									</div>
								</div>
							</div>
        <!-- To add Teachers ends -->

							
							
        <!-- To add Students starts -->
		<div class="container" 
		meta charset="utf-8"
		meta name="viewport" content="width=device-width, initial-scale=1"
		rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"
		src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"
		src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js">
								
		<div class="modal fade" id="myModal2" role="dialog">
			<div class="modal-dialog">
									
			  <!-- Modal content-->
			  <center>
			  <div class="modal-content">
				<div class="modal-header">
				  <button type="button" class="close" data-dismiss="modal">&times;</button>
				  <h37 class="modal-title">ADD STUDENT</h37>
				</div>
				<div class="modal-footer">
          		  <center><p1>Enter the student details</p1></center>
				</div>
				<div class="modal-body">
		  
				<div id = "loginform">
				
					<form method = "post" action = "sa.php">
						<input type = "text" id = "usn" placeholder = "USN" name = "log">
						<!input type = "text" id = "sname" placeholder = "Full Name" name = "sname">
						<input type = "text" id = "sdob" placeholder = "DOB (DD-MM-YY)" name = "pass">
						
						<input type = "text" id = "text" name = "sem" placeholder = "Semester(Eg: 3)"><br>
						
						<!select id="country" name ="country"></select>
						<!select name ="city" id ="city"></select>
						<script language="javascript">
									populateCountries("country", "city");
								</script>
						<!input type = "text" id = "login" placeholder = "Username" name = "uid">
						<!br><!input type = "submit" class="btn btn-default" id = "dologin" value = "Upload Image">						
						<br><input type = "submit" class="btn btn-default" id = "dologin" value = "ADD">
					</form>

				</div>
				  
				</div>
				</center>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
			  
									</div>
								</div>
							</div>
        <!-- To add Students ends -->
		
		
        <!-- To remove Teachers starts -->
		<div class="container" 
		meta charset="utf-8"
		meta name="viewport" content="width=device-width, initial-scale=1"
		rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"
		src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"
		src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js">
								
		<div class="modal fade" id="myModal3" role="dialog">
			<div class="modal-dialog">
									
			  <!-- Modal content-->
			  <center>
			  <div class="modal-content">
				<div class="modal-header">
				  <button type="button" class="close" data-dismiss="modal">&times;</button>
				  <h37 class="modal-title">REMOVE TEACHER</h37>
				</div>
				<div class="modal-footer">
          		  <center><p1>Enter the teacher name to delete that individual</p1></center>
				</div>
				<div class="modal-body">
		  
				<div id = "loginform">
				
					<form method = "post" action = "del_teacher.php">
						<!input type = "text" id = "usn" placeholder = "USN" name = "log">
						<input type = "text" id = "sname" placeholder = "Full Name" name = "sname">
						<br><input type = "submit" class="btn btn-default" id = "dologin" value = "DELETE">
					</form>

				</div>
				  
				</div>
				</center>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
			  
									</div>
								</div>
							</div>
        <!-- To remove Teachers ends -->		

        <!-- To remove Students starts -->
		<div class="container" 
		meta charset="utf-8"
		meta name="viewport" content="width=device-width, initial-scale=1"
		rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"
		src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"
		src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js">
								
		<div class="modal fade" id="myModal4" role="dialog">
			<div class="modal-dialog">
									
			  <!-- Modal content-->
			  <center>
			  <div class="modal-content">
				<div class="modal-header">
				  <button type="button" class="close" data-dismiss="modal">&times;</button>
				  <h37 class="modal-title">REMOVE STUDENT</h37>
				</div>
				<div class="modal-footer">
          		  <center><p1>Enter the student usn to delete that individual</p1></center>
				</div>
				<div class="modal-body">
		  
				<div id = "loginform">
				
					<form method = "post" action = "del_student.php">
						<input type = "text" id = "usn" placeholder = "USN" name = "log">
						<!input type = "text" id = "sname" placeholder = "Full Name" name = "sname">
						<br><input type = "submit" class="btn btn-default" id = "dologin" value = "DELETE">
					</form>

				</div>
				  
				</div>
				</center>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
			  
									</div>
								</div>
							</div>
        <!-- To remove Students ends -->

		
        <!-- Footer section start -->
        <div class="footer">
            <p>&copy; 2016 Designed by <a href="https://plus.google.com/u/0/+SwagatoMajumder93/posts">Swagato Majumder</a> & <a href="http://goo.gl/NM84K2">Taher Mukadam</a></p>
        </div>
        <!-- Footer section end -->
        <!-- ScrollUp button start -->
        <div class="scrollup">
            <a href="#">
                <i class="icon-up-open"></i>
            </a>
        </div>
        <!-- ScrollUp button end -->
        <!-- Include javascript -->
        <script src="js/jquery.js"></script>
        <script type="text/javascript" src="js/jquery.mixitup.js"></script>
        <script type="text/javascript" src="js/bootstrap.js"></script>
        <script type="text/javascript" src="js/modernizr.custom.js"></script>
        <script type="text/javascript" src="js/jquery.bxslider.js"></script>
        <script type="text/javascript" src="js/jquery.cslider.js"></script>
        <script type="text/javascript" src="js/jquery.placeholder.js"></script>
        <script type="text/javascript" src="js/jquery.inview.js"></script>
		<script type= "text/javascript" src = "js/countries.js"></script>
		
        <!-- Load google maps api and call initializeMap function defined in app.js -->
        <script async="" defer="" type="text/javascript" src="https://maps.googleapis.com/maps/api/js?sensor=false&callback=initializeMap"></script>
        <!-- css3-mediaqueries.js for IE8 or older -->
        <!--[if lt IE 9]>
            <script src="js/respond.min.js"></script>
        <![endif]-->
        <script type="text/javascript" src="js/app.js"></script>
    </body>
</html>