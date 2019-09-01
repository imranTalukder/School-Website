<?php  
	$uname = $_POST['usern'];
	$upass = $_POST['passwordu'];
	
	$con = mysqli_connect("localhost","root","");
	
	$uname = stripcslashes($uname);
	$upass = stripcslashes($upass);
	$uname = mysqli_real_escape_string($con,$uname);
	$upass = mysqli_real_escape_string($con,$upass);

	
	mysqli_select_db($con,'raypurschool'); 
	
	$checkout = mysqli_query($con,"SELECT * FROM admintable WHERE userName = '$uname' AND userPass = '$upass'")
		or die(mysqli_error($con));
		
		
	$number=mysqli_num_rows($checkout);
	if($number == 1) {
		header("Location: adminPage.php");
    }
	else {
		header("Location: adminLogin.php");
	}
?>