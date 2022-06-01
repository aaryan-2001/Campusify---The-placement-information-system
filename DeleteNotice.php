<?php require_once "controllerUserData.php"; 

$job_id=$_GET['rn'];
$query="DELETE FROM placement_tbl Where JobID = '$job_id'";
$data = mysqli_query($con,$query);
if ($data) {
    
    echo "<script>alert('Notice Deleted Successfully');</script>";
   
}
else{
    echo "<script>alert('Failed to delete Notice');</script>";
}

?>