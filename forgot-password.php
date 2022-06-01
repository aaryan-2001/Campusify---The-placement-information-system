<?php require_once "controllerUserData.php"; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Forgot Password</title>
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
        
                <form action="forgot-password.php" method="POST" autocomplete="">
                    <h2>Forgot Password</h2>
                     <p class=" w3l-register-p">Enter your email address</p>
                    <?php
                        if(count($errors) > 0){
                            ?>
                            <div class="alert alert-danger text-center">
                                <?php 
                                    foreach($errors as $error){
                                        echo $error;
                                    }
                                ?>
                            </div>
                            <?php
                        }
                    ?>
                    <div class=" w3l-login-form">
					    <div class="group">
						<i class="fa fa-envelope"></i>
                        <input class="form-control" type="text" name="email" placeholder="Enter email address" required value="<?php echo $email ?>">
                    </div>
					</div>
                    
                        <button type="submit" name="check-email" value="Continue">Submit</button>
                    
                </form>
            
    </div>
	 <footer>
        <p class="copyright-agileinfo"> &copy; 2022 Campusify Project. All Rights Reserved</p>
    </footer>
    
</body>
</html>