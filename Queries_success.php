<?php require_once "controllerUserData.php"; ?>
<?php

$student_id = $_SESSION['email'];

$query1 = "SELECT * FROM usertable WHERE email = '$student_id'";
$result1 = mysqli_query($con, $query1);
$row1 = mysqli_fetch_assoc($result1);
$roll = $row1['email'];
$name = $row1['name'];

?>


<?php

if (isset($_POST['submitcomp'])) {
    $email = $_SESSION['email'];
    $message = $_POST['message'];
    $name = $row1['name'];
    $mobile = $_POST['mobile'];


    /*echo "<script type='text/javascript'>alert('<?php echo $roll ?>')</script>";*/
    $query_imp = "SELECT * FROM complaint WHERE email = '$email'";
    $result_imp = mysqli_query($con, $query_imp);
    $row_imp = mysqli_fetch_assoc($result_imp);
    $status = $row_imp['Status'];
    if (($status) == Null) {

        $query = "SELECT * FROM usertable WHERE email = '$email'";
        $result = mysqli_query($con, $query);
        if ($row = mysqli_fetch_assoc($result)) {
            if ($result) {

                $query3 = "INSERT INTO complaint (email,status,message, name, mobile) VALUES ('$roll',true,'$message','$name', '$mobile')";

                $result3 = mysqli_query($con, $query3);

                if ($result3) {
                    echo "<script type='text/javascript'>alert('Complaint sent Successfully')</script>";
                    header('refresh:0;url=http://localhost:8080/campusify/home.php');
                } else {
                    echo "<script>alert('Your one complaint Already in the queue')</script>";
                    header('refresh:0;url=http://localhost:8080/campusify/home.php');
                }
            }
        }
    } else {
        echo "<script type='text/javascript'>alert('Can't file Another complaint yet')</script>";
    }
}
?>