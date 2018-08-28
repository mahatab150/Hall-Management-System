<?php
    require_once('db_connect.php');
    $id = $_GET['id'];
    $show_query = "SELECT * FROM mydb WHERE student_id = $id";
    $result = mysqli_query($con , $show_query)->fetch_assoc();
    $delete_query = "DELETE FROM mydb WHERE student_id = $id";
			        if (mysqli_query($con,$delete_query)) {
			            header("Location:admin.php");
			        } else {
			            echo "Sorry Delete Not Possiable";
			        }
?>