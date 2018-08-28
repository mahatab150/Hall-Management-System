<?php
    require_once('db_connect.php');
    $id = $_GET['id'];
    $show_query = "SELECT * FROM mydb WHERE student_id = $id";
    $result = mysqli_query($con , $show_query)->fetch_assoc();
    //print_r($result);
?>
<!DOCTYPE html>
<html>
<head>
	<title>Baust Home Page</title>
	
	<style type="text/css">
		body{
			background: cornsilk;
		}
	</style>
</head>
<body>
			
<form class="form-horizontal background-form" method="post" action="">
	<div class="form-group">
		<label for="inputEmail3" class="control-label">Room No:</label>
		<div class="">
		  <td><input class="myinput" type="text" name="room_no" required="1" value="<?php echo $result['room_no']; ?>"></td>
		</div>
	</div>

	<div class="form-group">
		<label   class="control-label">ID No:</label>
		<div class="">
		  <td><input class="myinput" type="text" name="student_id" required="1" value="<?php echo $result['student_id']; ?>"></td>
		</div>
	</div>

	<div class="form-group">
		<label  class="control-label">Student Name:</label>
		<div class="">
		  <td><input class="myinput" type="text" name="student_name" required="1" value="<?php echo $result['student_name']; ?>"></td>
		</div>
	</div>

	<div class="form-group">
		<label   class="control-label">Contact Number:</label>
		<div class="">
		 <td><input class="myinput" type="text" name="phone_number" required="1" value="<?php echo $result['phone_number']; ?>"></td>
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
	  <div class ="">
		  	<select placeholder="select your beverage" name="department">
			<?php foreach ($depertments as $key) { ?>

				<!-- <option></option> -->
				
				<option <?php if( strcmp($result['department'] , $key['department_name']) == 1 ) {echo 'selected';} ?>  value ="<?php echo $key['department_name']; ?>"><?php echo $key['department_name']; ?></option>
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
				<option <?php if( strcmp($result['batch'] , $batch['batch_no']) == 1 ) {echo 'selected';} ?> value="<?php echo $batch['batch_no']; ?>"><?php echo $batch['batch_no']; ?></option>
			<?php } ?>
			</select>
		</div>
	</div>

	<div class="form-group">
		<label   class="control-label">Hall:</label>
		<div class="">
			<?php echo $result['hall_name']; ?>
		  	<select placeholder="select your beverage" name="hall_name">
				<option >SELECT HALL</option>
			<?php foreach ($halls as $hall) { ?>
				<option <?php if( strcmp($result['hall_name'] , $hall['hall_name']) == 1 ) {echo 'selected';} ?> value="<?php echo $hall['hall_name']; ?>"><?php echo $hall['hall_name']; ?></option>
			<?php } ?>
			</select>
		</div>
	</div>

	<div class="form-group">
		<label  class="control-label">Gender :</label>
		<div class="">
			<input type="radio" value="Male" name = "gender" checked >Male
			<input type="radio" value="Female" name = "gender">Female
		</div>
	</div>



	<div class="form-group">
		<div class="col-sm-offset-2 col-sm-10">
		  <button type="submit" class="btn btn-success" name="update">Update</button>
		 
		</div>
	</div>
</form>


<hr>


			<?php 

			
			// For Update

			    if (isset($_POST['update'])) {

			        $room_no            = validation($_POST["room_no"]);
			        $student_id         = validation($_POST["student_id"]);
			        $student_name       = validation($_POST["student_name"]);
			        $phone_number       = validation($_POST["phone_number"]);
			        $department         = validation($_POST["department"]);
			        $batch      = validation($_POST["batch"]);
			        $hall_name      = validation($_POST["hall_name"]);
			        $gender     = $_POST["gender"];

			        

$update_query = "UPDATE mydb SET room_no = '$room_no', student_name = '$student_name', phone_number= '$phone_number', department = '$department ', batch = '$batch ', hall_name = '$hall_name', gender = '$gender' WHERE student_id = '$id'";


			        if ($con AND mysqli_query($con, $update_query))
			        {
			            header("Location:admin.php");
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
<hr>


		
	





</body>
</html>