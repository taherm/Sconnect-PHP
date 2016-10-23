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
        <title>S-connect [Admin]</title>
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
                        <img src="images/logo.png" width="120" height="140" alt="Logo" />
                        <!-- This is website logo -->
                    </a>
                    <!-- Navigation button, visible on small resolution -->
                    <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                        <i class="icon-menu"></i>
                    </button>
                    <!-- Main navigation -->
                    <div class="nav-collapse collapse pull-right">
                        <ul class="nav" id="top-navigation">
							<li class="active"><a href="admin.php">Admin Home</a></li>
							<li class="active"><a href="selectviewstudent.php">Back</a></li>
                            <li class="active"><a href="lo.php">Log out</a></li>
                        </ul>
                    </div>
                    <!-- End main navigation -->
                </div>
            </div>
        </div>
		
		
		        <!-- About us section start -->
        <div class="section primary-section" id="about">
            <div class="triangle"></div>
            <div class="container">
                <div class="title">
                    <h1>1st Year</h1>
                    <p>Scroll to see all the students along with their details</p>
                </div>
                <div class="row-fluid team">
                    <div class="span4" id="first-person">
                        <div class="thumbnail">
                            <img src="images/deep.jpg" width="400" height="600" alt="team 1">
                            <h3>Deep</h3>
                            <ul class="social">
                                <li>
                                    <a href="">
                                        <span class="icon-facebook-circled"></span>
                                    </a>
                                </li>
                                <li>
                                    <a href="">
                                        <span class="icon-twitter-circled"></span>
                                    </a>
                                </li>
                                <li>
                                    <a href="">
                                        <span class="icon-linkedin-circled"></span>
                                    </a>
                                </li>
								 <li>
                                <a href="">
                                    <span class="icon-dribbble-circled"></span>
                                </a>
                            </li>
                            </ul>
                            <div class="mask">
                                <h2>USN: 1MS15MCA_ _</h2>
                                <p>Batch: 2015-2018 </p>
								<p>Email ID: ? @gmail.com</p>
                            </div>
                        </div>
                    </div>
                    <div class="span4" id="second-person">
                        <div class="thumbnail">
                            <img src="images/utsha.jpg"  alt="team 1">
                            <h3>Utsha Rej</h3>
                            <ul class="social">
                                <li>
                                    <a href="">
                                        <span class="icon-facebook-circled"></span>
                                    </a>
                                </li>
                                <li>
                                    <a href="">
                                        <span class="icon-twitter-circled"></span>
                                    </a>
                                </li>
                                <li>
                                    <a href="">
                                        <span class="icon-linkedin-circled"></span>
                                    </a>
                                </li>
                            </ul>
                            <div class="mask">
                                <h2>USN: 1MS15MCA49</h2>
                                <p>Batch: 2015-2018 </p>
								<p>Email ID: ? @gmail.com</p>
                            </div>
                        </div>
                    </div>
                    <div class="span4" id="third-person">
                        <div class="thumbnail">
                            <img src="images/shovan.jpg" width="400" height="190" alt="team 1">
                            <h3> Shovan</h3>
                            <ul class="social">
                                <li>
                                    <a href="">
                                        <span class="icon-facebook-circled"></span>
                                    </a>
                                </li>
                                <li>
                                    <a href="">
                                        <span class="icon-twitter-circled"></span>
                                    </a>
                                </li>
                                <li>
                                    <a href="">
                                        <span class="icon-linkedin-circled"></span>
                                    </a>
                                </li>
                            </ul>
                            <div class="mask">
                                <h2>USN: 1MS15MCA_ _</h2>
                                <p>Batch: 2015-2018 </p>
								<p>Email ID: ? @gmail.com</p>
                            </div>
                        </div>
						
						
						
                    </div>
                </div>
				
				
				
				<br><br>
				                <div class="row-fluid team">
                    <div class="span4" id="fourth-person">
                        <div class="thumbnail">
                            <img src="images/sohel.jpg" width="400" height="600" alt="team 1">
                            <h3>Sohel</h3>
                            <ul class="social">
                                <li>
                                    <a href="">
                                        <span class="icon-facebook-circled"></span>
                                    </a>
                                </li>
                                <li>
                                    <a href="">
                                        <span class="icon-twitter-circled"></span>
                                    </a>
                                </li>
                                <li>
                                    <a href="">
                                        <span class="icon-linkedin-circled"></span>
                                    </a>
                                </li>
								 <li>
                                <a href="">
                                    <span class="icon-dribbble-circled"></span>
                                </a>
                            </li>
                            </ul>
                            <div class="mask">
                                <h2>USN: 1MS15MCA_ _</h2>
                                <p>Batch: 2015-2018 </p>
								<p>Email ID: ? @gmail.com</p>
                            </div>
                        </div>
                    </div>
                    <div class="span4" id="fifth-person">
                        <div class="thumbnail">
                            <img src="images/rashmi.jpg"  alt="team 1">
                            <h3>Rashmi Singh</h3>
                            <ul class="social">
                                <li>
                                    <a href="">
                                        <span class="icon-facebook-circled"></span>
                                    </a>
                                </li>
                                <li>
                                    <a href="">
                                        <span class="icon-twitter-circled"></span>
                                    </a>
                                </li>
                                <li>
                                    <a href="">
                                        <span class="icon-linkedin-circled"></span>
                                    </a>
                                </li>
                            </ul>
                            <div class="mask">
                                <h2>USN: 1MS15MCA_ _</h2>
                                <p>Batch: 2015-2018 </p>
								<p>Email ID: ?@gmail.com</p>
                            </div>
                        </div>
                    </div>
                    <div class="span4" id="sixth-person">
                        <div class="thumbnail">
                            <img src="images/1st_3.jpg" width="400" height="190" alt="team 1">
                            <h3> Sample </h3>
                            <ul class="social">
                                <li>
                                    <a href="">
                                        <span class="icon-facebook-circled"></span>
                                    </a>
                                </li>
                                <li>
                                    <a href="">
                                        <span class="icon-twitter-circled"></span>
                                    </a>
                                </li>
                                <li>
                                    <a href="">
                                        <span class="icon-linkedin-circled"></span>
                                    </a>
                                </li>
                            </ul>
                            <div class="mask">
                                <h2>USN: 1MS15MCA_ _</h2>
                                <p>Batch: 2015-2018 </p>
								<p>Email ID: ? @gmail.com</p>
                            </div>
                        </div>
						
						
						
                    </div>
                </div>
				
				
				
				
				
				
				
            </div>
        </div>
        <!-- About us section end -->
		
		<div id="contact" class="contact">
		  <div class="triangle"></div></div>
		
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