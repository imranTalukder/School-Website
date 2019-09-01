<?php 
	session_start();
	if($_SESSION['entered']){
	
	}
	else {
		header("Location: adminLogin.php");
	}
?>


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
	<link href="style.css" rel="stylesheet">
</head>
<body class="backG">
    <div class = "topBar">
	    <div class= "schoolName">
		    <img src="images/logo2.jpg" style="float:left" class ="logoImg">
			<br>
			<div style="margin-left:23%">
				<h1>রায়পুর আব্দুল খালেক তালুকদার উচ্চ বিদ্যালয় </h1>
				<br>
				<h6 style="margin-left: 23%">শরীয়তপুর সদর, শরীয়তপুর</h6>
				<h4 style="margin-left: 23%">স্থাপিত: ১৯৮৬ ইং</h4>
			</div>
		</div>
		
	</div>
	<div class ="menuList">
		<nav class="navbar navbar-expand-sm justify-content-center">
			<ul class="navbar-nav">
				<li class="nav-item">
					<a class="nav-link" href="index.php">হোম</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="notificationInsert.php">নোটিফিকেশান ইনসার্ট</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="admissionInsert.php">ভর্তি কার্যক্রম</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="boardInsert.php">বোর্ড ইনপুট</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="idCard.php">আইডি কার্ড</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="library.php">লাইব্রেরী</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="gallery.php">ফটো-গ্যালারী </a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="management.php">পরিচালনা পরিষদ</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="logout.php">Logout</a>
				</li>
			</ul>
		</nav>
	</div>
	
	<?php require_once 'process.php'; ?>
	<div class="container">
		<?php
			$mysqli = new mysqli('localhost', 'root', '', 'crud') or die(mysqli_error(mysqli));
			$result = $mysqli->query("SELECT * FROM data") or die($mysqli->error);
			?>
			<div class="row justify-content-center">
				<table class="table">
					<thead>
						<tr>
							<th>Name</th>
							<th>Location</th>
							<th colspan="2">Action</th>
						</tr>
					</thead>
					<?php
						while($row = $result->fetch_assoc()): ?>
							<tr>
								<td><?php echo $row['name']; ?></td>
								<td><?php echo $row['location']; ?></td>
								<td></td>
							</tr>
						<?php endwhile; ?>
				</table>
			</div>
			<?php
			
			
			function pre_r( $array) {
				echo '<pre>';
				print_r($array);
				echo '</pre>';
			}
		?>


		
		<div row class="uploadNotice justify-content-center" style="margin-left: 30%; margin-right: 40%">
			<form action="process.php" method="post">
				<div class="form-group">
				<label>Name</label>
				<input type="text" name="name" class="form-control" value="Enter your name"/>
				</div>
				<div class="form-group">
				<label>Location</label>
				<input type="text" name="location" class="form-control" value="Enter your location"/>
				</div>	
				<div class="form-group">
				<button type="submit" class="btn btn-primary" name="save">Save</button>
				</div>

			</form>
		</div>
	</div>
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	<footer class="footer">
		<div class="container-fluid">
			<table class="table">
				<tbody>
					<tr>
						<th scope="col">
							<h6 style="color: white">সামাজিক যোগাযোগ মাধ্যম</h6><br>
							<a href="https://www.facebook.com/Raypur-AKT-High-School-500563296664329/"><img src="images/facebook3.png" style="width:40px;background-color: navy; height:40px" alt="Flower"></a>
						</th>
						<th scope="col">
							
							<h6 style="color: white">যোগাযোগের ঠিকানা</h6>
							<font size="1" style="color: white">গ্রামঃ রায়পুর,  পোস্টকোডঃ ৮০০২, ইউনিয়নঃ চন্দ্রপুর, উপজেলাঃ শরীয়তপুর সদর, জেলাঃ শরীয়তপুর</font><br>
							<font size="1" style="color: white">ফোনঃ +8801926651990, ফ্যাক্সঃ +8801926651990</font><br>
							<font size="1" style="color: white">ওয়েবসাইটঃ www.rakths.edu.bd</font><br>
							<font size="1" style="color: white">ইমেইলঃ www.info@rakths.edu.bd</font><br>
						</th>
						<th scope="col">
							
							<p><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3665.3355690815356!2d90.24217511413264!3d23.267253512979373!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!
							1s0x37557394c1e891f3%3A0x745e18f834acf6e9!2sRaypur+A.K.T.+High+School!5e0!3m2!1sen!2sbd!4v1556013387269!5m2!1sen!2sbd"
							width="150" height="150" frameborder="0" style="border:0" allowfullscreen></iframe>
							</p>
							
						</th>
					</tr>
				</tbody>
			</table>
		</div>
	</footer>
</body>

</html>
