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
<body>
    <div class="backPage" style="margin-left: 80%; padding: 5px; margin-top: 20px">
		<a style="background-color:green; padding: 10px; color:white " href="adminPage.php">এডমিন হোম পেইজ</a>
	</div>

	<div class="container">
		<div row class="uploadNotice justify-content-center" style="margin-left: 30%; margin-right: 40%; margin-top: 40px">
			<form action="" method='GET'>
				<div class="form-group">
					<label>শ্রেণীঃ</label>
					<select name="sclass" style="width: 200px; height: 30px">
						  <option value="৬ষ্ঠ"></option>
						  <option value="৬ষ্ঠ">৬ষ্ঠ</option>
						  <option value="৭ম">৭ম</option>
						  <option value="৮ম">৮ম</option>
						  <option value="৯ম">৯ম</option>
						 
					</select>
				</div>
				
				<div class="form-group" style="text-align:center">
				<button type="submit" class="btn btn-primary" name="find">Search</button>
				</div>

			</form>
		</div>
		<?php

		    $con = mysqli_connect("localhost","root","");
			mysqli_query($con,'SET CHARACTER SET utf8'); 
			mysqli_query($con,"SET SESSION collation_connection ='utf8_general_ci'");
			mysqli_select_db($con,'raypurschool'); 
			$class = 0;
			if (isset($_GET['find'])) {
				$class = $_GET['sclass'];
			
			}
			
			
			if (isset($_GET['delete'])) {
				$id = $_GET['delete'];
				
				$_SESSION['message'] = "Record has been deleted!";
				$_SESSION['msg_type'] = "success";
				
				$res= "DELETE FROM studentadmission WHERE id=$id";
				mysqli_query($con,$res);
			}
			
		?>
		<?php
			if(isset($_SESSION['message'])):  
		?>
		<div class="alert alert-<?=$_SESSION['msg_type']?>">
		    <?php
				echo $_SESSION['message'];
				unset($_SESSION['message']);
			?>
		</div>
		<?php endif; ?>
		
		<?php
			$mysqli = new mysqli('localhost', 'root', '', 'raypurschool') or die(mysqli_error(mysqli));
			$mysqli->query("SET CHARACTER SET utf8");
			$mysqli->query("SET SESSION collation_connection ='utf8_general_ci'");
			$result = $mysqli->query("SELECT * FROM studentadmission WHERE newClass = '$class'") or die($mysqli->error);
		?>
		<div  style="margin-left:0%; margin-right: 0%">
			<table class="table">
				<thead>
					<tr>
						<th>নাম</th>
						<th>শ্রেণী</th>
						<th>পুর্বের রোল</th>
						<th>বাবা</th>
						<th>মা</th>
						<th>গ্রাম</th>
						<th>পোস্ট অফিস</th>
						<th>উপজেলা</th>
						<th>জেলা</th>
						<th colspan="2">Action</th>
					</tr>
				</thead>
				<?php
					while($row = $result->fetch_assoc()): ?>
						<tr>
							<td><?php echo $row['name']; ?></td>
							<td><?php echo $row['newClass']; ?></td>
							<td><?php echo $row['preRoll']; ?></td>
							<td><?php echo $row['father']; ?></td>
							<td><?php echo $row['mother']; ?></td>
							<td><?php echo $row['village']; ?></td>
							<td><?php echo $row['postOffice']; ?></td>
							<td><?php echo $row['subDistrict']; ?></td>
							<td><?php echo $row['district']; ?></td>
							<td>
								<a href="admissionInsert.php?delete=<?php echo $row['id']; ?>" class="btn btn-danger">Delete</a>
							</td>
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
		
		
	</div>
</body>
</html>