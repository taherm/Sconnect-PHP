<!DOCTYPE html>
<!--
 * A Design by GraphBerry
 * Author: GraphBerry
 * Author URL: http://graphberry.com
 * License: http://graphberry.com/pages/license
-->
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
                            <li class="active"><a href="loginnew.html">Logout</a></li>
                        </ul>
                    </div>
                    <!-- End main navigation -->
                </div>
            </div>
        </div>



        <div class="section secondary-section">
            <div class="triangle"></div>
            <!div class="container centered">                
                <br><br>
				
				<!center>
				
				
				 <div class="large-12 columns extra-padding">
 <div class="winbox-white ">
  <h2>Timeline</h2>
  <i>&nbsp;&nbsp;Welcome!</i>
<?php
//	error_reporting(0);
	$connection = new mysqli('localhost', 'root', '', 'sc');
	if (isset($_POST['msg']) === true) {
		//$put_user = $_SESSION['user'];
		$put_user = shaggy;
		$put_msg = mysql_real_escape_string($_POST['msg']);
		$put_time = time();
		mysqli_query($connection,"INSERT INTO `forum`(`user`, `msg`, `time`) VALUES ('$put_user', '$put_msg', '$put_time')");
		header('Location: forum.php');
	}
	mysqli_close($connection);
?>
  <hr/>
  
  <div class="container" 
		rel="stylesheet" href="../style2.css"
		
  
  
  
  
	<form action="" method="post">
		<textarea name="msg"  rows="4" placeholder="What's on your mind?"></textarea>
		<input type="submit" value="Post" style="width: 65px; float: right;">
	</form>
  <br><hr>
<?php/
							
	while ($row = mysqli_fetch_assoc($forumstudent)) {
		$ptime = $row["time"];
		echo $row["name"];
		echo '<table style="width: 100%;">
				<tr>
					<td rowspan="1" width="100">
						<img src="img/' . $row["u_imgurl"] .'" width="100" height="100">
					</td>
					<td colspan="2">
						<h3>' . $row["name"] . '</h3>
						<p style="margin-top: -15px; font-size: 13px;"><i>ðŸ“©&nbsp;(' . $row["u_mail"] . ')</i></p>
						<p style="margin-top: -5px; font-size: 13px;">' . time_elapsed_string($ptime) . " / " . $row["time_stamp"] . " ðŸ  " . $row["u_city"] . ', ' . $row["u_country"] . '</p>
					</td>
				</tr>
				<tr>
					<td colspan="3" height="10" ><br><p style="margin-top: 10px; padding-left: 50px; padding-right: 20px;">â ' . nl2br($row["msg"]) . ' âž</p></td>
				</tr>
				<tr>
					<td colspan="3"></td>
				</tr>
			</table>';
	}
?>





<table style="width: 100%">
					<tr>
					<th colspan="6"><h2>Your Uploads</h2></th>
					</tr>
					<tr>
					<th>ID</th>
					<th>User</th>
					<th>Message</th>
					<th>Time</th>
					<th>Time Stamp</th>
					</tr>
						<?php					 
							error_reporting(0);
							//session_start(); 
							//$u=$_SESSION['usn'];
							$mysqli=new mysqli("localhost","root","","sc");
							$sql="SELECT * from forum";
							$result=$mysqli->query($sql);
							while($row=$result->fetch_array())
							{
								$ptime = $row["time"];

						  ?>
								
								<tr>
								<td><?php echo $row[0] ?></td>
								<td><?php echo $row[1] ?></td>
								<td><center><?php echo $row[2] ?></td>
								<td><?php echo $row[3] ?></td>
								<td><?php echo $row[4] ?></td>
								</tr>
								</center>
								<?php
						 }
						 ?>
				</table>
				</div>






  <hr/>
 </div>
 </div>
				
				
				
				<!/center>
					
				
				
            <!/div>
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