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
	
	
	
	<div class="imgSlide" style="padding:0px; background-color:#E0FFFF;font-family:arial,helvetica,sans-serif,verdana,'Open Sans'">
			<script src="js/jssor.slider-27.5.0.min.js" type="text/javascript"></script>
			<script type="text/javascript">
			jssor_1_slider_init = function() {

				var jssor_1_SlideshowTransitions = [
				  {$Duration:500,$Delay:12,$Cols:10,$Rows:5,$Opacity:2,$Clip:15,$SlideOut:true,$Formation:$JssorSlideshowFormations$.$FormationStraightStairs,$Assembly:2049,$Easing:$Jease$.$OutQuad},
				  {$Duration:500,$Delay:40,$Cols:10,$Rows:5,$Opacity:2,$Clip:15,$SlideOut:true,$Easing:$Jease$.$OutQuad},
				  {$Duration:1000,x:-0.2,$Delay:20,$Cols:16,$SlideOut:true,$Formation:$JssorSlideshowFormations$.$FormationStraight,$Assembly:260,$Easing:{$Left:$Jease$.$InOutExpo,$Opacity:$Jease$.$InOutQuad},$Opacity:2,$Outside:true,$Round:{$Top:0.5}},
				  {$Duration:1600,y:-1,$Delay:40,$Cols:24,$SlideOut:true,$Formation:$JssorSlideshowFormations$.$FormationStraight,$Easing:$Jease$.$OutJump,$Round:{$Top:1.5}},
				  {$Duration:1200,x:0.2,y:-0.1,$Delay:16,$Cols:10,$Rows:5,$Opacity:2,$Clip:15,$During:{$Left:[0.3,0.7],$Top:[0.3,0.7]},$Formation:$JssorSlideshowFormations$.$FormationStraightStairs,$Assembly:260,$Easing:{$Left:$Jease$.$InWave,$Top:$Jease$.$InWave,$Clip:$Jease$.$OutQuad},$Round:{$Left:1.3,$Top:2.5}},
				  {$Duration:1500,x:0.3,y:-0.3,$Delay:20,$Cols:10,$Rows:5,$Opacity:2,$Clip:15,$During:{$Left:[0.2,0.8],$Top:[0.2,0.8]},$Formation:$JssorSlideshowFormations$.$FormationStraightStairs,$Assembly:260,$Easing:{$Left:$Jease$.$InJump,$Top:$Jease$.$InJump,$Clip:$Jease$.$OutQuad},$Round:{$Left:0.8,$Top:2.5}},
				  {$Duration:1500,x:0.3,y:-0.3,$Delay:20,$Cols:10,$Rows:5,$Opacity:2,$Clip:15,$During:{$Left:[0.1,0.9],$Top:[0.1,0.9]},$SlideOut:true,$Formation:$JssorSlideshowFormations$.$FormationStraightStairs,$Assembly:260,$Easing:{$Left:$Jease$.$InJump,$Top:$Jease$.$InJump,$Clip:$Jease$.$OutQuad},$Round:{$Left:0.8,$Top:2.5}}
				];

				var jssor_1_options = {
				  $AutoPlay: 1,
				  $SlideshowOptions: {
					$Class: $JssorSlideshowRunner$,
					$Transitions: jssor_1_SlideshowTransitions,
					$TransitionsOrder: 1
				  },
				  $ArrowNavigatorOptions: {
					$Class: $JssorArrowNavigator$
				  },
				  $BulletNavigatorOptions: {
					$Class: $JssorBulletNavigator$
				  }
				};

				var jssor_1_slider = new $JssorSlider$("jssor_1", jssor_1_options);

				/*#region responsive code begin*/

				var MAX_WIDTH = 980;

				function ScaleSlider() {
					var containerElement = jssor_1_slider.$Elmt.parentNode;
					var containerWidth = containerElement.clientWidth;

					if (containerWidth) {

						var expectedWidth = Math.min(MAX_WIDTH || containerWidth, containerWidth);

						jssor_1_slider.$ScaleWidth(expectedWidth);
					}
					else {
						window.setTimeout(ScaleSlider, 30);
					}
				}

				ScaleSlider();

				$Jssor$.$AddEvent(window, "load", ScaleSlider);
				$Jssor$.$AddEvent(window, "resize", ScaleSlider);
				$Jssor$.$AddEvent(window, "orientationchange", ScaleSlider);
				/*#endregion responsive code end*/
			};
		</script>
		<style>
			/*jssor slider loading skin spin css*/
			.jssorl-009-spin img {
				animation-name: jssorl-009-spin;
				animation-duration: 1.6s;
				animation-iteration-count: infinite;
				animation-timing-function: linear;
			}

			@keyframes jssorl-009-spin {
				from { transform: rotate(0deg); }
				to { transform: rotate(360deg); }
			}

			/*jssor slider bullet skin 053 css*/
			.jssorb053 .i {position:absolute;cursor:pointer;}
			.jssorb053 .i .b {fill:#fff;fill-opacity:0.5;}
			.jssorb053 .i:hover .b {fill-opacity:.7;}
			.jssorb053 .iav .b {fill-opacity: 1;}
			.jssorb053 .i.idn {opacity:.3;}

			/*jssor slider arrow skin 093 css*/
			.jssora093 {display:block;position:absolute;cursor:pointer;}
			.jssora093 .c {fill:none;stroke:#fff;stroke-width:400;stroke-miterlimit:10;}
			.jssora093 .a {fill:none;stroke:#fff;stroke-width:400;stroke-miterlimit:10;}
			.jssora093:hover {opacity:.8;}
			.jssora093.jssora093dn {opacity:.6;}
			.jssora093.jssora093ds {opacity:.3;pointer-events:none;}
		</style>
		<div id="jssor_1" style="position:relative;margin:0 auto;top:0px;left:0px;width:980px;height:380px;overflow:hidden;visibility:hidden;">
			<!-- Loading Screen -->
			<div data-u="loading" class="jssorl-009-spin" style="position:absolute;top:0px;left:0px;width:100%;height:100%;text-align:center;background-color:rgba(0,0,0,0.7);">
				<img style="margin-top:-19px;position:relative;top:50%;width:38px;height:38px;" src="img/spin.svg" />
			</div>
			<div data-u="slides" style="cursor:default;position:relative;top:0px;left:0px;width:980px;height:380px;overflow:hidden;">
				<div>
					<img data-u="image" src="img/011.jpg" />
				</div>
				<div>
					<img data-u="image" src="img/012.jpg" />
				</div>
				<div>
					<img data-u="image" src="img/013.jpg" />
				</div>
				<div>
					<img data-u="image" src="img/014.jpg" />
				</div>
				<div>
					<img data-u="image" src="img/015.jpg" />
				</div>
				<div>
					<img data-u="image" src="img/016.jpg" />
				</div>
			</div>
			<!-- Bullet Navigator -->
			<div data-u="navigator" class="jssorb053" style="position:absolute;bottom:12px;right:12px;" data-autocenter="1" data-scale="0.5" data-scale-bottom="0.75">
				<div data-u="prototype" class="i" style="width:16px;height:16px;">
					<svg viewbox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
						<path class="b" d="M11400,13800H4600c-1320,0-2400-1080-2400-2400V4600c0-1320,1080-2400,2400-2400h6800 c1320,0,2400,1080,2400,2400v6800C13800,12720,12720,13800,11400,13800z"></path>
					</svg>
				</div>
			</div>
			<!-- Arrow Navigator -->
			<div data-u="arrowleft" class="jssora093" style="width:50px;height:50px;top:0px;left:30px;" data-autocenter="2" data-scale="0.75" data-scale-left="0.75">
				<svg viewbox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
					<circle class="c" cx="8000" cy="8000" r="5920"></circle>
					<polyline class="a" points="7777.8,6080 5857.8,8000 7777.8,9920 "></polyline>
					<line class="a" x1="10142.2" y1="8000" x2="5857.8" y2="8000"></line>
				</svg>
			</div>
			<div data-u="arrowright" class="jssora093" style="width:50px;height:50px;top:0px;right:30px;" data-autocenter="2" data-scale="0.75" data-scale-right="0.75">
				<svg viewbox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
					<circle class="c" cx="8000" cy="8000" r="5920"></circle>
					<polyline class="a" points="8222.2,6080 10142.2,8000 8222.2,9920 "></polyline>
					<line class="a" x1="5857.8" y1="8000" x2="10142.2" y2="8000"></line>
				</svg>
			</div>
		</div>
		<script type="text/javascript">jssor_1_slider_init();</script>
		<!-- #endregion Jssor Slider End -->
	
	
	
	
	
	
	</div>
	
	<h5 style="text-align:center; color:red"><b>Videos</b></h5><hr class="hrr">
	
	<div class="videos">
		<div class="embed-responsive embed-responsive-16by9">
		  <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/mGAwseXZTZg?rel=0" allowfullscreen></iframe>
		</div><br><br>
		<div class="embed-responsive embed-responsive-16by9">
		  <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/zpOULjyy-n8?rel=0" allowfullscreen></iframe>
		</div><br><br>
		<div class="embed-responsive embed-responsive-16by9">
		  <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/zpOULjyy-n8?rel=0" allowfullscreen></iframe>
		</div><br><br>
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
