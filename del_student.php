<?php
$mysqli=new mysqli("localhost","root","","sc");
error_reporting(0);
	$userName = $_POST['log'];
if ($userName==NULL)
{
    ?>

<script>
	alert('Username Cannot Be Empty');
	window.location='admin.php';
</script>   
<?php

}
$sql1="select * from student where usn='$userName'";	
$data1 = $mysqli->query($sql1);
$row=$data1->fetch_array();
if($row!=0)
{
$sql2="delete from student where usn='$userName'";
$data2 = $mysqli->query($sql2);
	  if ($data2!=0)
	  {
          ?>
<script>
	alert('Deletion Sucessful');
	window.location='admin.php';
</script>   

<?php
      }
}
    else
	  {
		
      ?>
<script>
	alert('Deletion UnSucessfull');
	window.location='admin.php';
</script>   
      
<?php
}

	?>

	

	