<!DOCTYPE html>
<!--
 * A Design by GraphBerry
 * Author: GraphBerry
 * Author URL: http://graphberry.com
 * License: http://graphberry.com/pages/license
-->



<?php
session_start();
if(isset($_SESSION['usn']))
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
        <title>S-connect</title>
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
		
    </head>
    
	
    <body>
        <div class="navbar">
            <div class="navbar-inner">
                <div class="container">
                    <a href="#" class="brand">
                        <img src="images/logo.png" width="120" height="40" alt="Logo" />
                        <!-- This is website logo -->
                    </a>
                    <!-- Navigation button, visible on small resolution -->
                    <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                        <i class="icon-menu"></i>
                    </button>
                    <!-- Main navigation -->
                    <div class="nav-collapse collapse pull-right">
                        <ul class="nav" id="top-navigation">
							<li class="active"><a href="#" class="button" data-toggle="modal" data-target="#myModal2">Search Books</a><br><br></li>
							<li class="active"><a href="forumfs.php">Forum</a></li>
                            <li class="active"><a href="lo.php">Logout</a></li>
                        </ul>
                    </div>
                    <!-- End main navigation -->
                </div>
            </div>
        </div>



        <div class="section secondary-section">
            <div class="triangle"></div>
            <div class="container centered">
			
			
                <br><br>
				<a href="viewteachersfs.php" class="button">View Teachers</a><br><br>
				<a href="#" class="button" data-toggle="modal" data-target="#myModal1">Send Assignment</a><br><br>
				<a href="see_assignment.php" class="button">View Assignments To Do</a><br><br>
				<a href="submitted_assignment.php" class="button">Download Books/Study Materials</a>
            </div>
        </div>
		
		<div id="clients">
            <div class="section primary-section">
                <div class="triangle"></div>
                <div class="container">
                    <div class="title">
                        
					</div>
				</div>
			</div>
		</div>
		
		
		
		<!-- To add Assignment starts -->
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
				  <h37 class="modal-title">Add Assignment</h37>
				</div>
				<div class="modal-footer">
          		  <center><p1>Enter the valid informations</p1></center>
				</div>
				<div class="modal-body">
		  
				<div id = "loginform">
				
					<form method = "post" action = "sw3.php" enctype="multipart/form-data">
						<input type = "text" id = "usn" placeholder = "&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp  Send Assignment" name = "" disabled>
						
						<textarea class="span4" name="desc" id="comment" placeholder="* Description about the Assignment..."></textarea>
						<!input type = "text" id = "sname" placeholder = "Uploaded By" name = "by">
						<!input type = "text" id = "subdate" placeholder = "Submition Date (DD-MM-YY)" name = "date">
						<br><input type = "file" name="fileToUpload" class="btn btn-default" id = "browse" value = "Browse"><br>
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
        <!-- To add Assignment ends -->
		
		
		
		
		
		<!-- To add Assignment starts -->
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
				  <h37 class="modal-title">Search Box</h37>
				</div>
				<div class="modal-footer">
          		  <center><p1>Enter valid names to search the uploaded assignments / study materials </p1></center>
				</div>
				<div class="modal-body">
		  
				<div id = "loginform">
				
					<form method = "post" action = "search2.php">
						<input type = "text" id = "search" placeholder = "Type to search" name = "search">
						<br><input type = "submit" class="btn btn-default" id = "dologin" value = "Search">
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
        <!-- To search Assignment ends -->
		
		
		
		
		
		<!-- Footer section start -->
		 <div class="footer">
                <p>&copy; 2016 Designed & Developed by <a href="https://plus.google.com/u/0/+SwagatoMajumder93/posts">Swagato Majumder</a> & <a href="#tahermukadam">Taher Mukadam</a></p>
        
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
        <!-- Load google maps api and call initializeMap function defined in app.js -->
        <script async="" defer="" type="text/javascript" src="https://maps.googleapis.com/maps/api/js?sensor=false&callback=initializeMap"></script>
        <!-- css3-mediaqueries.js for IE8 or older -->
        <!--[if lt IE 9]>
            <script src="js/respond.min.js"></script>
        <![endif]-->
        <script type="text/javascript" src="js/app.js"></script>
    </body>
</html>