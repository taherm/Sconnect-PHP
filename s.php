<?php
$username=$_POST['log'];
		$password=$_POST['pass'];
		
		$mysqli=new mysqli("localhost","root","","sc");
		
		$sql="select * from student where dob='$password' AND usn='$username'";
		$res=$mysqli->query($sql);
	

		if ($res->num_rows>0) {

		echo "welcome";
            session_start(); 
			$_SESSION['usn']=$username;
            $_SESSION['login_teacher']=$username; 
            // Initializing Session
			header("location:afterstudentlogin.php"); // Redirecting To Other Page
		}
		else {

?>
<script>
	alert('Wrong Username or Password');
	window.location='index.html';
</script>
<?php
            
}


	
		mysqli_close($mysqli); // Closing Connection
?>