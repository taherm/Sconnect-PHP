<?php
$mysqli=new mysqli("localhost","root","","sc");
error_reporting(0);
	$userName = $_POST['logg'];
if ($userName==NULL)
{
    ?>

<script>
	alert('Username Cannot Be Empty');
	window.location='admin.php';
</script>   
<?php

}
	//$email = $_POST['ml'];
	$password =  $_POST['pass'];


if ($password==NULL)
{
    ?>

<script>
	alert('Password Cannot Be Empty');
	window.location='admin.php';
</script>   
<?php

}

$sql1="select * from teacher where uname='$userName'";	
$data1 = $mysqli->query($sql1);
$row=$data1->fetch_array();
if($row==0)
{


	$sql2 = "INSERT INTO teacher (uname,pass) VALUES ('$userName','$password')";
	$data = $mysqli->query($sql2);
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
	alert('Registration Failed Username already exist');
	window.location='admin.php';
</script>   
      
<?php
}

	?>
