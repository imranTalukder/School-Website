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
		<div row class="uploadNotice justify-content-center" style="margin-left: 30%; margin-right: 40%; margin-top: 10px">
			<form action="" method='GET'>
				<div class="form-group">
				<label>পরীক্ষার নামঃ</label><br>
					<select name="eexam" style="height:35px; width: 300px; background-color:white">
						  <option value="jsc">JSC</option>
						  <option value="ssc">SSC</option>
					</select>
				</div>
				<div class="form-group">
				<label>সালঃ</label>
				<input type="number" name="yyear" value="2019" class="form-control" required/>
				</div>	
				<label>ফাইলঃ</label>
				<input type="file" name="file" class="form-control" required/>
				</div><br>
				<div class="form-group">
				<button style="margin-left: 40%" type="submit" class="btn btn-primary" name="save">Save</button>
				</div>

			</form>
		</div>
		<?php

		    $con = mysqli_connect("localhost","root","");
			mysqli_query($con,'SET CHARACTER SET utf8'); 
			mysqli_query($con,"SET SESSION collation_connection ='utf8_general_ci'");
			mysqli_select_db($con,'raypurschool'); 
			if (isset($_GET['save'])) {
				$exam = $_GET['eexam'];
				$year = $_GET['yyear'];
				$file = $_GET['file'];
				$_SESSION['message'] = "Record has been saved!";
				$_SESSION['msg_type'] = "success";
				
				if($exam == 'jsc') {
					$res= "INSERT INTO `jsc` (`year`, `result`) VALUES ('$year', '$file')";
				
				}
				else if($exam == 'ssc') {
					$res= "INSERT INTO `ssc` (`year`, `result`) VALUES ('$year', '$file')";
				
				}
				
				
				mysqli_query($con,$res);
			}
			if (isset($_GET['year']) && isset($_GET['exam'])) {
				$dyear = $_GET['year'];
				$dexam = $_GET['exam'];
				
				$_SESSION['message'] = "Record has been deleted!";
				$_SESSION['msg_type'] = "success";
				
				
				
				if($dexam == 'jsc') {
					$res= "DELETE FROM jsc WHERE year=$dyear";
				
				}
				else if($dexam == 'ssc') {
					$res= "DELETE FROM ssc WHERE year=$dyear";
				
				}
				
				
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
			$result = $mysqli->query("SELECT * FROM jsc") or die($mysqli->error);
			$result2 = $mysqli->query("SELECT * FROM ssc") or die($mysqli->error);

		?>
		<div class="row justify-content-center" style="margin-left:15%; margin-right: 10%">
			<table class="table">
				<thead>
					<tr>
						<th>Exam</th>
						<th>Year</th>
						<th colspan="2">Action</th>
					</tr>
				</thead>
				<?php
					while($row = $result->fetch_assoc()): ?>
						<tr>
							<td><?php echo "JSC"; ?></td>
							<td><?php echo $row['year']; ?></td>
							<td>
								<a href="boardInsert.php?year=<?php echo $row['year']; ?>&exam=jsc" class="btn btn-danger">Delete</a>
							</td>
						</tr>
					<?php endwhile; ?>
			</table>
		</div><br>
		<div class="row justify-content-center" style="margin-left:15%; margin-right: 10%">
			<table class="table">
				<thead>
					<tr>
						<th>Exam</th>
						<th>Year</th>
						<th colspan="2">Action</th>
					</tr>
				</thead>
				<?php
					while($row = $result2->fetch_assoc()): ?>
						<tr>
							<td><?php echo "SSC"; ?></td>
							<td><?php echo $row['year']; ?></td>
							<td>
								<a href="boardInsert.php?year=<?php echo $row['year']; ?>&exam=ssc" class="btn btn-danger">Delete</a>
							</td>
						</tr>
					<?php endwhile; ?>
			</table>
		</div>
		
		
	</div>
</body>
</html>