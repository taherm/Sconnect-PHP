<?php
session_start(); 
	
//$username=$_POST['log'];
//		$password=$_POST['pass'];
		
		$mysqli=new mysqli("localhost","root","","sc");
		
		$sql="update student set dob='1999' where usn='1s'";
		$res=$mysqli->query($sql);
	

		if ($res->num_rows>0) {

		echo "welcome";
			//$_SESSION['login_admin']=$username; // Initializing Session
			//header("location:admin.php"); // Redirecting To Other Page
		}
		else {

?>
<script>
	alert('Wrong Username or Password');
	//window.location='loginnew.html';
</script>
<?php
            
}


	
		mysqli_close($mysqli); // Closing Connection
?>