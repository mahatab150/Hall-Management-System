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

			        <div class="fullscreen background">
    <div class="content-a container">
        <div class="content-b">


<form class="form-horizontal background-form" method="post" action="">
	<div class="form-group">
		<label for="inputEmail3" class="control-label">Room No:</label>
		<div class="">
	
	
		  <input type="text" class="form-control" name="room_no">
		</div>
	</div>

	<div class="form-group">
		<label   class="control-label">ID No:</label>
		<div class="">
		  <input type="number" class="form-control" name="student_id">
		</div>
	</div>

	<div class="form-group">
		<label  class="control-label">Student Name:</label>
		<div class="">
		  <input type="text" class="form-control" name="student_name" required="1">
		</div>
	</div>

	<div class="form-group">
		<label   class="control-label">Contact Number:</label>
		<div class="">
		  <input type="phone" class="form-control" name="phone_number">
		</div>
	</div>

	<?php
	include 'db_connect.php';
		$show_dept = "SELECT * FROM dept_name";
		$result1 = mysqli_query($con,$show_dept);
		$count = mysqli_num_rows($result1);
		$depertments = array();
		if ($count) {
			while ($row = mysqli_fetch_assoc($result1)) {
				$depertments[] = $row;
			}
		}

		$show_batch = "SELECT * FROM batch";
		$batch_data = mysqli_query($con,$show_batch);
		$batchcount = mysqli_num_rows($batch_data);
		$batchs = array();
		if ($batchcount) {
			while ($rows = mysqli_fetch_assoc($batch_data)) {
				$batchs[] = $rows;
			}
		}

		$show_hall = "SELECT * FROM hall";
		$hall_data = mysqli_query($con,$show_hall);
		$hallcount = mysqli_num_rows($hall_data);
		$halls = array();
		if ($hallcount) {
			while ($rowss = mysqli_fetch_assoc($hall_data)) {
				$halls[] = $rowss;
			}
		}
	?>

	<div class="form-group">
		<label   class="control-label">Department:</label>
		<div class="">
		  	<select placeholder="select your beverage" name="department">
				<option >SELECT DEPERTMENT</option>
			<?php foreach ($depertments as $key) { ?>
				<option value="<?php echo $key['department_name']; ?>"><?php echo $key['department_name']; ?></option>
			<?php } ?>
			</select>
		</div>
	</div>

	<div class="form-group">
		<label   class="control-label">Batch:</label>
		<div class="">
		  	<select placeholder="select your beverage" name="batch">
				<option >SELECT BATCH</option>
			<?php foreach ($batchs as $batch) { ?>
				<option value="<?php echo $batch['batch_no']; ?>"><?php echo $batch['batch_no']; ?></option>
			<?php } ?>
			</select>
		</div>
	</div>

	<div class="form-group">
		<label   class="control-label">Hall:</label>
		<div class="">
		  	<select placeholder="select your beverage" name="hall_name">
				<option >SELECT HALL</option>
			<?php foreach ($halls as $hall) { ?>
				<option value="<?php echo $hall['hall_name']; ?>"><?php echo $hall['hall_name']; ?></option>
			<?php } ?>
			</select>
		</div>
	</div>

	

	<div class="form-group">
		<label   class="control-label">Gender :</label>
		<div class="">
			<input type="radio" value="Male" name = "gender" checked>Male
			<input type="radio" value="Female" name = "gender">Female
		</div>
	</div>



	<div class="form-group">
		<div class="col-sm-offset-2 col-sm-10">
		  <button type="submit" class="btn btn-success">Registration</button>
		</div>
	</div>
</form>


        </div>
    </div>
</div>

<?php 

	if ($_SERVER['REQUEST_METHOD'] == "POST") {

		$room_no  		    = validation($_POST["room_no"]);
		$student_id 		= validation($_POST["student_id"]);
		$student_name 		= validation($_POST["student_name"]);
		$phone_number 	= validation($_POST["phone_number"]);
		$department 		= validation($_POST["department"]);
		$batch 		= validation($_POST["batch"]);
		$hall_name 		= validation($_POST["hall_name"]);
		$gender 	= $_POST["gender"];



	


		if ($con) {

			$query = "INSERT INTO mydb (room_no, student_id, student_name,phone_number, department, batch, hall_name, gender) VALUES
			('$room_no', '$student_id', '$student_name','$phone_number', '$department', '$batch', '$hall_name', '$gender')";

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