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
	<div class="maincontent clear meee">
		

			        	<ul>
			        		<li class="btn mybtn"><a class="btn btn-success" href="registration.php">New Student Registration</a></li>
			        		<li class="btn mybtn"><a class="btn btn-success" href="dept.php">Add New Department</a></li>
			        		<li class="btn mybtn"><a class="btn btn-success" href="hall.php">Add New Hall</a></li>
			        		<li class="btn mybtn"><a class="btn btn-success" href="batch.php">Add New Batch</a></li>
			        	</ul>
			        
    
        
			<?php
			include 'db_connect.php';
			    $sql = "SELECT * FROM mydb ORDER BY student_id ASC";
			    $query = mysqli_query($con,$sql);

				$count = mysqli_num_rows($query);
			    if ($count  != 0 ) {
			    
			    while ($row = mysqli_fetch_assoc($query))
			    {
			        $student_detail[] = $row;
			    }
			    $i = 0;
			?>
			<table class="table">
				<tr class="success">
					<td>SN</td>
					<td>Room</td>
					<td>Student ID</td>
					<td>Student Name</td>
					<td>Department</td>
					<td>Batch</td>
					<td>Hall Name</td>
					<td>Gender</td>
					<td>Contact Number</td>
					<td>Action</td>
				</tr>
				<?php foreach ($student_detail as $studest) {
				        $i = $i+1;
				    ?>
				<tr>
					<td><?php echo $i; ?></td>
					<td><?php echo $studest['room_no']; ?></td>
					<td><?php echo $studest['student_id']; ?></td>
					<td><?php echo $studest['student_name']; ?></td>
					<td><?php echo $studest['department']; ?></td>
					<td><?php echo $studest['batch']; ?></td>
					<td><?php echo $studest['hall_name']; ?></td>
					<td><?php echo $studest['gender']; ?></td>
					<td><?php echo $studest['phone_number']; ?></td>
					<td>
						<a href="update.php?id=<?php echo $studest['student_id']; ?>">Update</a>
					</td>
					<td>
					<a href="delete.php?id=<?php echo $studest['student_id']; ?>">Delete</a>

					</td>
				</tr><?php }} else{

				?>

				<tr class="success">
					<hr>
					SORRY DATA NOT AVAILABLE
					<hr>
				</tr>

				<?php

				} ?>
			</table>		
			
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