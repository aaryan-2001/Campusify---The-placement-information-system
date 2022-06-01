
<?php
$con = mysqli_connect("localhost", "root", "", "campusify");
session_start();
$sid = $_SESSION['email'];
$jid = $_POST['jid'];

$email_check = "SELECT * FROM jobapply_tbl WHERE email = '$sid' AND JobID = '$jid' ";
$res = mysqli_query($con, $email_check);

if (mysqli_num_rows($res) > 0) {
	echo "<script>alert('You already applied for the job!');window.location='home.php';</script>";
} 
else {
	$qry = "Insert into jobapply_tbl (email, JobID, Applied) values ('$sid',$jid,'0')";
	$res2 = mysqli_query($con, $qry);

	echo "<script>alert('Data saved');</script>";
	header('refresh:0;url=http://localhost:8080/campusify/home.php');
}
?>

