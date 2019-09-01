<?php
    $con = mysqli_connect("localhost","root","");
	mysqli_select_db($con,'raypurschool');
    $sql = "SELECT description FROM noticelist WHERE id = 1";
	$result = mysqli_query($con,$sql);		
    while ($myrowsel = mysqli_fetch_array($result)) 
   {
        header("Content-Type: application/pdf");
        echo $myrowsel[description];
        exit();
   }
?>