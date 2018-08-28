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
	<li><a href="index.php?page=1">HOME</a></li>
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
		<div class="about">
			<h2>Baust Residential Student Hall Life</h2>
			<img src="images/post2.jpg" alt="MyImage"/>
		<p>Although the information provided on your application form will act as a guide in the allocation of accommodation, it may not always be possible or recommended to allocate according to your preferences. All information contained in the application will be dealt with and stored in confidence and will only be used to facilitate the allocation of accommodation. Once you have accepted an offer of accommodation, we may use the email address you provide to contact you about halls life for example: about events and opportunities in halls during the year.   
		</p>
		<p>
				Upon submitting the application form for accommodation your student status will be checked against our student records system for outstanding conditions, e.g. confirmation of A-level results, degree awards etc. Offers of accommodation are dependent upon all conditions of offer to study being met by you.
		</p>
		<p>
				The Liberty contract is held with Liberty Living plc and the Riverside Way contract is held with Winchester Student No 2 LLP instead of the University of Southampton. If you are allocated accommodation at either of these halls we share details of your application with them as relevant, for the purposes of offering you a place in accommodation and for no other purpose.  
		</p>
		
		</div>

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
	 <li><a href="index.php?page=1">Home</a></li>
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