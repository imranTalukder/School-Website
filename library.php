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
	
	<div class="libraryMiddle">
	    <table class="table">
		    <tbody>
				<tr>
					<th style="background-color:white; text-align:center;width: 60%">
					    <h5>অনলাইন লাইব্রেরীতে  স্বাগতম</h5><hr>
						<p class="president">
						          রায়পুর আব্দুল খালেক তালুকদার উচ্চ বিদ্যালয় লাইব্রেরীতে স্বাগতম। শতাব্দী থেকে শতাব্দী ধরে মানব সভ্যতার সকল জ্ঞান জমা হয়ে আছে গ্রন্থের ভেতর। অন্তহীন জ্ঞানের আঁধার হলো গ্রন্থ, আর গ্রন্থের আবাসস্থল গ্রন্থাগার। 
							মানুষের হাজার বছরের লিখিত-অলিখিত সব ইতিহাস ঘুমিয়ে আছে একেকটি গ্রন্থাগারের ছোট ছোট তাঁকে। গ্রন্থাগার হলো কালের খেয়াঘাট, যেখান থেকে মানুষ সময়ের পাতায় ভ্রমণ করে। প্রাচীন শিলালিপি থেকে আধুনিক লিপির 
							গ্রন্থিক স্থান হলো গ্রন্থাগার। একটি গ্রন্থাগার মানব জীবনকে পাল্টে দেয়। গ্রন্থ কিবা গ্রন্থাগার আত্মার খোরাক যোগায়। গ্রন্থাগার হলো শ্রেষ্ঠ আত্মীয় যার সাথে সবসময় ভালো সম্পর্ক থাকে। আর জ্ঞানচর্চা ও বিকাশের ক্ষেত্রে গ্রন্থাগারের ভূমিকা অনন্য।
							গ্রন্থাগার একটি জাতির বিকাশ ও উন্নতির মানদন্ড। বই পড়ার অভ্যাস গড়ে তোলা ছাড়া জাতীয় চেতনার জাগরণ হয় না। আর তাই গ্রন্থাগারের প্রয়োজনীয়তা অপরিসীম। পৃথিবীর বহুদেশ পাঠকের চাহিদা পূরণের জন্য গড়ে তুলেছে অগণিত গ্রন্থাগার। 
							শিক্ষার আলো বঞ্চিত কোনো জাতি পৃথিবীতে মাথা উঁচু করে দাঁড়াতে পারেনি। শিক্ষার বাতিঘর বলা হয় গ্রন্থাগারকে। গ্রন্থাগার ছাড়া কোনো সমাজ বা রাষ্ট্র তার নাগরিককে পরিপূর্ণ শিক্ষার অধিকার নিশ্চিত করতে পারে না। গ্রন্থাগারের প্রয়োজনীয়তা তাই প্রতিটি সমাজে অনিবার্য।
						</p>
					</th>
					<th style="width: 20px">
					
					</th>
					<th style="background-color: white; text-align:center">
					    <div class="libraryHour">
						    <h6 style="margin-left:40%">লাইব্রেরীর সময়সূচী</h6><hr>
							<ul style="list-style-type: circle">
								<li>শনিবার:<span style="display:inline-block; width: 8%"></span>১০:০০ AM - ০৫:০০ PM</li>
								<li>রবিবার:<span style="display:inline-block; width: 9%"></span>১০:০০ AM - ০৫:০০ PM</li>
								<li>সোমবার:<span style="display:inline-block; width: 6%"></span>১০:০০ AM - ০৫:০০ PM</li>
								<li>মঙ্গলবার:<span style="display:inline-block; width: 5%"></span>১০:০০ AM - ০৫:০০ PM</li>
								<li>বূধবার:<span style="display:inline-block; width: 10%"></span>১০:০০ AM - ০৫:০০ PM</li>
								<li>বৃহঃবার:<span style="display:inline-block; width: 8%"></span>১০:০০ AM - ০১:০০ PM</li>
							</ul>
						
						</div>
					</th>
				</tr>
			</tbody>
		</table>
	
	</div>
	
	<div class="pdfSpace">
	    <h5>বই এবং লেখকের নাম বক্স এ লিখুন</h5><hr><br><br>
		<p style="margin-right:8%"> 
			বইয়ের নামঃ<span style="display:inline-block; width: 25px"></span>
			<select name="book" style="height:35px; width: 200px; background-color:#E6E6FA">
			  <option value="hh">হাজার বছর ধরে</option>
			  <option value="saab">শ্রীকান্ত</option>
			  <option value="mercedes">Mercedes SLK</option>
			  <option value="audi">Audi TT</option>
			</select>
			<br><br>লেখকের নামঃ<span style="display:inline-block; width: 10px"></span>
			<select name="author" style="height:35px; width: 200px; background-color:#E6E6FA">
			  <option value="volvo">জহির রায়হান</option>
			  <option value="saab">শরৎচন্দ্র চট্টোপাধ্যায়</option>
			  <option value="mercedes">Mercedes SLK</option>
			  <option value="audi">Audi TT</option>
			</select>
		</p>
		<br><br><input class="btn btn-primary" style="text-align:center" type="submit" value="পড়ুন">
	</div><br><br>
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
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
