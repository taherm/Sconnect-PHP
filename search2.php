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
				
				<center>
				<table width="80%" border="4px solid">
					<tr>
					<th colspan="6"><h2>Search Results</h2></th>
					</tr>
					<tr>
					<th>File Name</th>
					<th>Sem</th>
					<th>Info</th>
					<th>Uploader</th>
					<th>Date</th>
					<th>View</th>
					</tr>
						<?php 
    error_reporting(0);
$mysqli=new mysqli("localhost","root","","sc");
	$search = $_POST [ 'search' ]; 
	        if( strlen( $search ) <= 2 ) 
				echo "<div align=center class=error style=color:red >search too short</div>";
	        else
			{
             $search_exploded = explode ( " ", $search ); 
	         $x = 0; 
			 $construct = "";
	        foreach( $search_exploded as $search_each ) 
	        { 
	         $x++; 
			 //$construct = ""; 
	         if( $x == 1 ) 
			   $construct .="concat(file) LIKE '%$search_each%'"; 
		     else $construct .="AND concat(file) LIKE '%$search_each%'"; 
	        } 
                
            session_start(); 
							$u=$_SESSION['usn'];
							$mysqli=new mysqli("localhost","root","","sc");
							$sql2="SELECT semester from student where usn=$u";
							$result=$mysqli->query($sql2);
							$row=$result->fetch_array();
							$s=$row[0];    
                
                
	       $construct1 = " SELECT * FROM books WHERE sem=$s and $construct ";
		   $run=$mysqli->query($construct1); 
		   $foundnum=$run->num_rows;
	       if ($foundnum == 0) 
		      echo "<div align=center class=error style=color:red >No results Found</div>";
	       else 
		   { 		
        
		     while($row=$run->fetch_array())
             {
								

						  ?>
								<tr>
								<td><?php echo $row['file'] ?></td>
								<td><?php echo $row[0] ?></td>
								<td><?php echo $row[1] ?></td>
								<td><?php echo $row[2] ?></td>
								<td><?php echo $row[3] ?></td>
								<td><a href="uploads/<?php echo $row['file'] ?>" target="_blank">View File</a></td>
								</tr>
								<?php
						 }
           }
            }		 ?>
                    	
				</table>
				</center>
					
				
				
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