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
	<p>Baust Hall Management System</p>
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
	<li><a href="std_login.php">Log In</a></li>
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
		
			
	<?php
			include 'db_connect.php';

				$page=$_GET["page"];
				if($page=="" || $page=="1")
				{
					$page1=0;
				}

				else
				{
					$page1=($page*10)-10;
				}

				$sql="SELECT * FROM mydb limit $page1,10";
			    
			    // $sql = "SELECT * FROM mydb ORDER BY student_id ASC";

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
					<td>Room</td>
					<td>Student ID</td>
					<td>Student Name</td>
					<td>Department</td>
					<td>Batch</td>
					<td>Hall Name</td>
					<td>Gender</td>
			

				</tr>
				<?php foreach ($student_detail as $studest) {
				    ?>
				<tr>
					<td><?php echo $studest['room_no']; ?></td>
					<td><?php echo $studest['student_id']; ?></td>
					<td><?php echo $studest['student_name']; ?></td>
					<td><?php echo $studest['department']; ?></td>
					<td><?php echo $studest['batch']; ?></td>
					<td><?php echo $studest['hall_name']; ?></td>
					<td><?php echo $studest['gender']; ?></td>
				
					
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
			
<?php

   mysql_connect("localhost","root","");
   mysql_select_db("baust1");


/*
   $res=mysql_query("SELECT * FROM mydb limit $page1,3");
   while ($row=mysql_fetch_array($res)) {
   	echo $row["room_no"]." ".$row["student_id"]." ".$row["student_name"]." ". $row["department"]." ".$row["batch"]." ". $row["hall_name"];
   	echo "<br>";
  
    } 
*/
$res1=mysql_query("SELECT * FROM mydb") ;
$cou=mysql_num_rows($res1);
$a=$cou/10;
//echo $a;
$a=ceil($a);
echo "<br>";
for ($b=1;$b<=$a;$b++) {

	?>
	
	<a href="index.php?page=<?php echo $b;?>" style="text-decoration: none"><?php echo $b."";?></a><?php 
}
 ?>
	</div>
	<div class="sidebar clear">
		<div class="samesidebar clear">
			<?php

			if (isset($_POST['search'])) {
				$valueToSearch = $_POST['valueToSearch'];
				$query = "SELECT * FROM `mydb` WHERE CONCAT(`student_name`) LIKE '%".$valueToSearch."%'";
				$search_result = filterTable($query);
			}
			else{
				$query="SELECT * FROM `mydb`";
				$search_result = filterTable($query);

			}

			function filterTable($query){
				$connect = mysqli_connect("localhost","root","","baust1");
				$filter_Result = mysqli_query($connect,$query);
				return $filter_Result;
			}

			  ?>
			<h2>Search</h2>
		<form action="search.php" method="post">
			<input type="text" name="valueToSearch" placeholder="Value To Search"><br><br>
			<input type="submit" name="search" value="Search"><br><br>
			
		</form>
		</div>
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