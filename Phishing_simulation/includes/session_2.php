<?php
 include '../includes/connection.php';
//Start session
    session_start();
if (!isset($_SESSION['Email']) ||(trim ($_SESSION['Email']) == '')) {
	header("location:../views/PS_index.php");
    exit();
} 

$session_id=$_SESSION['Email'];   
$user_query = mysqli_query($conn,"SELECT * FROM user WHERE Email='$session_id'")or die(mysqli_error());
$user_row = mysqli_fetch_array($user_query);

$Fullname = $user_row['name']; 
$roll_number=$_SESSION['roll_number']; 
?>