<?php require_once "controllerTpoData.php"; ?>

<?php
$email = $_SESSION['email'];
$password = $_SESSION['password'];
if ($email != false && $password != false) {
  $sql = "SELECT * FROM tpotable WHERE email = '$email'";
  $run_Sql = mysqli_query($con, $sql);
  if ($run_Sql) {
    $fetch_info = mysqli_fetch_assoc($run_Sql);
    $status = $fetch_info['status'];
    $code = $fetch_info['code'];
    if ($status == "verified") {
      if ($code != 0) {
        header('Location: reset-code-tpo.php');
      }
    } else {
      header('Location: tpo-otp.php');
    }
  }
} else {
  header('Location: login-user.php');
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="icon" href="../../favicon.ico">

  <title>Admin Dashboard</title>
  <!-- Bootstrap core CSS -->
  <link href="css/bootstrap.min.css" rel="stylesheet">

  <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
  <link href="css/ie10-viewport-bug-workaround.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/dashboard.css" rel="stylesheet">

  <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
  <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
  <script src="js/ie-emulation-modes-warning.js"></script>

  <!-- fontawesome css -->
  <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
  <link href="font-awesome/css/font-awesome.css" rel="stylesheet" />
  <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" />
  <!-- /fontawesome css -->
</head>
<nav class="navbar navbar-inverse navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
      < <a class="navbar-brand" href="#">Welcome <?php echo $fetch_info['name'] ?> !</a>
    </div>
    <div id="navbar" class="navbar-collapse collapse">
      <ul class="nav navbar-nav navbar-right">

        <li><a href="logout-user.php">Logout</a></li>
      </ul>
      <!--<form class="navbar-form navbar-right">
            <input type="text" class="form-control" placeholder="Search...">
          </form>-->
    </div>
  </div>
</nav>

<div class="container-fluid">
  <div class="row">
    <div class="col-sm-3 col-md-2 sidebar">
      <ul class="nav nav-sidebar">
        <li class="active"><a href="home-admin.php">Dashboard <span class="sr-only">(current)</span></a></li>

        <li><a href="home-admin.php?page=manage_stu_admin"><span class="fa fa-user"></span> Student Details</a></li>
        <li><a href="home-admin.php?page=notification"><span class="fa fa-bell"></span> Notification</a></li>
        <li><a href="home-admin.php?page=CreateJob"><span class="fa fa-plus-square"></span> Create Notification</a></li>
        <li><a href="home-admin.php?page=manage_tpo"><span class="fa fa-user"></span> Tpo Details</a></li>
        <li><a href="home-admin.php?page=JobApplication"><span class="fa fa-check-square-o"></span> Check Applied Applications</a></li>
        <li><a href="home-admin.php?page=complaint_sol"><span class="fa fa-check"></span> Complaints Solution</a></li>
        <li><a href="home-admin.php?page=contact"><span class="fa fa-check"></span> Contact Us</a></li>
      </ul>


    </div>
    <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
      <!-- container-->
      <?php
      @$page =  $_GET['page'];
      if ($page != "") {
        if ($page == "manage_stu_admin") {
          include('manage_stu_admin.php');
        }
        if ($page == "JobApplication") {
          include('JobApplication.php');
        }

        if ($page == "notification") {
          include('notification.php');
        }

        if ($page == "CreateJob") {
          include('CreateJobAdmin.php');
        }
        if ($page == "complaint_sol") {
          include('complaint_sol.php');
        }


        if ($page == "manage_tpo") {
          include('manage_tpo.php');
        }
        if ($page == "contact"){
          include('admin_contact.php');
        }
      } else {
      ?>
        <!-- container end-->




        <h1 class="page-header"> Admin Dashboard</h1>


      <?php } ?>



    </div>
  </div>
</div>

<!-- Bootstrap core JavaScript
    ================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script>
  window.jQuery || document.write('<script src="../js/vendor/jquery.min.js"><\/script>')
</script>
<script src="../js/bootstrap.min.js"></script>
<!-- Just to make our placeholder images work. Don't actually copy the next line! -->
<script src="../js/vendor/holder.min.js"></script>
<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
<script src="../js/ie10-viewport-bug-workaround.js"></script>


</body>

</html>