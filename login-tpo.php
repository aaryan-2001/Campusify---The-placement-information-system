<?php require_once "controllerTpoData.php"; ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>TPO-Login</title>
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
        <h2>Admin/TPO Login</h2>
        <form action="login-tpo.php" method="POST" autocomplete="off">

            <div class=" w3l-form-group">
                <label>TPO Email id:</label>
                <div class="group">
                    <i class="fa fa-user" aria-hidden="true"></i>
                    <input type="text" class="form-control" name="email" id="email" placeholder="Email" required="required" />
                </div>
            </div>
            <div class=" w3l-form-group">
                <label>Password:</label>
                <div class="group">
                    <i class="fa fa-unlock"></i>
                    <input type="password" class="form-control" name="password" id="password" placeholder="Password" required="required" />
                </div>
            </div>
            <p class=" w3l-register-p">Forgot password?<a href="forgot-password-tpo.php" class=" register"> Click Me</a></p>

            <button type="submit" name="login" value="Login">Login</button>
        </form>
        <p class=" w3l-register-p">Login as<a href="login-user.php" class="register"> Student</a></p>
        <p class=" w3l-register-p">Don't have an account?<a href="signup-tpo.php" class="register"> Sign up</a></p>
    </div>
    <footer>
        <p class="copyright-agileinfo"> &copy; 2022 Campusify Project. All Rights Reserved</p>
    </footer>

</body>

</html>