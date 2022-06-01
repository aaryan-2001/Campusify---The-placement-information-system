<?php require_once "controllerUserData.php"; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Signup Form</title>
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
        <form action="signup-user.php" method="POST" autocomplete="off" enctype="multipart/form-data" >
            <h2>Signup Form</h2>
            <?php
            if (count($errors) == 1) {
            ?>
                <div class="alert alert-danger text-center">
                    <?php
                    foreach ($errors as $showerror) {
                        echo "<script>alert($showerror);window.location='signup-user.php'</script>";
                    }
                    ?>
                </div>
            <?php
            } elseif (count($errors) > 1) {
            ?>
                <div class="alert alert-danger">
                    <?php
                    foreach ($errors as $showerror) {
                    ?>
                        <li><?php echo "<script>alert($showerror);window.location='signup-user.php'</script>"; ?></li>
                    <?php
                    }
                    ?>
                </div>
            <?php
            }
            ?>

            <div class=" w3l-form-group">
                <label>Name:</label>
                <div class="group">
                    <i class="fa fa-user" aria-hidden="true"></i>
                    <input class="form-control" type="text" name="name" id="name" placeholder="Full Name" required value="<?php echo $name ?>">
                </div>
            </div>
            <div class=" w3l-form-group">
                <label>Email ID:</label>
                <div class="group">
                    <i class="fa fa-envelope"></i>
                    <input class="form-control" type="text" name="email" id="email" placeholder="Email Address" required value="<?php echo $email ?>">
                </div>
            </div>
            <div class=" w3l-form-group">
                <label>Mobile No</label>
                <div class="group">
                    <i class="fa fa-phone"></i>
                    <input type="text" class="form-control" name="mobile_no" id="mobile_no" placeholder="Mobile No" required="required" />
                </div>
            </div>
            <div class=" w3l-form-group">
                <label>Department</label>
                <div class="group">
                    <i class="fa fa-graduation-cap"></i>
                    <input type="text" class="form-control" name="department" id="department" placeholder="Department" required="required" />
                </div>
            </div>
            <div class=" w3l-form-group">
                <label>Year of graduation</label>
                <div class="group">
                    <i class="fa fa-calendar"></i>
                    <input type="text" class="form-control" name="year_of_graduation" id="year_of_graduation" placeholder="Year of graduation" required="required" />
                </div>
            </div>
            <div class=" w3l-form-group">
                <label>Student college id</label>
                <div class="group">
                    <i class="fa fa-id-badge"></i>
                    <input type="file" class="form-control" name="student_college_id" id="student_college_id" placeholder="Upload College id" required="required" />
                </div>
            </div>
            <div class=" w3l-form-group">
                <label>Password:</label>
                <div class="group">
                    <i class="fa fa-lock"></i>
                    <input class="form-control" type="password" name="password"  placeholder="Password" required>
                </div>
            </div>
            <div class=" w3l-form-group">
                <label>Confirm Password:</label>
                <div class="group">
                    <i class="fa fa-unlock"></i>
                    <input class="form-control" type="password" name="cpassword"  placeholder="Confirm password" required>
                </div>
            </div>
            <div class="w3l-form-group">
                <label>Select Your Type:</label>
                <div class="group">
                <i class="fa fa-unlock"></i>
                    <select class="form-control" type="text" name="class">
                        <option selected="selected">&nbsp&nbsp&nbspstudent&nbsp&nbsp&nbsp</option>
                    </select>
                    </div>
            </div>
            <div class=" w3l-form-group">
                <button type="submit" name="signup" value="signup">Signup</button>
            </div>
            <p class=" w3l-register-p">Already a member? <a href="login-user.php" class="register">Login</a></p>
        </form>

    </div>
    <footer>
        <p class="copyright-agileinfo"> &copy; 2022 Campusify Project. All Rights Reserved</p>
    </footer>


</body>

</html>