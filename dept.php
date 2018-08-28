<!DOCTYPE html>
<html>
<head>
	<title>BAUST</title>
<link rel="stylesheet" href="css/nivo-slider.css" type="text/css" media="screen" />
<link rel="stylesheet" type="text/css" href="style.css">
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js" type="text/javascript"></script>
<script src="js/jquery.nivo.slider.js" type="text/javascript"></script>

<script type="text/javascript">
$(window).load(function() {
	$('#slider').nivoSlider({
		effect:'random',
		slices:10,
		animSpeed:500,
		pauseTime:2200,
		startSlide:0, //Set starting Slide (0 index)
		directionNav:false,
		directionNavHide:false, //Only show on hover
		controlNav:false, //1,2,3...
		controlNavThumbs:false, //Use thumbnails for Control Nav
		pauseOnHover:true, //Stop animation while hovering
		manualAdvance:false, //Force manual transitions
		captionOpacity:0.8, //Universal caption opacity
		beforeChange: function(){},
		afterChange: function(){},
		slideshowEnd: function(){} //Triggers after all slides have been shown
	});
});
</script>
</head>
<body>
<div class="headersection templete clear">
<div class="logo">
	<img src="images/logo.png" alt="Logo"/>
	<h2>Bangladesh Army University Of Science And Technology</h2>
	<p>Baust Residential Student Information</p>
</div>
<div class="social">
	<a href="#"><img src="images/social/facebook.png" alt="Facebook"/></a>
	<a href="#"><img src="images/social/twitter.png" alt="Twitter"/></a>
	<a href="#"><img src="images/social/skype.png" alt="Skype"/></a>
	<a href="#"><img src="images/social/youtube.png" alt="youtube"/></a>
	<a href="#"><img src="images/social/googleplus.png" alt="Googleplus"/></a>
	<a href="#"><img src="images/social/linkedin.png" alt="LinkedIn"/></a>
</div>
</div>
<div class="navsection templete clear">
<ul>
	<li><a href="admin.php">HOME</a></li>
	<li><a href="halllife.php">HALL LIFE</a></li>
	<li><a href="facilities.php">HALL FACILITIES</a></li>
	<li><a href="rules.php">RULES & REGULATIONS</a></li>
	<li><a href="contact.php">CONTACT US</a></li>
</ul>
</div>
<div class="slidersection templete clear">
	<div id="slider">
            <a href="#"><img src="images/slideshow/01.jpg" alt="nature 1" title="ABBUS UDDIN AHMED HALL BAUST" /></a>
            <a href="#"><img src="images/slideshow/02.jpg" alt="nature 2" title="TARAMON BIBI HALL BAUST" /></a>
            <a href="#"><img src="images/slideshow/03.jpg" alt="nature 3" title="BAUST MALE HALL" /></a>
             <a href="#"><img src="images/slideshow/04.jpg" alt="nature 3" title="Bir Protik Taramon Bibi Hall" /></a>
              <a href="#"><img src="images/slideshow/05.jpg" alt="nature 3" title="Abbus Uddin Ahmed Hall" /></a>
          
        </div>
</div>
<div class="contentsection contemplete clear">
	<div class="maincontent clear">

			        	<form class="form-horizontal background-form" method="post" action="">
	<div class="form-group">
		<label for="inputEmail3" class="control-label">Department Name:</label>
		<div class="">
	
	
		  <input type="text" class="form-control" name="department_name">
		</div>
	</div>
	<div class="form-group">
		<div class="col-sm-offset-2 col-sm-10">
		  <button type="submit" class="btn btn-success">Registration</button>
		</div>
	</div>

<?php 
include 'db_connect.php';

	if ($_SERVER['REQUEST_METHOD'] == "POST") {

		$department_name  = validation($_POST["department_name"]);
		

		if ($con) {

			$query = "INSERT INTO  dept_name (department_name) VALUES
			('$department_name')";

			if (mysqli_query($con, $query)) {
				header('Location:admin.php');
			} else {
				echo "Sorry Something Wrong !!";
			}

		}


	}

	function validation($value)
	{
		$value = trim($value);
		$value = stripcslashes($value);
		$value = htmlspecialchars($value);
		return $value;
	}
?>
	</div>
	<div class="sidebar clear">
		<div class="samesidebar clear">
			<h2>Notice Board</h2>
		<ul>
			<li><a href="ntc1.php">Notice Title one will be go here.</a></li>
			<li><a href="ntc1.php">Notice Title two will be go here.</a></li>
			<li><a href="ntc1.php">Notice Title three will be go here.</a></li>
			<li><a href="ntc1.php">Notice Title four will be go here.</a></li>
			<li><a href="ntc1.php">Notice Title five will be go here.</a></li>
			<li><a href="ntc1.php">Notice Title six will be go here.</a></li>
		</ul>
		</div>
	</div>
</div>
<div class="footersection templete clear">
<div class="footermenu">
<ul>
	<li><a href="admin.php">Home</a></li>
	<li><a href="halllife.php">Hall Life</a></li>
	<li><a href="facilities.php">Hall Facilities</a></li>
	<li><a href="rules.php">Rules & Regulations</a></li>
	<li><a href="contact.php">Contact Us</a></li>
</ul>
</div>
<p>&copy; Copyright Baust</p>
	
</div>

<script type="text/javascript" src="js/scrolltop.js"></script>
</body>
</html>