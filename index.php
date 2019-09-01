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
		    <img src="images/Logo2.jpg" style="float:left" class ="logoImg">
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
				<li class="nav-item">
					<a class="nav-link" href="adminLogin.php">এডমিন</a>
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
	
	<div class ="middlePlace">
		<table class="table">
			<tbody>
				<tr>
					<th scope="col" style="background-color:white; width: 30%">
						<h6 style="color: blue; text-align: center"><b>প্রতিষ্ঠাতা</h6><hr>
						<img src="images/president.jpg" hspace="10" style="width: 90px; height: 100px; float:left">
						<div class="president">
							<p>বর্তমান যুগ বিজ্ঞান ও তথ্য-প্রযুক্তির উৎকর্ষের যুগ। আধুনিক বিশ্বের সকল ক্ষেত্রে বিজ্ঞান ও 
							তথ্য-প্রযুক্তি পালন করছে জাদুর কাঠির মতো বিস্ময়কর ভূমিকা। শিক্ষা ক্ষেত্রে বিজ্ঞান ও তথ্য-প্রযুক্তির ব্যবহার ইতোমধ্যেই বিশ্বব্যাপী বিরাট আলোড়নের সৃষ্টি করেছে। এ প্রেক্ষাপটে
							বাংলাদেশ সরকার এদেশের শিক্ষা ব্যবস্থা আধুনিকায়নের লক্ষ্যে বিজ্ঞান ও তথ্য-প্রযুক্তির ব্যবহারকে সর্বাধিক গুরুত্ব দিয়ে সকল শিক্ষা প্রতিষ্ঠানকে অভিন্ন নেটওয়ার্কের আওতায় নিয়ে 
							আসার ব্যাপারে ব্যাপক কর্মসূচি গ্রহণ করেছে।
							বাংলাদেশের শিক্ষা ব্যবস্থার আধুনিকায়নে সরকারের আহ্বানে সাড়া দিয়ে যে সকল শিক্ষা প্রতিষ্ঠান ইতোমধ্যে বিজ্ঞান ভিত্তিক শিক্ষা উপকরণ ও তথ্য-প্রযুক্তির ব্যবহার শুরু করেছে তাদের 
							মধ্যে ঢাকা রেসিডেনসিয়াল মডেল কলেজ অগ্রগণ্য। ঐতিহ্যবাহী এ শিক্ষা প্রতিষ্ঠানে ইতোমধ্যে স্মার্ট ক্লাস রুম স্থাপন করা হয়েছে। এছাড়াও কলেজের একাডেমিক ও প্রশাসনিক কর্মকাণ্ডকে 
							আরো গতিশীল ও তথ্য-প্রযুক্তি বান্ধব করার লক্ষ্যে একটি সমৃদ্ধ কলেজ ম্যানেজমেন্ট সফটওয়্যার সিস্টেম ও ওয়েব সাইট চালু করার কার্যক্রম সম্পন্ন করা হয়েছে।
							শিক্ষা ব্যবস্থার আধুনিকায়নের ক্ষেত্রে উল্লিখিত তথ্য-প্রযুক্তি কেন্দ্রিক কার্যক্রম সম্পন্ন করায়  আমি অত্র কলেজের বোর্ড অব গভর্নরস এর চেয়ারম্যান হিসেবে অত্যন্ত আনন্দিত। এসব কার্যক্রমের 
							মাধ্যমে ঢাকা রেসিডেনসিয়াল মডেল কলেজের একাডেমিক ও প্রশাসনিক কর্মকাণ্ড  আরো বেগবান হবে বলে আমি আশাবাদী। শিক্ষা ব্যবস্থার আধুনিকায়নের সাথে সম্পৃক্ত সকলকে জানাই আমার 
							আন্তরিক শুভেচ্ছা ও অভিনন্দন।
							</p><br>
							
						</div>
						
					</th>
					
					<th scope="col" style="background-color:white; width: 30%">
						<h6 style="color: blue; text-align: center"><b>প্রধান শিক্ষক</h6><hr>
						<img src="images/headSir.jpg" hspace="10" style="width: 90px; height: 100px;float:left">
						<div class="president">
							<p>বর্তমান যুগ বিজ্ঞান ও তথ্য-প্রযুক্তির উৎকর্ষের যুগ। আধুনিক বিশ্বের সকল ক্ষেত্রে বিজ্ঞান ও 
							তথ্য-প্রযুক্তি পালন করছে জাদুর কাঠির মতো বিস্ময়কর ভূমিকা। শিক্ষা ক্ষেত্রে বিজ্ঞান ও তথ্য-প্রযুক্তির ব্যবহার ইতোমধ্যেই বিশ্বব্যাপী বিরাট আলোড়নের সৃষ্টি করেছে। এ প্রেক্ষাপটে
							বাংলাদেশ সরকার এদেশের শিক্ষা ব্যবস্থা আধুনিকায়নের লক্ষ্যে বিজ্ঞান ও তথ্য-প্রযুক্তির ব্যবহারকে সর্বাধিক গুরুত্ব দিয়ে সকল শিক্ষা প্রতিষ্ঠানকে অভিন্ন নেটওয়ার্কের আওতায় নিয়ে 
							আসার ব্যাপারে ব্যাপক কর্মসূচি গ্রহণ করেছে।
							বাংলাদেশের শিক্ষা ব্যবস্থার আধুনিকায়নে সরকারের আহ্বানে সাড়া দিয়ে যে সকল শিক্ষা প্রতিষ্ঠান ইতোমধ্যে বিজ্ঞান ভিত্তিক শিক্ষা উপকরণ ও তথ্য-প্রযুক্তির ব্যবহার শুরু করেছে তাদের 
							মধ্যে রায়পুর আব্দুল খালেক তালুকদার উচ্চ বিদ্যালয় অগ্রগণ্য। ঐতিহ্যবাহী এ শিক্ষা প্রতিষ্ঠানে ইতোমধ্যে স্মার্ট ক্লাস রুম স্থাপন করা হয়েছে। এছাড়াও স্কুলের একাডেমিক ও প্রশাসনিক কর্মকাণ্ডকে 
							আরো গতিশীল ও তথ্য-প্রযুক্তি বান্ধব করার লক্ষ্যে একটি সমৃদ্ধ স্কুল ম্যানেজমেন্ট সফটওয়্যার সিস্টেম ও ওয়েব সাইট চালু করার কার্যক্রম সম্পন্ন করা হয়েছে।
							শিক্ষা ব্যবস্থার আধুনিকায়নের ক্ষেত্রে উল্লিখিত তথ্য-প্রযুক্তি কেন্দ্রিক কার্যক্রম সম্পন্ন করায়  আমি অত্র স্কুলের প্রধান শিক্ষক হিসেবে অত্যন্ত আনন্দিত। এসব কার্যক্রমের 
							মাধ্যমে রায়পুর আব্দুল খালেক তালুকদার উচ্চ বিদ্যালয় একাডেমিক ও প্রশাসনিক কর্মকাণ্ড  আরো বেগবান হবে বলে আমি আশাবাদী। শিক্ষা ব্যবস্থার আধুনিকায়নের সাথে সম্পৃক্ত সকলকে জানাই আমার 
							আন্তরিক শুভেচ্ছা ও অভিনন্দন।
							</p><br>
							
						</div>
					</th>
					
					
					<th scope="col" style="background-color:white; height: 100px; width: 60%; color: red">
						<h6 style="color: red; text-align: center"><b>নোটিস বোর্ড</h6><hr>
						<div class ="notice">
							<marquee direction = "up", scrollamount = "2">
								<div class = "noticTextView" style="text-align: left; margin-left: 10px">
									<?php
										$i = 1;
										while ($i <= 5):
									?>
									<p class="president">
									<?php
										$sql = "SELECT * FROM `noticelist` WHERE id = $number";
										$data = mysqli_query($con,$sql);
										while($row = $data->fetch_assoc()){
											echo "<a href='view.php?id=".$row['id']."' target='_blank'>".$row['title']."</a>";
										}
										$number = $number - 1;
										$i += 1;
									?>
									<br><br>
									<?php endwhile; ?>
									</p><br>
									
									
								</div>
							</marquee>
						</div>
						<br>
						<div class ="visitors">
							<h6 style="color: blue; text-align: center; padding-top:5px">ওয়েবসাইটে প্রবেশকারী</h6><hr>
							<table class="visitorsTable">
								<tbody>
									<tr>
										<td><b>আজকে প্রবেশকারীর সংখ্যাঃ  </td>
										<td style="padding-left:20px;">01</td>
									</tr>
									<tr>
										<td><b>এই সপ্তাহে প্রবেশকারীর সংখ্যাঃ </td>
										<td style="padding-left:20px;">10</td>
									</tr>
									<tr>
										<td><b>এই মাসে প্রবেশকারীর সংখ্যাঃ </td>
										<td style="padding-left:20px;">20</td>
									</tr>
								</tbody>
							</table>
						
						</div>
					</th>
				</tr>
			</tbody>
		</table>			
	</div>
	<br>
	<div class="usefulLinks">
	    <h6 style="color: blue; text-align: center; padding-top:5px"><b>গুরুত্বপূর্ণ লিংকসমুহ</h6>
	    <table class="table">
			<tbody>
				<tr>
					<th scope="col">
					    <ul style="list-style-type:circle">
							<li><a href="https://moedu.gov.bd/"><p style="color: red; font-size: 14px">শিক্ষা মন্ত্রনালয়</p></a></li>
							<li><a href="https://www.dhakaeducationboard.gov.bd/"><p style="color: red; font-size: 14px">ঢাকা শিক্ষাবোর্ড</p></a></li>
							<li><a href="http://www.dshe.gov.bd/"><p style="color: red; font-size: 14px">মাধ্যমিক ও উচ্চশিক্ষা অধিদপ্তর</p></a></li>
						</ul>
					</th>
					<th scope="col">
					    <ul style="list-style-type:circle;">
							<li><a href="http://www.nctb.gov.bd/"><p style="color: red; font-size: 14px">জাতীয় শিক্ষাক্রম ও পাঠ্যপুস্তক বোর্ড</p></a></li>
							<li><a href="https://www.teachers.gov.bd/"><p style="color: red; font-size: 14px">শিক্ষক বাতায়ন</p></a></li></li>
							<li><a href="http://www.dpe.gov.bd/"><p style="color: red; font-size: 14px">প্রাথমিক শিক্ষা অধিদপ্তর</p></a></li></li>
						</ul>
					</th>
				</tr>
			</tbody>
		</table>
					
	
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
