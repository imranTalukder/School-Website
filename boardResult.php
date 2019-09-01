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
					<a class="nav-link" href="index.php">বিদ্যালয়</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="administration.php">প্রশাসনিক -কার্যক্রম</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="academicResult.php">একাডেমিক-রেজাল্ট</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="boardResult.php">বোর্ড-রেজাল্ট</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="admission.php">ভর্তি</a>
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
					<a class="nav-link" href="teachers.php">শিক্ষকমন্ডলী</a>
				</li>
			</ul>
		</nav>
	</div>
	<?php
			$con = mysqli_connect("localhost","root","");
			mysqli_query($con,'SET CHARACTER SET utf8'); 
			mysqli_query($con,"SET SESSION collation_connection ='utf8_general_ci'");
			mysqli_select_db($con,'raypurschool'); 
			
			
			$query = mysqli_query($con,"SELECT * FROM noticelist");
			$number=mysqli_num_rows($query);
			
			
			$sql = "SELECT * FROM `noticelist` WHERE id = $number";
			$data = mysqli_query($con,$sql);
			
	?>
	
	<marquee behavior="scroll" direction="left" style="color: red; background-color: white; padding-bottom">
	    <?php while($row = $data->fetch_assoc()): ?>
		    <?php echo "<a href='view.php?id=".$row['id']."' target='_blank'>".$row['title']."</a>"; ?>
		<?php endwhile; ?>
	
	</marquee>
	
	
	
	
	
	<div class="pdfSpace">
	    <p>রায়পুর আব্দুল খালেক তালুকদার উচ্চ বিদ্যালয়ের বোর্ড পরীক্ষার ফলাফল জানতে মাধ্যমিক পরীক্ষার নাম ও পাশের সন বক্স এ লিখুন ।</p><hr><br><br>
		<form action="boardResultView.php" method="post">
			<p style="margin-right:8%"> 
				পরীক্ষাঃ<span style="display:inline-block; width: 40px"></span>
				<select name="exam" style="height:35px; width: 200px; background-color:#E6E6FA">
				  <option value="jsc">JSC</option>
				  <option value="ssc">SSC</option>
				</select>
				<br><br><br><br>পাশের সনঃ<span style="display:inline-block; width: 10px"></span>
				<select name="year" style="height:35px; width: 200px; background-color:#E6E6FA">
				  <option value="2019">2019</option>
				  <option value="2018">2018</option>
				  
				</select>
			</p>
			<br><br><button type="submit" class="btn btn-primary" name="save">Submit</button>
		</form>
		
	</div><br>
	<div class="resultLink" style="text-align: center; margin-right: 10%; margin-left: 10%">
		<p><a style="color:white; background-color: green; padding: 10px" href="http://www.educationboardresults.gov.bd/" target="iframe_a">ব্যক্তিগত রেজাল্টের জন্য এখানে ক্লিক করুন</a></p><hr>

		<iframe height="500px" width="100%" src="" name="iframe_a" style="border:2px solid #E6E6FA"></iframe>
		
	</div><br>
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
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
