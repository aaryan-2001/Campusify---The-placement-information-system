<?php require_once "controllerTpoData.php"; 

$email_id=$_GET['rn'];
$query="DELETE FROM tpotable Where email = '$email_id'";
$data = mysqli_query($con,$query);
if ($data) {
    
    echo "<script>alert('Record Deleted Successfully');window.location='home-admin.php';</script>";
   
}
else{
    echo "<script>alert('Failed to delete record')</script>";
}

?>