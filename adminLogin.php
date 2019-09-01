<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="shortcut icon" href="images/favicon.ico" />
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/> 
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>রায়পুর আব্দুল খালেক তালুকদার উচ্চ বিদ্যালয় </title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
	<script src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.2/css/bootstrap.min.css" integrity="sha384-y3tfxAZXuh4HwSYylfB+J125MxIs6mR5FOHamPBG064zB+AFeWH94NdvaCBm8qnd" crossorigin="anonymous">
    <!-- font awesome -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-T8Gy5hrqNKT+hzMclPo118YTQO6cYprQmhrYwIiQ/3axmI1hQomh7Ud2hPOy8SP1" crossorigin="anonymous">
	<link href="adminstyle.css" rel="stylesheet">
</head>
<body>
	<?php
		session_start();
		$_SESSION['message'] = '';
		$uname = '';
		$upass = '';
    ?>
	<div class="backPage" style="margin-left: 80%; padding: 5px; margin-top: 20px">
		<a style="background-color:green; padding: 10px; color:white " href="index.php">Home</a>
	</div>
	<div class="wrapper fadeInDown">
		<div id="formContent">
			<!-- Tabs Titles -->

			<!-- Icon -->
			<div class="fadeIn first">
			  <img src="images/logo1.jpg" id="icon" alt="User Icon" />
			</div>

			<!-- Login Form -->
			<form action="" method="post">
			  <input type="text" class="fadeIn second" name="usern" placeholder="user name" required>
			  <input type="text" class="fadeIn third" name="passwordu" placeholder="password" required>
			  <button type="submit" class="btn btn-primary" name="save" style="margin-top: 20px; margin-bottom: 30px">Login</button>
			</form>

			<!-- Remind Passowrd -->
			

		</div>
	</div>
	
	
	<?php  
		if (isset($_POST['save'])) {
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
				$_SESSION['entered'] = 'yes';
				header("Location: adminPage.php");
			}
			else {
				$_SESSION['message'] = 'Login Failed, username or password is incorrect !';
			}
		}
	?>
	<div id="formFooter" style="color:red">
	    <p><?php echo $_SESSION['message']; ?></p>
	</div>
	
	
	
</body>

</html>
