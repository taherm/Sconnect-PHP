<?php
$mysqli=new mysqli("localhost","root","","sc");

	$userName = $_POST['log'];

if ($userName==NULL)
{
    ?>

<script>
	alert('USN Cannot Be Empty');
	window.location='admin.php';
</script>   
<?php

}




	$s = $_POST['sem'];
if ($s==NULL)
{
    ?>

<script>
	alert('Semester Cannot Be Empty');
	window.location='admin.php';
</script>   
<?php

}	



$password =  $_POST['pass'];
	
if ($password==NULL)
{
    ?>

<script>
	alert('DOB Cannot Be Empty');
	window.location='admin.php';
</script>   
<?php

}


function isItValidDate($date) {
 if(preg_match("/^(\d{2})-(\d{2})-(\d{4})$/", $date, $matches)) 
  {
  if(checkdate($matches[2], $matches[1], $matches[3]))
   {
    return true;
   }
  }
 }

if(isItValidDate($password)) 
{
}
else
{
    ?>

<script>
	alert('DOB is Invalid');
	window.location='admin.php';
</script>   
<?php

}

$sql1="select * from student where usn='$userName'";	
$data1 = $mysqli->query($sql1);
$row=$data1->fetch_array();
if($row==0)
{

$sql = "INSERT INTO student (usn,semester,dob) VALUES ('$userName','$s','$password')";
	$data = $mysqli->query($sql);
	if ($data)
	  {
          ?>
<script>
	alert('Registration Successful');
	window.location='admin.php';
</script>   

<?php
      }
}
	  else
	  {
		
      ?>
<script>
	alert('Registration Failed USN already exist');
	window.location='admin.php';
</script>   
      
<?php
}

	?>
