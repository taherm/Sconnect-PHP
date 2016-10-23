<?php
session_start();
		$username=$_POST['log'];
		$password=$_POST['pass'];
		
		$mysqli=new mysqli("localhost","root","","sc");
		
		$sql="select * from teacher where pass='$password' AND uname='$username'";
		$res=$mysqli->query($sql);
	

		if ($res->num_rows>0) 
		{
			echo "welcome $username";
			$_SESSION['login_teacher']=$username; // Initializing Session
			header("location:afterteacherlogin.php"); // Redirecting To Other Page
		}
		else
{

?>
<script>
	alert('Wrong Username or Password');
	window.location='index.html';
</script>
<?php
            
}


	
		mysqli_close($mysqli); // Closing Connection
?>