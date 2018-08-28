<?php
//Get values passe from from in login.php file
$username=$_POST['user'];
$password=$_POST['pass'];

//to prevent mysql injection
$con = mysqli_connect("localhost","root","","login");
//mysql_select_db("login");
$username = stripslashes($username);
$password = stripslashes($password);
$username = mysqli_real_escape_string($con,$username);
$password = mysqli_real_escape_string($con,$password);
// connect to the server and select database


//Query the database for user
$result = mysqli_query($con,"select * from users where username = '$username' and password = '$password'")
or die("Failed to query database ".mysql_error());
$row = mysqli_fetch_array($result);
if ($row['username'] == $username && $row['password'] == $password){
	echo "Login success!!! welcome".$row['username'];
	header("Location:admin.php");

} else{
	echo "Failed to login!";
}
?>


