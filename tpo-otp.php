<?php require_once "controllerTpoData.php"; ?>

<?php
$email = $_SESSION['email'];
if ($email == false) {
    header('Location: login-user.php');
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Code Verification</title>
    <!-- meta tags -->
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="keywords" content="Art Sign Up Form Responsive Widget, Audio and Video players, Login Form Web Template, Flat Pricing Tables, Flat Drop-Downs, Sign-Up Web Templates,
        Flat Web Templates, Login Sign-up Responsive Web Template, Smartphone Compatible Web Template, Free Web Designs for Nokia, Samsung, LG, Sony Ericsson, Motorola Web Design" />
    <!-- /meta tags -->
    <!-- custom style sheet -->
    <link href="web_files/style.css" rel="stylesheet" type="text/css" />
    <!-- /custom style sheet -->
    <!-- fontawesome css -->
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <link href="font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" />
    <!-- /fontawesome css -->
    <!-- google fonts-->
    <link href="//fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <!-- /google fonts-->
</head>

<body>
    <h1>Campusify</h1>
    <div class=" w3l-login-form">
        <h2>Email Code Verification</h2>
        <form action="tpo-otp.php" method="POST" autocomplete="off">

            <?php
            if (isset($_SESSION['info'])) {
            ?>
                <h4 style="color:green; text-align: center; ">
                    <?php echo $_SESSION['info']; ?>
            </h4>
<?php
            }
?>
<?php
if (count($errors) > 0) {
?>
    <h4 style="color:red; text-align:center;" >
        <?php
        foreach ($errors as $showerror) {
            echo $showerror;
        }
        ?>
    </h4>
<?php
}
?>
<div class=" w3l-login-form">
    <label style="color:grey; padding-bottom:15px;">OTP:</label>
	
    <div class="group">
        <i class="fa fa-key" ></i>
        <input class="form-control" type="text" name="otp" placeholder="Enter verification code" required>
    </div>
</div>

<button type="submit" name="check" value="Submit">Submit</button>
</form>
</div>
<footer>
        <p class="copyright-agileinfo"> &copy; 2022 Campusify Project. All Rights Reserved</p>
    </footer>


</body>

</html>