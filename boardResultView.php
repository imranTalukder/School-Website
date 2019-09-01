<?php
	if (isset($_POST['save'])) {
		$exam = $_POST['exam'];
		$year = $_POST['year'];
		$con = mysqli_connect("localhost","root","");
		mysqli_query($con,'SET CHARACTER SET utf8'); 
		mysqli_query($con,"SET SESSION collation_connection ='utf8_general_ci'");
		mysqli_select_db($con,'raypurschool'); 
		if($exam == 'jsc') {
			$result= "SELECT result FROM jsc WHERE year = $year";
		}
		if($exam == 'ssc') {
			$result= "SELECT result FROM ssc WHERE year = $year";
		}
		$result = mysqli_query($con,$result);
		while($row=mysqli_fetch_array($result)) {
			$file = $row[result];
			header("Content-type: application/pdf");
			echo $file;
		}
	}
?>