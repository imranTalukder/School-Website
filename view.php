<?php
	$id = isset($_GET['id'])? $_GET['id'] : "";
	
    $con = mysqli_connect("localhost","root","");
	mysqli_query($con,'SET CHARACTER SET utf8'); 
	mysqli_query($con,"SET SESSION collation_connection ='utf8_general_ci'");
	mysqli_select_db($con,'raypurschool'); 
	
	$result= "SELECT description FROM noticelist WHERE id = $id";
	$result = mysqli_query($con,$result);
	while($row=mysqli_fetch_array($result)) {
		$file = $row[description];
		header("Content-type: application/pdf");
		echo $file;
	}
?>




