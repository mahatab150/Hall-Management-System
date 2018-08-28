<?php
//Get values passe from from in login.php file
$uroll=$_POST['user'];
$password=$_POST['pass'];

//to prevent mysql injection
$con = mysqli_connect("localhost","root","","baust1");
//mysql_select_db("login");
$uroll = stripslashes($uroll);
$password = stripslashes($password);
$uroll = mysqli_real_escape_string($con,$uroll);
$password = mysqli_real_escape_string($con,$password);
// connect to the server and select database


//Query the database for user
$result = mysqli_query($con,"select * from users where uroll = '$uroll' and password = '$password'")
or die("Failed to query database ".mysql_error());
$row = mysqli_fetch_array($result);
if ($row['uroll'] == $uroll && $row['password'] == $password){
	echo "Login success!!! welcome".$row['uroll'];
	header("Location:meal.php");

} else{
	echo "Failed to login!";
}
?>



