
<?php 
    error_reporting('ERROR');
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
	       $construct1 = " SELECT * FROM data WHERE $construct ";
		   $run=$mysqli->query($construct1); 
		   $foundnum=$run->num_rows;
	       if ($foundnum == 0) 
		      echo "<div align=center class=error style=color:red >No results Found</div>";
	       else 
		   { 		
        
		     while($row=$run->fetch_array())
             {
     echo "<a href='sconnect/uploads/$row[4]'>$row[4]</a><br>";
                 
             }
           }  
    }
?>
